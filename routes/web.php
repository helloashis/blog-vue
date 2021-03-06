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

//Route::get('/{anypath}', 'HomeController@index')->where('path','.*');

//Route::get('/posts', 'PostController@index');
//Route::get('/category', 'CategoryController@index');


Route::post('/add-category', 'CategoryController@store')->name('add-category');
Route::get('/get-category', 'CategoryController@index');

