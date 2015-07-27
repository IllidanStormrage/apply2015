<?php

namespace App\Http\Controllers\Api;

use App\Model\Department;
use App\Model\User;
use App\Model\User_department;
use App\Model\User_role;
use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SetMemberController extends Controller {

    public function index() {
        $auth = \Auth::user();
        $auth_role = \Cache::get('user_id_'.$auth['id']);
    }

    public function del() {
        $input = Request::all();
        if ($input['role_id'] > 6 || $input['role_id'] < 2) {
            return ['status' => 400, 'info' => '数据非法!'];
        }
        $auth = \Auth::user();
        $auth_role = \Cache::get('user_id_'.$auth['id']);
        if(!$this->checkDepartment($auth_role['role'], $input['department_id'])) {
            return ['status' => 403, 'info' => '你不能修改其他部门/组织的人员'];
        }
        if (!$this->checkAuthLevel(array_only($auth_role, ['role']), $input['department_id'], $input['role_id'])) {
            return ['status' => 403, 'info' => '你不能修改权限大于或等于你的人'];
        }

        $user = User::where('studentnum', '=', $input['studentnum'])->first();

        User_role::where('user_id', '=', $user['id'])->delete();
        User_department::where('user_id', '=', $user['id'])->delete();
        return ['status' => 200, 'info' => '删除成功!'];
    }

    public function edit() {
        $input = Request::all();
        if ($input['role_id'] > 6 || $input['role_id'] < 2) {
            return ['status' => 400, 'info' => '数据非法!'];
        }
        $auth = \Auth::user();
        $auth_role = \Cache::get('user_id_'.$auth['id']);
        if(!$this->checkDepartment($auth_role['role'], $input['department_id'])) {
            return ['status' => 403, 'info' => '你不能修改其他部门/组织的人员'];
        }
        if (!$this->checkAuthLevel(array_only($auth_role, ['role']), $input['department_id'], $input['role_id'])) {
            return ['status' => 403, 'info' => '你不能修改权限大于或等于你的人'];
        }

        $user = User::where('studentnum', '=', $input['studentnum'])->first();
        $data = [
            'role_id' => $input['role_id'],
            'department_id' => $input['department_id']
        ];
        User_role::where('user_id', '=', $user['id'])->update($data);
        User_department::where('user_id', '=', $user['id'])->update(['department_id' => $input['department_id']]);
        return ['status' => 200, 'info' => '修改成功!'];
    }

    public function add() {
        $input = Request::all();
        if ($input['role_id'] > 6 || $input['role_id'] < 2) {
            return ['status' => 400, 'info' => '数据非法!'];
        }
        $auth = \Auth::user();
        $auth_role = \Cache::get('user_id_'.$auth['id']);
        if(!$this->checkDepartment($auth_role['role'], $input['department_id'])) {
            return ['status' => 403, 'info' => '你不能添加其他部门/组织的人员'];
        }
        if (!$this->checkAuthLevel(array_only($auth_role, ['role']), $input['department_id'], $input['role_id'])) {
            return ['status' => 403, 'info' => '你不能添加权限大于或等于你的人'];
        }

        $user = User::where('studentnum', '=', $input['studentnum'])->first();
        $data = [
            'user_id' => $user['id'],
            'role_id' => $input['role_id'],
            'department_id' => $input['department_id']
        ];
        User_role::create($data);
        User_department::create(array_except($data, ['role_id']));
        return ['status' => 200, 'info' => '添加成功!'];
    }

    //检查是否是所属部门
    private function checkDepartment($auth_role, $department_id) {
        foreach ((array)$auth_role as $role) {
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

    //检查被添加人员权限是否大于添加人员
    private function checkAuthLevel($auth_role, $department_id, $role_id){
        foreach ((array)$auth_role['role'] as $role) {
            if($role['department_id'] == $department_id) {
                if($role_id >= $role['role_id'])
                    return false;
            }
        }
        return true;
    }
}
