<?php

use App\Http\Controllers\API\AlbumController;
use App\Http\Controllers\API\ImageController;
use App\Http\Controllers\API\NewsController;
use App\Http\Controllers\CallbackController;
use App\Http\Controllers\SubscribeNewsletterController;
use Illuminate\Support\Facades\Route;

Route::middleware("auth")->group(function () {

    Route::apiResource("news", NewsController::class)->missing(
        fn() => response()->json(["message" => "No query results for model \"News\""], 404)
    );

    Route::apiResource("album", AlbumController::class)->missing(
        fn() => response()->json(["message" => "No query results for model \"Album\""], 404)
    )->middleware("auth");

    Route::apiResource("image", ImageController::class)->missing(
        fn() => response()->json(["message" => "No query results for model \"Image\""], 404)
    );

});

Route::get("/news", [NewsController::class, "index"])->middleware("cache.page:10");

Route::post("/callback-form", [CallbackController::class, "callbackForm"])->middleware("throttle:callback");

Route::group(["prefix" => "newsletter"], function () {
    Route::post("/subscription", [SubscribeNewsletterController::class, "subscription"])->middleware("throttle:subscribe-newsletter");
});
