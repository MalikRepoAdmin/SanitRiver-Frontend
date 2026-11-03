<?php

use App\Http\Controllers\UserController;
use Illuminate\http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Authentication routes
/**
Route::prefix('auth')->group(function () {
    Route::post('/register-user', [AuthController::class, 'registerUser']);
    Route::post('/register-admin', [AuthController::class, 'registerAdmin']);
    Route::post('/login-user', [AuthController::class, 'loginUser']);
    Route::post('/login-admin', [AuthController::class, 'loginAdmin']);
    Route::post('/logout-user', [AuthController::class, 'logoutUser']);
    Route::post('/logout-admin', [AuthController::class, 'logoutAdmin']);
});

// Resource routes for core models
Route::resource('sungais', SungaiController::class);
Route::resource('laporan-sungais', LaporanSungaiController::class);
Route::resource('gambar-sungais', GambarSungaiController::class);

// Admin and User routes
Route::resource('admins', AdminController::class);
Route::resource('users', UserController::class);

// Special route for AJAX to get Bounding Box data (GeoJSON)
Route::get('/sungai-bbox', [SungaiApiController::class, 'getWaterways'])->name('api.sungai.bbox');
*/
