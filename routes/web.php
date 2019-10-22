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
Route::get('/dashbord', "TaskController@index_page");
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create', "TaskController@create");
Route::post('/create', "TaskController@store");
Route::get('/edit/{task}', "TaskController@edit");
Route::patch('/update/{task}', "TaskController@update");
Route::delete('/delete/{task}', "TaskController@delete")->name('tasks.destroy');
