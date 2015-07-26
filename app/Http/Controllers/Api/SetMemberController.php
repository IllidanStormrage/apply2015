<?php

namespace App\Http\Controllers\Api;

use App\Model\User;
use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SetMemberController extends Controller
{
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
    public function create() {

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
    public function edit() {
        $input = Request::all();
        $auth = \Auth::user();
        $auth_role = \Cache::get('user_id_'.$auth['id']);
        if(!$this->checkDepartment($auth_role['role'], $input['department_id'])) {
            return ['status' => 403, 'info' => '你不能添加其他部门/组织的人员'];
        }
        if (!$this->checkAuthLevel($auth_role['role'], $input['department_id'], $input['level'])) {
            return ['status' => 403, 'info' => '你不能添加权限大于或等于你的人'];
        }
        $studentNum = $input['studentnum'];


        User::where('studentnum', '=', $studentNum);
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

    //检查是否是所属部门
    private function checkDepartment($auth_role, $department_id) {
        foreach($auth_role as $role) {
            if($role['department_id'] == $department_id) {
                return true;
            }
        }
        return false;
    }

    //检查被添加人员权限是否大于添加人员
    private function checkAuthLevel($auth_role, $department_id, $role_id){
        foreach ($auth_role as $role) {
            if($role['department_id'] == $department_id) {
                if($role_id >= $role['role_id'])
                    return false;
            }
        }
        return true;
    }
}
