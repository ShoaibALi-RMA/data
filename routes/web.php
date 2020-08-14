<?php

use Illuminate\Support\Facades\Route;

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
Route::get('user/data','UserController@index')->middleware('user');
Route::any('user/data/(:num)/delete','UserController@delete');
Route::put('user/data/(:any?)/update','UserController@update');
Route::post('user/data/create','UserController@create');


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
