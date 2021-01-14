<?php

use App\Http\Controllers\Api\TennisCourtController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('court')->group(function () {
    Route::get('tennis-courts', [TennisCourtController::class, 'index']);
    Route::get('tennis-courts/{id}', [TennisCourtController::class, 'show']);
    Route::delete('tennis-court/{id}', [TennisCourtController::class, 'delete']);
    Route::post('tennis-court/', [TennisCourtController::class, 'create']);
    Route::patch('tennis-court/{id}', [TennisCourtController::class, 'update']);
});