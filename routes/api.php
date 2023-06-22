<?php

use App\Http\Controllers\FirstDatabaseController;
use App\Http\Controllers\MongoDatabaseController;
use App\Http\Controllers\PgsqlDatabaseController;
use App\Http\Controllers\SecondDatabaseController;
use App\Models\PgsqlDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::apiResource('first-db', FirstDatabaseController::class);
Route::apiResource('second-db', SecondDatabaseController::class);
Route::apiResource('pgsql-db', PgsqlDatabaseController::class);
Route::apiResource('mongo-db', MongoDatabaseController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
