<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/********Lich's Route***************/
Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'api', 'namespace' => 'APi'], function() {
    Route::get('pwd', ['as' => 'api/pwd', function() {
        return bcrypt('123456');
    }]);
    Route::post('test', [ 'as' => 'api/test', 'uses' => 'TaskController@cacheProcess']);



    /***正式路由****/
    Route::get('cache', ['as' => 'api/cache', 'uses' => 'TaskController@taskList']);//把一些数据存入缓存
    Route::get('academy', ['as' => 'api/academy', 'uses' => 'AcademyController@index']);//学院列表
    Route::post('login', ['as' => 'api/login', 'uses' => 'LoginController@login']);//登录
    Route::post('addmember', ['as' => 'api/addmember', 'uses' => 'SetMemberController@add']);//部门添加人员
    Route::post('editmember', ['as' => 'api/editmember', 'uses' => 'SetMemberController@edit']);//部门编辑人员
    Route::post('deletemember', ['as' => 'api/editmember', 'uses' => 'SetMemberController@del']);//部门删除人员
    Route::post('member', ['as' => 'api/member', 'uses' => 'SetMemberController@index']);//部门浏览人员
    Route::get('departmentlist', ['as' => 'api/departmentlist', 'uses' => 'SetDepartmentController@index']);//查看部门列表
    Route::post('departmentadd', ['as' => 'api/departmentadd', 'uses' => 'SetDepartmentController@create']);//添加部门
    Route::post('departmentedit', ['as' => 'api/departmentedit', 'uses' => 'SetDepartmentController@edit']);//修改部门
    Route::post('departmentdelete', ['as' => 'api/departmentdelete', 'uses' => 'SetDepartmentController@destroy']);//删除部门
    Route::post('processadd', ['as' => 'api/processadd', 'uses' => 'SetProcessController@create']);//添加流程
    Route::post('processdel', ['as' => 'api/processdel', 'uses' => 'SetProcessController@destory']);//删除流程
    Route::post('processedit', ['as' => 'api/processedit', 'uses' => 'SetProcessController@edit']);//编辑流程
    Route::get('process', ['as' => 'api/process', 'uses' => 'SetProcessController@index']);//浏览流程
    /*************/
});

/**********************************/


/********Excelsior's Route***************/
Route::group(['prefix' => 'home', 'namespace' => 'Home'], function() {
    Route::get('index', ['as' => 'home/test', 'uses' => 'IndexController@index']);
    Route::get('presidium', ['as' => 'home/presidium', 'uses' => 'PresidiumController@presidium']);
    Route::get('department', ['as' => 'home/department', 'uses' => 'DepartmentController@department']);
    Route::get('set', ['as' => 'home/set', 'uses' => 'SetController@set']);
    Route::get('bar', ['as' => 'home/bar', 'uses' => 'BarController@bar']);
    Route::get('audit', ['as' => 'home/audit', 'uses' => 'AuditController@audit']);
    Route::get('add', ['as' => 'home/add', 'uses' => 'AddController@add']);
    Route::get('info', ['as' => 'home/info', 'uses' => 'InfoController@info']);
});
/**********************************/




