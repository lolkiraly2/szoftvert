<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/helloapi', function () {
    return "Hello API";
});

Route::get('/request-test-api', function () {
    return [
        "title" => request("title")
    ];
});

Route::prefix('v1')->group(function () {
    Route::apiResource('categories', CategoryController::class);
  });
  