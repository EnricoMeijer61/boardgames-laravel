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

Route::get('/home', 'PagesController@index')->name('home');
Route::get('/', 'PagesController@index')->name('home');
Route::get('/login', 'PagesController@login')->name('login');
Route::get('/register', 'PagesController@register')->name('register');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');


Auth::routes();

//Route::get('/login', 'HomeController@index')->name('login');
