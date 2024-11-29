<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MakulController;
use App\Http\Controllers\MahasiswaController;
/*
|-------------------------------------------------------------
-------------
| API Routes
|-------------------------------------------------------------
-------------
|
| Here is where you can register API routes for your application. 
These
| routes are loaded by the RouteServiceProvider within a group 
which
| is assigned the "api" middleware group. Enjoy building your 
API!
|
*/
Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register']);
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);
Route::middleware('auth:sanctum')->get('/user', function 
    (Request $request) {
        return $request->user();
    });
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout']);
});

Route::middleware('auth:sanctum')->group(function () {

    // Mahasiswa Routes
    Route::post('/mahasiswa/create', [MahasiswaController::class, 'store']);
    Route::get('/mahasiswa/read', [MahasiswaController::class, 'index']);
    Route::get('//mahasiswa/read/{id}', [MahasiswaController::class, 'show']);
    Route::put('/mahasiswa/update/{id}', [MahasiswaController::class, 'update']);
    Route::delete('/mahasiswa/delete/{id}', [MahasiswaController::class, 'destroy']);
    
    // Dosen Routes
    Route::post('/dosen/create', [DosenController::class, 'store']);
    Route::get('/dosen/read', [DosenController::class, 'index']);
    Route::get('/dosen/read/{id}', [DosenController::class, 'show']);
    Route::put('/dosen/update/{id}', [DosenController::class, 'update']);
    Route::delete('/dosen/delete/{id}', [DosenController::class, 'destroy']);

    // Makul Routes
    Route::post('/makul/create', [MakulController::class, 'store']);
    Route::get('/makul/read', [MakulController::class, 'index']);
    Route::get('/makul/read/{id}', [MakulController::class, 'show']);
    Route::put('/makul/update/{id}', [MakulController::class, 'update']);
    Route::delete('/makul/delete/{id}', [MakulController::class, 'destroy']);
});