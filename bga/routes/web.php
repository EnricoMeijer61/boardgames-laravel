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
use Illuminate\Http\Request;


Route::get('/logout', 'UserController@logout')->name('logout');
Route::patch('/users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);

Route::get('/', 'PagesController@index')->name('home');
Route::get('/home', 'PagesController@index')->name('home');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/algemenevoorwaarden', 'PagesController@algemenevoorwaarden')->name('algemenevoorwaarden');
Route::get('/rules', 'PagesController@rules')->name('rules');
Route::get('/service', 'PagesController@service')->name('service');
Route::get('/result', 'PagesController@result')->name('result');
Route::get('/admin', 'PagesController@admin')->name('admin');
Auth::routes();

Route::resource('/message', 'MessageController')->name('index', 'message');
Route::resource('/leaderboard', 'LeaderboardController')->name('index', 'leaderboard');
Route::resource('/gamedetails', 'GamedetailController')->name('index', 'gamedetails');
Route::resource('/users', 'Usercontroller');
Route::resource('/battle', 'BattleController')->name('index', 'battle');
Route::get('/history', 'BattleController@show')->name('history');


