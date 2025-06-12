<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('posts', App\Http\Controllers\PostController::class);
Route::resource('products', App\Http\Controllers\productsController::class);
Route::resource('orders', App\Http\Controllers\OrdersController::class);
Route::resource('invoices', App\Http\Controllers\InvoicesController::class);
Route::resource('inventory-transactions', App\Http\Controllers\InventoryTransactionController::class);
Route::resource('order-details', App\Http\Controllers\OrderDetailsController::class);
Route::resource('purchase-orders', App\Http\Controllers\PurchaseOrdersController::class);
Route::resource('purchase-order-details', App\Http\Controllers\PurchaseOrderDetailsController::class);
Route::resource('shippers', App\Http\Controllers\ShippersController::class);
Route::resource('suppliers', App\Http\Controllers\SuppliersController::class);
Route::resource('users', App\Http\Controllers\UsersController::class);
Route::resource('employees', App\Http\Controllers\employeesController::class);