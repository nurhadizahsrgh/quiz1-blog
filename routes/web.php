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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/category', App\Http\Controllers\CategoryController::class);
Route::resource('/post', App\Http\Controllers\PostController::class);
Route::resource('/photos', App\Http\Controllers\PhotosController::class);
Route::resource('/album', App\Http\Controllers\AlbumController::class);
