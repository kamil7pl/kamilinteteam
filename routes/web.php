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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/grid','App\Http\Controllers\GridController@show');
Route::get('/','App\Http\Controllers\HomepageController@show');
Route::get('/subpageone','App\Http\Controllers\SubpageoneController@show');
Route::get('/subpagetwo','App\Http\Controllers\SubpagetwoController@show');