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

// adminview
Route::group(['prefix' => 'admin'], function(){
	Route::get('/', 'Admin\LoginController@showLoginForm')->name('login.show');	
	Route::post('login', 'Admin\LoginController@login')->name('admin.login');
});
Route::group(['prefix' => 'admin','middleware'=>['auth:admin','role:admin,worker']], function(){
	Route::post('logout', 'Admin\LoginController@logout')->name('admin.logout');
	Route::get('home', 'Admin\AdminPagesController@index')->name('admin.home');
	Route::get('analyze', 'Gen\AnalyzePagesController@index')->name('admin.analyze');
	Route::post('analyze', 'Gen\AnalyzePagesController@index')->name('admin.analyze');
});


// userview
Route::get('/', 'Auth\LoginController@showLoginForm');
Route::group(['prefix' => 'user','middleware'=>'role:user'], function(){
	Route::post('/home', 'Auth\LoginController@authenticate')->name('user.login');
});