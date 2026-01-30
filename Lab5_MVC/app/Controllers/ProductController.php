<?php
namespace App\Controllers;

use App\Models\Product;

class ProductController {

    public function index() {

        $products = (new Product())->getAllProducts();

        include 'views/product_list.php';
    }
}
