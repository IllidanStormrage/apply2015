<?php

namespace App\Http\Controllers\Api;

use App\Model\Department;
use App\Model\Process;
use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SetProcessController extends Controller
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
        $input = Request::all();
        $auth = \Auth::user();
        $auth_role = \Cache::get('user_id_'.$auth['id']);
        if(trim($input['process_name']) == '' || trim($input['process_name']) == null) {
            return ['status' => 400, 'info' => '流程名不能为空!'];
        }
        if(!$this->checkDepartment($auth_role['role'], $input['department_id'])) {
            return ['status' => 403, 'info' => '不能添加非本部门流程!'];
        }
        if(!$this->checkAuthLevel($auth_role['role'], $input['department_id'])) {
            return ['status' => 403, 'info' => '权限不够!'];
        }
        $remark = Process::where('department_id', '=', $input['department_id'])->where('remark', '<', 100)->orderBy('remark', 'desc')->select('remark')->value('remark');
        $organization_level = Department::find($input['department_id'])->value('organization_level');
        $data = [
            'department_id' => $input['department_id'],
            'processname' => trim($input['process_name']),
            'organization_level' => $organization_level,
            'remark' => $remark+1,
        ];
        $data = Process::create($data);
        return ['status' => 200, 'info' => '成功', 'data' => $data];
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
        dd($request->all());
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

    private function checkAuthLevel($roles, $department_id) {
        foreach($roles as $role) {
            if($department_id == $role['department_id']) {
                if($role['role_id'] > 3 && $role['role_id'] < 8)
                    return true;
            }
            $department = Department::find($department_id);
            if ($role['role_id'] >= 6 && $role['department']['organization_id'] == $department['organization_id']) {
                return true;
            }

        }
        return false;
    }

    private function checkDepartment($auth_role, $department_id) {
        foreach ($auth_role as $role) {
            if ($role['department_id'] == $department_id) {
                return true;
            }
            $department = Department::find($department_id);
            if ($role['role_id'] >= 6 && $role['department']['organization_id'] == $department['organization_id']) {
                return true;
            }
        }
        return false;
    }
}
