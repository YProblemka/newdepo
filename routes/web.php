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
    return view('index');
})->name('index');
Route::get('/album', function () {
    return view('album');
})->name('album');
Route::get('/fotogalery', function () {
    return view('fotogalery');
})->name('fotogalery');
Route::get('/news', function () {
    return view('news');
})->name('news');
Route::get('/structure', function () {
    return view('structure');
})->name('structure');
Route::get('/article', function () {
    return view('article');
})->name('article');
