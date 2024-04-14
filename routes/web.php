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

Route::get('/track', [ProductController::class, 'trackOrder'])->name('track.order');
Route::post('/track', [ProductController::class, 'processOrder'])->name('track.order.process');

Route::get('/product/', [App\Http\Controllers\ProductController::class, 'index'])->name('product');
Route::post('/tambah', [App\Http\Controllers\ProductController::class, 'tambah'])->name('tambah');
Route::get('/product/create', [App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
Route::get('/product/show/{product}', [App\Http\Controllers\ProductController::class, 'show'])->name('product.show');
Route::get('/product/edit/{product}', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/edit/{product}', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
Route::delete('/{product}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('destroy');
Route::get('setstatus/{id}', [App\Http\Controllers\ProductController::class, 'updateStatus'])->name('setStatus');
Route::get('kirimnota/{id}', [App\Http\Controllers\ProductController::class, 'kirimnota'])->name('kirimnota');

Route::get('confirm', [App\Http\Controllers\OwnerController::class, 'confirm'])->name('confirm');
Route::get('/myorder', [App\Http\Controllers\ProductController::class, 'myOrder'])->name('myorder');
Route::get('/myorders', [App\Http\Controllers\OwnerController::class, 'finish'])->name('myorders');
Route::get('/owner/', [App\Http\Controllers\OwnerController::class, 'index'])->name('owner');
Route::post('/store', [App\Http\Controllers\OwnerController::class, 'store'])->name('owner.store');
Route::get('/owner/create', [App\Http\Controllers\OwnerController::class, 'create'])->name('owner.create');
Route::get('/owner/show/{owner}', [App\Http\Controllers\OwnerController::class, 'show'])->name('owner.show');
Route::get('/owner/detail/{owner}', [App\Http\Controllers\OwnerController::class, 'detail'])->name('owner.detail');
Route::get('/owner/edit/{owner}', [App\Http\Controllers\OwnerController::class, 'edit'])->name('owner.edit');
Route::put('/owner/edit/{owner}', [App\Http\Controllers\OwnerController::class, 'update'])->name('owner.update');
Route::delete('/owner/{owner}', [App\Http\Controllers\OwnerController::class, 'hapus'])->name('hapus');

Route::get('complaint', [App\Http\Controllers\OwnerController::class, 'complaint'])->name('complaint');
Route::post('/addcomplaint', [App\Http\Controllers\OwnerController::class, 'addcomplaint'])->name('addcomplaint');