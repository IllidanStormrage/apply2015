<?php

namespace App\Http\Controllers\Api;

use App\Model\Academy;
use App\Model\Department;
use App\Model\Organization;
use App\Model\User_department;
use App\Model\Role;
use App\Model\Role_route;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TaskController extends Controller {

    public function taskList() {
        self::cacheAcademyList();
        self::cacheRoleRelation();
        self::cacheOrganizationDepartments();
        self::cacheDepartmentMembers();
        self::cacheProcess();
        return ['status' => 200, 'info' => '成功!'];
    }

    //缓存学院列表
    public function cacheAcademyList() {
        if (\Cache::has('academyList')) {
            \Cache::forget('academyList');
        }
        \Cache::rememberForever('academyList', function() {
            return Academy::all();;
        });
        return ['status'=>200, 'info'=>'成功!'];
    }

    //缓存组织-部门列表
    public function cacheOrganizationDepartments() {
        $organizations = Organization::all();
        foreach($organizations as $organization) {
            $organization->departments;
        }
        if (\Cache::has('organization_department')) {
            \Cache::forget('organization_department');
        }
        $value = \Cache::rememberForever('organization_department', function() use ($organizations) {
            return $organizations;
        });
        return $value;
    }

    //缓存权限表
    public function cacheRoleRelation() {
        $roles = Role::all();
        foreach($roles as $role) {
            $role_id = $role['id'];
            if (\Cache::has('role_'.$role_id)) {
                \Cache::forget('role_'.$role_id);
            }
            \Cache::rememberForever('role_'.$role_id, function() use ($role_id) {
                return Role::find($role_id)->routes;
            });
        }
        return ['status'=>200, 'info'=>'成功!'];
    }

    //缓存部门人员列表
    public function cacheDepartmentMembers() {
        $organizations = Organization::all();
        foreach($organizations as $organization) {
            $organization->departments;
        }
        foreach($organizations as $departments) {
            foreach($departments['departments'] as $department) {
                $departmentMember = User_department::where('department_id', '=', $department['id'])->join('users', 'user_department.user_id', '=', 'users.id')->get();//todo select('')
                if (\Cache::has('department_'.$department['id'])) {
                    \Cache::forget('department_'.$department['id']);
                }
                $value[] = \Cache::rememberForever('department_'.$department['id'], function() use ($departmentMember) {
                    return $departmentMember;
                });
            }
        }
        return $value;
    }

    //缓存招新流程
    public function cacheProcess() {
        $departments = Department::all();
        foreach($departments as $department) {
            if (\Cache::has('departmentProcess_'.$department['id'])) {
                \Cache::forget('departmentProcess_'.$department['id']);
            }
            $value[] = \Cache::rememberForever('departmentProcess_'.$department['id'], function() use ($department) {
                return $department->processes;
            });
        }
        return $value;
    }


}
