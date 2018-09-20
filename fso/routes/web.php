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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/workorders', "WorkOrdersController@index");
Route::get('/workorders/create', "WorkOrdersController@create");
Route::post('/workorders', "WorkOrdersController@store");
Route::get('/workorders/{workOrder}', "WorkOrdersController@show");
Route::post('/workorders/{workOrder}/tasks', "TasksController@store");
