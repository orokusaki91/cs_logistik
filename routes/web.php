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

Route::get('/', 'HomeController@index');

Route::post('ajax/contact', 'ContactController@post');

Route::get('admin', 'AdminController@index');
Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('admin/login', 'Auth\LoginController@login');
Route::post('admin/logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('admin/pages/{page}', 'AdminController@getPage');
Route::put('admin/pages/update', 'AdminController@postPage');
Route::get('admin/pages/services/create', 'AdminController@createService');
Route::post('admin/pages/services/store', 'AdminController@storeService');
Route::get('admin/pages/services/{page_content_id}/edit', 'AdminController@editService');
Route::put('admin/pages/services/{page_content_id}/update', 'AdminController@updateService');
Route::post('admin/pages/services/{page_content_id}/delete', 'AdminController@deleteService');

