<?php

namespace App\Http\Controllers\Api;

use Auth;
use Illuminate\Routing\Controller;
use App\Model\User_role;
use Illuminate\Support\Facades\Request;
use App\Http\Requests;

class LoginController extends Controller {
    public function login() {

        $input = Request::only('username', 'password');
        if(!$this->verify($input)) {
            return ['status' => 400, 'info' => '数据错误!'];
        }

        if(Auth::attempt(['studentnum' => $input['username'], 'password' => $input['password']], true)) {
            $userInfo = Auth::user();
            $roleInfo = User_role::where('user_id', '=', $userInfo['id'])->get();
            foreach($roleInfo as $role)
                $role->department;
            $data = [
                'baseinfo' => $userInfo,
                'role' => $roleInfo
            ];
            \Cache::forever('user_id_'.$userInfo['id'], $data);
            //todo pc/mobile
            return [
                        'status' => 200,
                        'info' => '登录成功!',
                        'data'=> $data
            ];
        }
        return ['status' => 400, 'info' => '用户名或密码错误!'];
    }

    private function verify($input) {

        $v = \Validator::make($input,
            [
                'username' => 'required|numeric',
                'password' => 'required|min:6|max:18'
            ]);
        if($v->fails()) {
            return false;
        } else {
            return true;
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
