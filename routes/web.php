<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminMenuController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
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
Route::get('/', [HomeController::class, 'index'])->name('menu.index');//首頁路由

//購物車路由
Route::post('cartlist',[CartController::class, 'index'])->name('cart.index');
Route::delete('/cartlist/{id}',[CartController::class,'destroy'])->name('cart.destroy');
Route::post('/cartend',[CartController::class, 'store'])->name('cart.end');

//管理員路由
Route::get('welcome', [AdminController::class, 'index'])->name('welcome');

Route::get('menu', [AdminMenuController::class, 'index'])->name('admin.menu.index');

Route::get('order', [AdminOrderController::class, 'index'])->name('admin.order.index');

Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard.index');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.dashboard.index');
})->name('admin.dashboard.index');
