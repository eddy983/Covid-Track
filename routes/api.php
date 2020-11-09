<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\DocumentationController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\StatsController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\DocumentController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/documentation', [DocumentationController::class, 'index']);

Route::group(['prefix' => 'donation'], function () {
    Route::get('/', [DonationController::class, 'index']);
    Route::get('/{id}', [DonationController::class, 'show']);
    Route::post('/', [DonationController::class, 'store']);
    Route::put('/{id}', [DonationController::class, 'update']);
    Route::delete('/{id}', [DonationController::class, 'destroy']);
});

Route::group(['prefix' => 'media'], function () {
    Route::get('/', [MediaController::class, 'index']);
    Route::get('/{id}', [MediaController::class, 'show']);
    Route::post('/', [MediaController::class, 'store']);
    Route::delete('/{id}', [MediaController::class, 'destroy']);
});

Route::group(['prefix' => 'stats'], function () {
    Route::get('/', [StatsController::class, 'index']);
    Route::post('/', [StatsController::class, 'store']);
    Route::get('/{id}', [StatsController::class, 'show']);
    Route::put('/{id}', [StatsController::class, 'update']);
    Route::delete('/{id}', [StatsController::class, 'destroy']);
});

Route::group(['prefix' => 'state'], function () {
    Route::get('/', [StateController::class, 'index']);
    Route::post('/', [StateController::class, 'store']);
    
});

Route::group(['prefix' => 'document'], function () {
    Route::get('/', [DocumentController::class, 'index']);
    Route::get('/{id}', [DocumentController::class, 'show']);
    Route::post('/', [DocumentController::class, 'store']);
    Route::delete('/{id}', [DocumentController::class, 'destroy']);
});