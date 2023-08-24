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
Route::get('products_edit/{product}', [App\Http\Controllers\ProductController::class, 'edit'])->name('products.edit')->middleware('auth');
Route::post('products_update/{product}', [App\Http\Controllers\ProductController::class, 'update'])->name('products.update')->middleware('auth');
Route::get('products_delete/{product}', [App\Http\Controllers\ProductController::class, 'delete'])->name('products.delete')->middleware('auth');
Route::get('category', [App\Http\Controllers\CategoryController::class, 'createcat'])->name('cat.create')->middleware('auth');
Route::post('category', [App\Http\Controllers\CategoryController::class, 'storecat'])->name('cat.store')->middleware('auth');

Route::get('comment', [App\Http\Controllers\CommintController::class, 'store'])->name('comment')->middleware('auth');
Route::get('handleSubmit', [App\Http\Controllers\CommintController::class, 'handleSubmit'])->name('handleSubmit');
Route::get('showComment', [App\Http\Controllers\CommintController::class, 'showComment'])->name('showComment')->middleware('auth');

Route::post('pay', [\App\Http\Controllers\PaymentController::class, 'pay'])->name('payment');
Route::get('success', [\App\Http\Controllers\PaymentController::class, 'success']);
Route::get('error', [\App\Http\Controllers\PaymentController::class, 'error']);

Route::get('find', [\App\Http\Controllers\PaymentController::class, 'find'])->name('f');

Route::get('main', function () {
    $price = request()->input('price');
    return view('pay', compact("price" ));
});
