<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/article/article1', [App\Http\Controllers\HomeController::class, 'read'])->name('read');
Route::get('/article/article2', [App\Http\Controllers\HomeController::class, 'read2'])->name('read2');
Route::get('/article/article3', [App\Http\Controllers\HomeController::class, 'read3'])->name('read3');
Route::get('/', [App\Http\Controllers\HomeController::class, 'article'])->name('article');

Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product');
Route::get('/create', [App\Http\Controllers\ProductController::class, 'create'])->name('create');
Route::get('/myorder', [App\Http\Controllers\ProductController::class, 'myOrder'])->name('myorder');
Route::post('/store', [App\Http\Controllers\ProductController::class, 'store'])->name('store');
Route::get('/track', [ProductController::class, 'trackOrder'])->name('track.order');
Route::post('/track', [ProductController::class, 'processOrder'])->name('track.order.process');

Route::get('show/{product}', [App\Http\Controllers\ProductController::class, 'show'])->name('show');
Route::get('detail/{product}', [App\Http\Controllers\ProductController::class, 'detail'])->name('detail');
Route::get('edit/{product}', [App\Http\Controllers\ProductController::class, 'edit'])->name('edit');
Route::put('edit/{product}', [App\Http\Controllers\ProductController::class, 'update'])->name('update');
Route::delete('detail/{product}', [App\Http\Controllers\ProductController::class, 'cancel'])->name('cancel');
Route::delete('/{product}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('delete');

Route::delete('/{owner}', [App\Http\Controllers\OwnerController::class, 'destroy'])->name('destroy');
Route::get('/payment', [App\Http\Controllers\OwnerController::class, 'index'])->name('payment');

Route::get('confirm', [App\Http\Controllers\OwnerController::class, 'confirm'])->name('confirm');
Route::post('/addconfirm', [App\Http\Controllers\OwnerController::class, 'addconfirm'])->name('addconfirm');

Route::get('complaint', [App\Http\Controllers\OwnerController::class, 'complaint'])->name('complaint');
Route::post('/addcomplaint', [App\Http\Controllers\OwnerController::class, 'addcomplaint'])->name('addcomplaint');

Route::get('/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('create');
Route::post('/finishorder/{product}', [App\Http\Controllers\OwnerController::class, 'finishorder'])->name('finishorder');
Route::get('/myorders', [App\Http\Controllers\OwnerController::class, 'finish'])->name('myorders');
