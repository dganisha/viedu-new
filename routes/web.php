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

Route::get('/', 'UserController@home');

Route::group(['middleware' => ['auth']], function (){
	Route::get('/project', 'TeacherController@index');
});

//REGISTER & LOGIN
Route::get('/login', 'LoginRegisterController@login');
Route::post('/login', 'LoginRegisterController@login_prs');
Route::get('/register', 'LoginRegisterController@register');
Route::post('/register', 'LoginRegisterController@register_prs');


//USER
Route::group(['middleware' => ['auth']], function (){
	Route::get('/home', 'UserController@home');
	Route::get('/member/nonton/{id}', 'UserController@nonton_vid');
});

//VENDOR
Route::group(['middleware' => ['auth','VerifyVendor']], function (){
	Route::get('/vendor/project', 'TeacherController@index');
});

Auth::routes();
