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
    Route::post('login', ['as' => 'api/login', 'uses' => 'LoginController@login']);


    /***正式路由****/
    Route::get('cache', ['as' => 'api/cache', 'uses' => 'TaskController@cacheRoleRelation']);
    Route::get('academy', ['as' => 'api/academy', 'uses' => 'AcademyController@index']);

    /*************/
});

/**********************************/


/********Excelsior's Route***************/
Route::group(['prefix' => 'home', 'namespace' => 'Home'], function() {
    route::get('test', ['as' => 'home/test', 'uses' => 'IndexController@index']);
});
/**********************************/

