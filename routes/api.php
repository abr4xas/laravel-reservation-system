<?php

use App\Http\Controllers\Api\Activities\ListActivitiesController;
use App\Http\Controllers\Api\Activities\RegisterActivitiesController;
use App\Http\Controllers\Api\Clients\RegisterClientController;
use Illuminate\Http\Request;
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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/create-clients', RegisterClientController::class);
Route::post('/create-activities', RegisterActivitiesController::class);

Route::get('/packages-activities', [ListActivitiesController::class, 'index']);
Route::get('/packages-activities/{activity:slug}', [ListActivitiesController::class, 'show'])->name('show.activity');
