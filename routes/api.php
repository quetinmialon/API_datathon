<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BatimentController;
use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;
Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['post'],base_path('routes/api/auth.php'));


Route::post('/batiments/import', [BatimentController::class, 'import']);
Route::post('/batiments', [BatimentController::class, 'store']);
Route::delete('/batiments/{id}', [BatimentController::class, 'destroy']);
Route::get('/batiments', [BatimentController::class, 'index']);
Route::get('/batiments/{id}', [BatimentController::class, 'show']);


