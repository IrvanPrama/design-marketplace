<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\OrderController;
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
Route::get('/dashboard/detail/{id}', [DesignController::class, 'dashboard_product_detail'])->middleware('auth');
Route::get('/detail/{id}', [DesignController::class, 'product_detail']);
Route::get('/form/order', function () {
    return view('order.index');
})->name('order')->middleware('auth');
Route::get('/dashboard/form/order/{id}', [OrderController::class, 'order_form'])->name('user-order')->middleware('auth');
Route::post('/form/order/submit', [OrderController::class, 'store'])->middleware('auth');
Route::post('/form/order/submit/no-direct', [OrderController::class, 'store_nodirect'])->middleware('auth');
Route::post('/submit-nodirect', [OrderController::class, 'nodirect_order'])->middleware('auth');

Route::get('/dashboard/order/{id}', [OrderController::class, 'dashboard_product_order']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/akdsgn', [UserController::class, 'admin'])->name('admin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('postlogin');
Route::get('/signup', function () {
    return view('auths.signup');
})->name('signup');
Route::get('/signup/client', [UserController::class, 'client'])->name('signup-client');
Route::get('/dashboard/admin', [DashboardController::class, 'admin'])->name('dashboard-admin')->middleware('auth');
Route::get('/design/search', [DesignController::class, 'search'])->name('search');
Route::get('/dashboard/user/done', [ProcessController::class, 'done_user'])->middleware('auth');
Route::get('/dashboard/user/ongoing', [ProcessController::class, 'process_user'])->middleware('auth');
Route::get('/dashboard/user/edit-profile', [DashboardController::class, 'profile_view_user'])->middleware('auth');

Route::get('/signup/designer', [UserController::class, 'designer'])->name('signup-designer');
Route::get('/dashboard', [DashboardController::class, 'user'])->name('dashboard')->middleware('auth');
Route::get('/dashboard/designer', [DashboardController::class, 'view_designer'])->name('designer-dashboard')->middleware('auth');
Route::post('/process-store', [ProcessController::class, 'store'])->middleware('auth');
Route::get('/dashboard/designer/ongoing', [ProcessController::class, 'process'])->middleware('auth');
Route::post('/done-store', [ProcessController::class, 'done_store'])->middleware('auth');
Route::get('/dashboard/designer/done', [ProcessController::class, 'done'])->middleware('auth');
Route::get('/dashboard/designer/edit-portofolio', [DashboardController::class, 'portofolio_view'])->middleware('auth');
Route::get('/dashboard/designer/edit-profile', [DashboardController::class, 'profile_view'])->middleware('auth');
Route::post('/store-update-profile', [UserController::class, 'update_designer'])->middleware('auth');
Route::post('/store-update-profile-user', [UserController::class, 'update_user'])->middleware('auth');
Route::post('/store-update-password', [UserController::class, 'update_password_designer'])->middleware('auth');
Route::post('/store-update-avatar', [UserController::class, 'update_avatar_designer'])->middleware('auth');

Route::get('/design', [DesignController::class, 'view_design'])->name('design');
Route::get('/dashboard/design', [DashboardController::class, 'view_design'])->name('dashboard-design')->middleware('auth');

Route::post('/signup/account', [UserController::class, 'store']);
Route::get('/review', [UserController::class, 'review'])->middleware('auth');
Route::post('/review/create', [UserController::class, 'review_create'])->middleware('auth');
Route::post('/design/upload', [DesignController::class, 'store']);
Route::get('/delete-design/{id}', [DesignController::class, 'destroy'])->name('delete-design');
Route::post('/design/update/{id}', [DesignController::class, 'update'])->name('update-design');
Route::post('/profile/update', [UserController::class, 'update']);
