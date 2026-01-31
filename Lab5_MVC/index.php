<?php
session_start();

require 'vendor/autoload.php';

use App\Controllers\HomeController;
use App\Controllers\ProductController;

$page = $_GET['page'] ?? 'home';
$controller = new ProductController();

match($page) {
    // Home
    'home' => (new HomeController())->index(),
    
    // Product List
    'product-list' => $controller->index(),
    
    // Product Detail
    'product-detail' => $controller->detail(),
    
    // Product Create (Show Form)
    'product-add' => $controller->create(),
    
    // Product Store (Save to DB)
    'product-store' => $controller->store(),
    
    // Product Edit (Show Form)
    'product-edit' => $controller->edit(),
    
    // Product Update (Save to DB)
    'product-update' => $controller->update(),
    
    // Product Delete
    'product-delete' => $controller->delete(),
    
    // Product Search (Bonus)
    'product-search' => $controller->search(),
    
    // 404
    default => print "<div class='alert alert-danger m-4'>404 - Trang không tìm thấy</div>",
};

