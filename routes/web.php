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

Route::get('/home', 'MovieController@toHome')->name('home');

Route::get('/detail/{id}', 'MovieController@detail')->name('detail');

Route::get('/detail/category/{id}', 'MovieController@genreDetail')->name('category');
