<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductInquiryController;
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

Route::get('/', [PageController::class, 'home'])->name('homepage');

Route::resource('/page', PageController::class)->only(['show']);

Route::resource('/product', ProductController::class)->only(['show']);

Route::get('/product/{product}/inquiry', [ProductInquiryController::class ,'inquiryForm'])->name('product.inquiry');
Route::post('/product/{product}/inquiry', [ProductInquiryController::class ,'sendInquiry'])->name('product.inquiry.send');
