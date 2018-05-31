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

Route::get('/','DireccionController@index');

Route::get('direcciones','DireccionController@index');
Route::post('direcciones/store','DireccionController@store')->name('direcciones.store');
Route::post('direcciones/update','DireccionController@update')->name('direcciones.update');
Route::get('direcciones/show','DireccionController@show')->name('direcciones.edit');

Route::get('companias','CompaniaController@index');
Route::post('companias/store','CompaniaController@store')->name('companias.store');
Route::post('companias/update','CompaniaController@update')->name('companias.update');
Route::get('companias/show','CompaniaController@show')->name('companias.edit');

Route::get('funciones','FuncionController@index');
Route::post('funciones/store','FuncionController@store')->name('funciones.store');
Route::post('funciones/update','FuncionController@update')->name('funciones.update');
Route::get('funciones/show','FuncionController@show')->name('funciones.edit');

Route::get('lotes','LoteController@index');
Route::post('lotes/store','LoteController@store')->name('lotes.store');
Route::post('lotes/update','LoteController@update')->name('lotes.update');
Route::get('lotes/show','LoteController@show')->name('lotes.edit');

Route::get('manzanas','ManzanaController@index');
Route::post('manzanas/store','ManzanaController@store')->name('manzanas.store');
Route::post('manzanas/update','ManzanaController@update')->name('manzanas.update');
Route::get('manzanas/show','ManzanaController@show')->name('manzanas.edit');

Route::get('sectores','SectorController@index');
Route::post('sectores/store','SectorController@store')->name('sectores.store');
Route::post('sectores/update','SectorController@update')->name('sectores.update');
Route::get('sectores/show','SectorController@show')->name('sectores.edit');

Route::get('tiposdirecciones','TipoDireccionController@index');

Route::get('usuarios','UsuarioController@index');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
