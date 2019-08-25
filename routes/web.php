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
    return view('landing');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UserController', ['names'=>[
    'index'=>'admin.users.index',
    'create'=>'users.create',
    'store'=>'users.store',
    'edit'=>'users.edit',
]])->middleware('auth');

Route::post('is_active', 'UserController@approve');

Route::resource('photo-memory', 'PhotoMemoryController', ['names'=>[
    'index'=>'photo-memory.index',
    'create'=>'photo-memory.create',
    'store'=>'photo-memory.store',
    'edit'=>'photo-memory.edit',
]])->middleware('auth');

/*Route::get('photo-memory', 'PhotoMemoryController@index')->name('photo-memory.index');
Route::get('create', 'PhotoMemoryController@create')->name('photo-memory.create')->middleware('auth');
Route::get('store', 'PhotoMemoryController@store')->name('photo-memory.store')->middleware('auth');
Route::get('edit', 'PhotoMemoryController@edit')->name('photo-memory.edit')->middleware('auth');*/



Route::get('memory', 'PhotoMemoryController@example')->name('memory');

Route::get('photos', 'PhotoMemoryController@photos')->name('photos');
