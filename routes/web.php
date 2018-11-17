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

//Search Tutorial
Route::get('/search', 'ProjectController@search')->name('search');


//USER
Route::group(['middleware' => ['auth']], function (){
	Route::get('/home', 'UserController@home');
	Route::get('/member/nonton/{id}', 'VideoController@nonton_vid');
	Route::get('/member/profile','UserController@profile');
});

//VENDOR
Route::get('/vendor/register', 'TeacherController@show_register');
Route::post('/vendor/register', 'Auth\RegisterGuruController@register');
Route::group(['middleware' => ['auth','VerifyVendor']], function (){
	Route::get('/home', 'UserController@home');
	Route::get('/vendor/profile','TeacherController@show_profile');
	Route::get('/vendor/project', 'TeacherController@index');

	//CHANNEL
	Route::post('/vendor/channel/add', 'TeacherController@add_channel');
});

Auth::routes();
