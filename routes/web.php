<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function () {
//    return view('Products');
//});


//Route::get('details', function () {
//    return view('Products_details');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\ProductController::class, 'index'])->name('product');
Route::get('products/{product1}', [App\Http\Controllers\ProductController::class, 'show'])->name('products.details');
Route::get('products', [App\Http\Controllers\ProductController::class, 'create'])->name('products.create')->middleware('auth');
Route::post('products', [App\Http\Controllers\ProductController::class, 'store'])->name('products.store')->middleware('auth');
