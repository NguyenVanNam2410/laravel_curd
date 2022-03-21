<?php

use App\Http\Controllers\api\contactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\ProductController;
use App\Models\product;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {return view('welcome');});
Route::get('/login',[AuthController::class,'login'])->name('user.logout');   
Route::get('/dashboard',[dashboardController::class,'index'])->name('dashboard')->middleware('Only');   

Route::group(['prefix' => 'product'], function() {
    route::get('/',[ProductController::class, 'show'])->name('product.show');
    route::post('delete/{id}',[ProductController::class,'delete'])->name('product.delete');
    route::get('create',[ProductController::class,'create'])->name('product.create');
    route::post('store',[ProductController::class,'store'])->name('product.store');
    route::post('update',[ProductController::class,'update'])->name('product.update');
    route::get('edit/{id}',[ProductController::class,'edit'])->name('product.edit');
});

// Route::post('active',[contactController::class, 'index'])->name('api.active');
Route::get('active/{id}',[contactController::class, 'index'])->name('api.active');
Route::post('/updateOrder',[contactController::class, 'order'])->name('order.product');