<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Nguyen Van A',
            'age' => 20,
            'school' => 'Đại học CNTT'
        ];

        return view('welcome', compact('data'));
    }

    public function multiplication($n)
    {
        // Kiểm tra xem $n có phải số hay không
        if (!is_numeric($n) || $n < 1 || $n > 10) {
            return view('bang-cuu-chuong', ['n' => null, 'error' => 'Số không hợp lệ. Vui lòng nhập số từ 1 đến 10.']);
        }

        return view('bang-cuu-chuong', ['n' => (int)$n]);
    }
}
