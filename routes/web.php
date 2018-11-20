<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome', 'TaskController@index');
});*/

Route::get('/', 'TaskController@index');

Route::post('/createTask', [

   'uses' => 'TaskController@store',
   'as' => 'createTask',

]);
Route::get('/deleteTask/{task_id}', [

   'uses' => 'TaskController@destroy',
   'as' => 'deleteTask',

]);



















