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

Route::get('/create_job',function(){
  return view('create_job');  
});

Route::post('/handle_create_job','ToDoListsController@store')->name('store');

Route::get('/edit_job/{id}','ToDoListsController@edit')->name('edit_job');
Route::post('/edit_job/{id}','ToDoListsController@update')->name('update_job');

Route::get('/delete_job/{id}','ToDoListsController@destroy')->name('delete_job');

Route::get('/view_detail_job/{id}','ToDoListsController@show')->name('show_job');

Route::get('/view_listjobs/{id}/{job_status}','ToDoListsController@viewjobs');
Route::get('/view_listjobs/{user_id}','ToDoListsController@viewlistjobs');

Route::get('/profile',function(){
  return view('profile');
});
Route::post('update_avatar','UserController@store');