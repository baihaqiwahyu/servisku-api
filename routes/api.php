<?php

use App\Http\Controllers\Api\MotorcycleController;
use Illuminate\Support\Facades\Route;

Route::get('/motorcycles', [MotorcycleController::class, 'index']);
Route::get('/motorcycles/{slug}', [MotorcycleController::class, 'show']);

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
