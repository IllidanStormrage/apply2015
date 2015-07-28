<?php
/**
 * @Author Lich
 * 老子的一堆垃圾代码
 */
namespace App\Http\Controllers\Api;

use App\Model\Department;
use App\Model\Organization;
use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SetDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $auth = \Auth::user();
        $auth_role = \Cache::get('user_id_'.$auth['id']);
        foreach($auth_role['role'] as $role) {
            $organization_id[] = $role['department']['organization_id'];
        }
        $organization_department = \Cache::get('organization_department');
        foreach($organization_department as $v) {
            foreach($organization_id as $id) {
                if($v['id'] == $id) {
                    $data[] = $v;
                }
            }
        }
        return isset($data)?$data:[];
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
        foreach($auth_role['role'] as $role) {
            $organization_id[] = $role['department']['organization_id'];
        }
        if(!$this->checkAuthLevel($auth_role, $input)) {
            return ['status' => 403, 'info' => '权限不够!'];
        }
        if(!$this->checkOrganization($organization_id, $input)) {
            return ['status' => 403, 'info' => '你不能添加其他组织的部门!'];
        }
        if(trim($input['department_name']) == '' || trim($input['department_name']) == null)
            return ['status' => 400, 'info' => '部门名称不能为空!'];
        $organization_level = Organization::where('id', '=', $input['organization_id'])->select('level')->first();
        $data = [
            'department' => trim($input['department_name']),
            'organization_id' => $input['organization_id'],
            'show' => 1,
            'introduce' => trim($input['introduce']),
            'organization_level' => $organization_level['level']
        ];
        Department::create($data);
        return ['status' => 200, 'info' => '添加成功!'];
    }


    public function edit() {
        $input = Request::all();
        $auth = \Auth::user();
        $auth_role = \Cache::get('user_id_'.$auth['id']);
        foreach($auth_role['role'] as $role) {
            $organization_id[] = $role['department']['organization_id'];
        }
        if(!$this->checkAuthLevel($auth_role, $input)) {
            return ['status' => 403, 'info' => '权限不够!'];
        }
        if(!$this->checkOrganization($organization_id, $input)) {
            return ['status' => 403, 'info' => '你不能修改其他组织的部门!'];
        }
        if(trim($input['department_name']) == '' || trim($input['department_name']) == null)
            return ['status' => 400, 'info' => '部门名称不能为空!'];
        if(!is_numeric($input['department_id'])) {
            return ['status' => 400, 'info' => '数据非法!'];
        }
        $department = Department::find($input['department_id']);
        $department->department = trim($input['department_name']);
        $department->introduce = trim($input['introduce']);
        $department->save();
        return ['status' => 200, 'info' => '修改成功!'];
    }

    public function destroy()
    {
        $input = Request::all();
        $auth = \Auth::user();
        $auth_role = \Cache::get('user_id_'.$auth['id']);
        foreach($auth_role['role'] as $role) {
            $organization_id[] = $role['department']['organization_id'];
        }
        if(!$this->checkAuthLevel($auth_role, $input)) {
            return ['status' => 403, 'info' => '权限不够!'];
        }
        if(!$this->checkOrganization($organization_id, $input)) {
            return ['status' => 403, 'info' => '你不能删除其他组织的部门!'];
        }
        if(!is_numeric($input['department_id'])) {
            return ['status' => 400, 'info' => '数据非法!'];
        }
        Department::destroy($input['department_id']);
        return ['status' => 200, 'info' => '修改成功!'];
    }

    private function checkAuthLevel($auth_role, $input) {
        foreach($auth_role['role'] as $role) {
            if($role['department']['organization_id'] == $input['organization_id']) {
                if($role['role_id'] >= 6) {
                    return true;
                }
            }
        }
        return false;
    }

    private function checkOrganization($organization_id, $input) {
        foreach ($organization_id as $id) {
            if($id == $input['organization_id']) {
                return true;
            }
        }
        return false;
    }
}
