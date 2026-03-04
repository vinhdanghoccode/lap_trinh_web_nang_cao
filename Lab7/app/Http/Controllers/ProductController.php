<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list()
    {
        $products = [
            ['id' => 1, 'name' => 'Laptop Dell', 'price' => 15000000],
            ['id' => 2, 'name' => 'Iphone 13', 'price' => 20000000],
            ['id' => 3, 'name' => 'Samsung Galaxy S21', 'price' => 12000000],
            ['id' => 4, 'name' => 'iPad Pro', 'price' => 25000000],
            ['id' => 5, 'name' => 'Airpods Pro', 'price' => 6000000],
            ['id' => 6, 'name' => 'Apple Watch', 'price' => 8000000],
        ];

        return view('products', ['products' => $products]);
    }
}
