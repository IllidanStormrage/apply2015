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
    Route::post('test', ['middleware' => 'roleCheck', 'as' => 'api/test', 'uses' => 'AcademyController@index']);



    /***正式路由****/
    Route::get('cache', ['as' => 'api/cache', 'uses' => 'TaskController@cacheRoleRelation']);//把权限表存入缓存
    Route::get('academy', ['as' => 'api/academy', 'uses' => 'AcademyController@index']);//学院列表
    Route::post('login', ['as' => 'api/login', 'uses' => 'LoginController@login']);//登录
    Route::post('addmember', ['as' => 'api/addmember', 'uses' => 'SetMemberController@edit']);//部门添加人员

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




