<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerIndexController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Auth\Events\Logout;
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
Route::get('/cart/remove/{id}',[CustomerIndexController::class, 'cartRemove'])->name('cart.remove');
Route::get('/quantity/{id}',[CartController::class, 'addQuantity'])->name('quantity.add');
Route::get('/cart/quantity/minus/{id}',[CartController::class, 'minusQuantity'])->name('quantity.minus');
Route::get('/cart/quantity/plus/{id}',[CartController::class, 'plusQuantity'])->name('quantity.plus');
Route::get('/checkout',[CartController::class, 'itemsCheckout'])->name('checkout');
Route::resource('/order', OrderController::class);
// Route::get('cart/items', [CustomerIndexController::class, 'cartItems'])->name('items.cart');
Route::get('/customer/dashboard',[FrontendController::class, 'customerDashboard'])->name('customer.dashboard');
Route::resource('/cart', CartController::class);
Route::get('/customer/logout', [CustomerIndexController::class, 'customerLogout'])->name('customer.logout');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/admin/login',[AdminLoginController::class,'adminLogin'])->name('admin.login');
Route::get('/admin/dashboard',[AdminDashboardController::class,'adminDashboard'])->name('admin.dashboard');
Route::get('/logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function () {
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('brands', BrandController::class);
    Route::resource('orders', AdminOrderController::class);
});

