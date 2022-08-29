<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ThreadCommentController;
use App\Http\Controllers\CategoryThreadController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('categories', CategoryController::class)->only('index');
Route::apiResource('categories.threads', CategoryThreadController::class)->only('index', 'store');
Route::apiResource('threads', ThreadController::class)->only('index');
Route::apiResource('threads.comments', ThreadCommentController::class)->only('index', 'store');
Route::apiResource('comments', CommentController::class)->only('index');
