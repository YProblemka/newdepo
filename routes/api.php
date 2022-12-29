<?php

use App\Http\Controllers\API\AlbumController;
use App\Http\Controllers\API\ImageController;
use App\Http\Controllers\API\NewsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource("news", NewsController::class)->missing(
    fn() => response()->json(["message" => "No query results for model \"News\""], 404)
);

Route::apiResource("album", AlbumController::class)->missing(
    fn() => response()->json(["message" => "No query results for model \"Album\""], 404)
);

Route::apiResource("image", ImageController::class)->missing(
    fn() => response()->json(["message" => "No query results for model \"Image\""], 404)
);
