<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\UserController;
use App\Models\toko;
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

// Route::get('/welcom', function () {
//     return view('welcome');
// });
// Route::get('/home', function () {
//     return view('welcome');
// });
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
// Route::get('/admin', function () {
//     return view('admin/master');
// });
// Route::get('/adminproduct', function () {
//     return view('admin/product');
// });
Route::get('/adminuser', function () {
    return view('admin/user');
});
Route::get('/adminseller', function () {
    return view('admin/seller');
});
// Route::get('/seller', function () {
//     return view('seller/sell');
// });

Route::get('/adminproduct', [TokoController::class, 'toko']);
Route::get('/adminproduct/create', [TokoController::class, 'create']);
Route::post('/adminproduct/store', [TokoController::class, 'store']);
Route::get('/adminproduct/{id}/edit', [TokoController::class, 'edit']);
Route::put('/admin/{id}', [TokoController::class, 'update']);
Route::delete('/adminproduct/{id}', [TokoController::class, 'delete']);

Route::get('/', [ProdukController::class, 'index']);

Route::get('/adminseller', [SellerController::class, 'seller']);
Route::get('/adminseller/create', [SellerController::class, 'create']);
Route::post('/adminseller/store', [SellerController::class, 'store']);
Route::get('/adminseller/{id}/edit', [Sellerontroller::class, 'edit']);
Route::put('/{id}', [SellerController::class, 'update']);
Route::delete('/adminseller/{id}', [SellerController::class, 'delete']);

Route::get('/adminuser', [UserController::class, 'user']);
Route::get('/adminuser/create', [UserController::class, 'create']);
Route::post('/adminuser/store', [UserController::class, 'store']);
Route::get('/adminuser/{id}/edit', [Sellerontroller::class, 'edit']);
Route::put('/{id}', [UserController::class, 'update']);
Route::delete('/adminuser/{id}', [UserController::class, 'delete']);

Route::get('/admin', [UserController::class, 'jumlah']);
Route::get('/admin/master', [AdminController::class, 'Admin']);


Route::get('/login', [SessionController::class, 'index']);
Route::post('/sesi/login', [SessionController::class, 'login']);
Route::get('/sesi/logout', [SessionController::class, 'logout']);
Route::get('/sesi/register', [SessionController::class, 'register']);
Route::post('/sesi/create', [SessionController::class, 'create']);


Route::get('/dashboard/{id}', 'DashboardController@show')->name('showDashboard');
Route::get('/dashboard/{id}/edit', 'DashboardController@edit')->name('editDashboard');
Route::put('/dashboard/{id}', 'DashboardController@update')->name('updateDashboard');

Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/seller/{id}', [DashboardController::class, 'index'])->name('seller.dashboard');
});

Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/seller/{id}/', [DashboardController::class, 'toko']);
    Route::get('/seller/{id}/create', [DashboardController::class, 'create']);
    Route::post('/seller/{id}/store', [DashboardController::class, 'store']);
    Route::get('/seller/{id}/edit', [DashboardController::class, 'edit']);
    Route::put('/seller/{id}/', [DashboardController::class, 'update']);
    Route::delete('/seller/{id}/', [DashboardController::class, 'delete']);
});
