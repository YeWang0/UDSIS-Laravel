l<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'StudentController@index');

//Route::post('student/save',['uses'=>'StudentController@save']);
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['middleware' => ['web']], function () {
    //
    Route::get('student/index',['uses'=>'StudentController@index']);
    Route::any('student/create',['uses'=>'StudentController@create']);
    Route::any('student/update/{id}',['uses'=>'StudentController@update']);
    Route::any('student/delete/{id}',['uses'=>'StudentController@delete']);
});
