<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    $news = \App\Models\News::all();
    return view('news', compact('news'));
})->name('news');

Route::get('/news/{article_id}', function ($article_id) {
    $article = \App\Models\News::query()->where("id", $article_id)->get()->first();
    return view('article', compact('article'));
})->name('article');

Route::get('/structure', function () {
    return view('structure');
})->name('structure');

Route::prefix("administration")->name("admin.")->group(function () {
    Route::get('/login', [AuthController::class, "loginPage"])->name("login.page")->middleware("guest");
    Route::post('/login', [AuthController::class, "login"])->name("login")->middleware("guest");
    Route::get('/logout', [AuthController::class, "logout"])->name("logout")->middleware("auth");

    Route::middleware("auth")->group(function () {
        Route::get('/news', function () {
            $news = \App\Models\News::all();
            return view('admin.news', compact("news"));
        })->name('news');
    });
});
