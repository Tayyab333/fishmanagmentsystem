<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/index','App\Http\Controllers\UserController@index');
Route::get('/register', 'App\Http\Controllers\UserController@register')->name('rs');
Route::post('/register', 'App\Http\Controllers\UserController@store');
Route::get('/login', 'App\Http\Controllers\UserController@login');
Route::post('/login', 'App\Http\Controllers\UserController@match');
Route::get('/home', 'App\Http\Controllers\UserController@home');
Route::post('/add', 'App\Http\Controllers\UserController@storeFish');
Route::get('/edit', 'App\Http\Controllers\UserController@viewFish');
Route::post('/update/{id}', 'App\Http\Controllers\UserController@updateFish');
Route::get('/delete', 'App\Http\Controllers\UserController@deleteFish')->name('delete');
//Route::post('/print', 'print');
