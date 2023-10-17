<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\CustomerIndexController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[CustomerIndexController::class, 'index'])->name('welcome');
Route::get('/customer/dashboard',[FrontendController::class, 'customerDashboard'])->name('customer.dashboard');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin/login',[AdminLoginController::class,'adminLogin'])->name('admin.login');
Route::get('/admin/dashboard',[AdminDashboardController::class,'adminDashboard'])->name('admin.dashboard');
