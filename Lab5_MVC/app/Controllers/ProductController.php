<?php
namespace App\Controllers;

use App\Models\Product;

class ProductController {

    protected $product;

    public function __construct() {
        $this->product = new Product();
    }

    /**
     * Display product list
     */
    public function index() {
        $products = $this->product->all();
        include 'views/product_list.php';
    }

    /**
     * Show product detail page
     */
    public function detail() {
        $id = $_GET['id'] ?? null;
        
        if (!$id) {
            header("Location: index.php?page=product-list");
            exit;
        }

        $product = $this->product->find($id);
        
        if (!$product) {
            echo "404 - Sản phẩm không tìm thấy";
            return;
        }

        include 'views/product_detail.php';
    }

    /**
     * Show create form
     */
    public function create() {
        include 'views/product_add.php';
    }

    /**
     * Store product to database
     */
    public function store() {
        // Validate input
        if (empty($_POST['name']) || empty($_POST['price'])) {
            $_SESSION['error'] = "Tên sản phẩm và giá là bắt buộc!";
            header("Location: index.php?page=product-add");
            exit;
        }

        $data = [
            'name' => trim($_POST['name']),
            'price' => (float)$_POST['price'],
            'description' => $_POST['description'] ?? '',
            'image' => $_POST['image'] ?? ''
        ];

        if ($this->product->insert($data)) {
            $_SESSION['success'] = "Thêm sản phẩm thành công!";
            header("Location: index.php?page=product-list");
        } else {
            $_SESSION['error'] = "Có lỗi xảy ra!";
            header("Location: index.php?page=product-add");
        }
        exit;
    }

    /**
     * Show edit form
     */
    public function edit() {
        $id = $_GET['id'] ?? null;
        
        if (!$id) {
            header("Location: index.php?page=product-list");
            exit;
        }

        $product = $this->product->find($id);
        
        if (!$product) {
            echo "404 - Sản phẩm không tìm thấy";
            return;
        }

        include 'views/product_edit.php';
    }

    /**
     * Update product
     */
    public function update() {
        $id = $_POST['id'] ?? null;

        if (!$id || empty($_POST['name']) || empty($_POST['price'])) {
            $_SESSION['error'] = "Tên sản phẩm và giá là bắt buộc!";
            header("Location: index.php?page=product-edit&id=$id");
            exit;
        }

        $data = [
            'name' => trim($_POST['name']),
            'price' => (float)$_POST['price'],
            'description' => $_POST['description'] ?? '',
            'image' => $_POST['image'] ?? ''
        ];

        if ($this->product->update($id, $data)) {
            $_SESSION['success'] = "Cập nhật sản phẩm thành công!";
            header("Location: index.php?page=product-detail&id=$id");
        } else {
            $_SESSION['error'] = "Có lỗi xảy ra!";
            header("Location: index.php?page=product-edit&id=$id");
        }
        exit;
    }

    /**
     * Delete product
     */
    public function delete() {
        $id = $_GET['id'] ?? null;

        if (!$id) {
            header("Location: index.php?page=product-list");
            exit;
        }

        if ($this->product->delete($id)) {
            $_SESSION['success'] = "Xóa sản phẩm thành công!";
        } else {
            $_SESSION['error'] = "Có lỗi xảy ra!";
        }

        header("Location: index.php?page=product-list");
        exit;
    }

    /**
     * Search products
     */
    public function search() {
        $keyword = $_GET['q'] ?? '';
        
        if ($keyword) {
            $sql = "SELECT * FROM products WHERE name LIKE ? ORDER BY id DESC";
            $stmt = $this->product->getPdo()->prepare($sql);
            $products = $stmt->execute(['%' . $keyword . '%']) ? $stmt->fetchAll() : [];
        } else {
            $products = [];
        }

        include 'views/product_search.php';
    }
}
