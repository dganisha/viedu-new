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
Route::get('/about', 'UserController@show_about');

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
	Route::get('/member/profile', 'UserController@profile');
	Route::post('/member/profile/update', 'UserController@update_profile');

	//Langganan
	Route::get('/member/subscribe/{name}/{id}', 'UserController@show_channel');
	Route::post('/member/subscribe/addSubscribe', 'UserController@subscribe');

	//Favorit
	Route::post('/favorite', 'VideoController@favorite');
});

//VENDOR
Route::get('/vendor/register', 'TeacherController@show_register');
Route::post('/vendor/register', 'Auth\RegisterGuruController@register');
Route::group(['middleware' => ['auth','VerifyVendor']], function (){
	Route::get('/home', 'UserController@home');
	Route::get('/vendor/profile','TeacherController@show_profile');
	Route::get('/vendor/project', 'TeacherController@index');
	Route::post('/vendor/profile/update', 'TeacherController@update_profile');

	//CHANNEL
	Route::post('/vendor/channel/add', 'TeacherController@add_channel');
	Route::get('/vendor/channel/{namachannel}/{id}', 'TeacherController@show_channel');
	Route::post('/vendor/channel/video/add', 'TeacherController@add_video');
	Route::post('/vendor/channel/delete', 'TeacherController@delete_channel');
	Route::post('/vendor/channel/video/delete','TeacherController@delete_video');
	Route::post('/vendor/channel/edit', 'TeacherController@edit_channel');
	Route::post('/vendor/channel/video/edit', 'TeacherController@edit_video');
});

//ADMINISTRATOR
Route::group(['middleware' => ['auth','VerifyAdmin']], function (){
	Route::get('/admin', 'AdminController@index');
	Route::post('/admin/deleteUser', 'AdminController@deleteUser');
	Route::get('/admin/video', 'AdminController@listVideo');
	Route::get('/admin/channel', 'AdminController@listChannel');

	//VERIFIKASI
	Route::get('/admin/verifikasi', 'AdminController@show_verifikasi');
	Route::post('/admin/verifikasi', 'AdminController@verifikasi');
});

Auth::routes();
