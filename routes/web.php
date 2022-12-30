<?php

use App\Http\Controllers\SubscribeNewsletterController;
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

Route::get('/album/{album}', function (\App\Models\Album $album) {
    return view('album', compact(("album")));
})->name('album');

Route::get('/fotogalery', function () {
    $albums = \App\Models\Album::orderBy('created_at', 'DESC')->get();
    return view('fotogalery', compact("albums"));
})->name('fotogalery');

Route::get('/news', function () {
    $news = \App\Models\News::orderBy('created_at', 'DESC')->limit(9)->get();
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
            $news = \App\Models\News::orderBy('created_at', 'DESC')->get();
            return view('admin.news', compact("news"));
        })->name('news');

        Route::get('/albums', function () {
            $albums = \App\Models\Album::orderBy('created_at', 'DESC')->get();
            return view('admin.albums', compact("albums"));
        })->name('albums');

        Route::get('/albums/{album}', function (\App\Models\Album $album) {
            $images = $album->images()->orderBy('created_at', 'DESC')->get();
            return view('admin.album-images', compact("album", "images"));
        })->name('album-images');
    });
});

Route::get("/newsletter/confirmation", [SubscribeNewsletterController::class, "confirmation"])->name("newsletter.confirmation");
Route::get("/newsletter/unsubscribe", [SubscribeNewsletterController::class, "unsubscribe"])->name("newsletter.unsubscribe");
