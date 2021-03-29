<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\UserController;

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

Route::get('/', [DesignController::class, 'public'])->name('public');
Route::get('/dashboard/detail', [DesignController::class, 'product_detail'])->name('product-detail-dashboard');
Route::get('/detail/{id}', [DesignController::class, 'product_detail']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('postlogin');
Route::get('/signup', function () {
    return view('auths.signup');
})->name('signup');
Route::get('/signup/client', [UserController::class, 'client'])->name('signup-client');
Route::get('/signup/designer', [UserController::class, 'designer'])->name('signup-designer');


Route::get('/dashboard', [DashboardController::class, 'user'])->middleware('auth');
Route::get('/dashboard/designer', [DesignController::class, 'view_designer'])->middleware('auth');
Route::get('/design', [DesignController::class, 'view_design'])->name('design');
Route::get('/dashboard/design', [DesignController::class, 'dashboard_design'])->name('dashboard-design')->middleware('auth');
Route::post('/signup/account', [UserController::class, 'store']);
Route::get('/review', [UserController::class, 'review'])->middleware('auth');
Route::post('/review/create', [UserController::class, 'review_create'])->middleware('auth');
Route::post('/design/upload', [DesignController::class, 'store']);
Route::get('/delete-design/{id}', [DesignController::class, 'destroy'])->name('delete-design');
Route::post('/design/update/{id}', [DesignController::class, 'update'])->name('update-design');
Route::post('/profile/update', [UserController::class, 'update']);
