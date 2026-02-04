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

Route::get('/', function () {
    return view('welcome');
});

// Bài 2: Basic Routing
// Route /home - trả về chuỗi chào mừng
Route::get('/home', function () {
    return "Chào mừng đến với Laravel";
});

// Route /about - trả về thông tin cá nhân
Route::get('/about', function () {
    return "Họ tên: Nguyễn Văn A<br>Lớp: CNTT-K65<br>MSSV: 2021600001";
});

// Route /contact - trả về view contact
Route::get('/contact', function () {
    return view('contact');
});

// Bài 3: Dynamic Route & Calculation
// Route tính tổng: /tong/{a}/{b}
Route::get('/tong/{a}/{b}', function($a, $b) {
    $sum = $a + $b;
    return "Tổng của $a và $b là: $sum";
});

// Route thông tin sinh viên: /sinh-vien/{name}/{age?}
Route::get('/sinh-vien/{name}/{age?}', function($name, $age = 20) {
    return "Tên sinh viên: $name<br>Tuổi: $age";
});

// Bài 4: Route Group & Validation
// Nhóm route Admin với prefix
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return "Chào mừng Admin";
    });
    
    Route::get('/users', function () {
        return "Danh sách người dùng";
    });
});

// Route kiểm tra ngày tháng với validation
Route::get('/check-date/{day}/{month}/{year}', function($day, $month, $year) {
    return "Ngày hợp lệ: $day/$month/$year";
})->where([
    'day' => '[0-9]{1,2}',
    'month' => '[0-9]{1,2}',
    'year' => '[0-9]{4}'
]);
