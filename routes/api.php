<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\JadwalController;
use App\Http\Controllers\API\RuteController;
use App\Http\Controllers\API\TarifController;

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
// Untuk ApI nya :
//semua yang diperlukan oleh moobile, harus di ambil melalaui API
//menggunakan HTTP Metode

// Auth::routes(['verify' => true]);


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/jadwal', [JadwalController::class , 'index']);
Route::get('/rute', [RuteController::class , 'index']);
Route::get('/tarif', [TarifController::class , 'index']);
Route::get('/jadwal/{id}', [JadwalController::class , 'show']);
Route::get('/rute/{id}', [RuteController::class , 'show']);
Route::get('/tarif/{id}', [TarifController::class , 'show']);


// Route::get('buse', [JadwalController::class , 'index']);

// untuk search jadwal , rute , tarif












