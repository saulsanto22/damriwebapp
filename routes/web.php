<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\JadwalController;
use App\Http\Controllers\Admin\TarifController;
use App\Http\Controllers\Admin\RuteController;
// use App\Http\Controllers\JadwaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'index']);
Route::get("/tarif",[TarifController::class,'create']);




Auth::routes(['verify' => true]);

Route::prefix('admin')->middleware(['auth' ])->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('jadwal', JadwalController::class);
    Route::resource('tarif', TarifController::class);
    Route::resource('rute', RuteController::class);
    
});


