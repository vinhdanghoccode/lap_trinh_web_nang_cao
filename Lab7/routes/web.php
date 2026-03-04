<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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

// Bài 1: HomeController
Route::get('/info', [HomeController::class, 'index']);

// Bài 2: ProductController
Route::get('/products', [ProductController::class, 'list']);

// Bài 3: Master Layout
Route::get('/', function () {
    return view('home');
});

Route::get('/layout-contact', function () {
    return view('contact');
});

// Bài 4: Bảng cửu chương
Route::get('/bang-cuu-chuong/{n}', [HomeController::class, 'multiplication']);
