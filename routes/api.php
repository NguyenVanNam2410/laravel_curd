<?php

use App\Http\Controllers\api\contactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\dashboardController;
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
Route::group(['prefix' => 'auth'],function(){
    Route::post('/dangnhap', [AuthController::class, 'store'])->name('api.login');
    Route::post('register',[AuthController::class, 'register'])->name('api.register');
    Route::get('/login',[AuthController::class,'login']);  
});

Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [AuthController::class, 'logout'])->name('api.logout');
});


// Route::post('active',[contactController::class, 'index'])->name('api.active');