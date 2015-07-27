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
    Route::post('test', [ 'as' => 'api/test', 'uses' => 'AcademyController@index']);



    /***正式路由****/
    Route::get('cache', ['as' => 'api/cache', 'uses' => 'TaskController@taskList']);//把权限表存入缓存
    Route::get('academy', ['as' => 'api/academy', 'uses' => 'AcademyController@index']);//学院列表
    Route::post('login', ['as' => 'api/login', 'uses' => 'LoginController@login']);//登录
    Route::post('addmember', ['as' => 'api/addmember', 'uses' => 'SetMemberController@add']);//部门添加人员
    Route::post('editmember', ['as' => 'api/editmember', 'uses' => 'SetMemberController@edit']);//部门编辑人员
    Route::post('deletemember', ['as' => 'api/editmember', 'uses' => 'SetMemberController@del']);//部门删除人员
    Route::post('member', ['as' => 'api/member', 'uses' => 'SetMemberController@index']);//部门浏览人员

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
});
/**********************************/




