<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm mới</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; display: flex; flex-direction: column; min-height: 100vh; }
        .main-content { flex: 1; }
        .form-container { background-color: white; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Quản lý Sản phẩm</a>
        <div class="navbar-nav">
            <a class="nav-link" href="index.php">Trang chủ</a>
            <a class="nav-link active" href="index.php?page=product-list">Sản phẩm</a>
        </div>
    </div>
</nav>

<div class="main-content">
<div class="container mt-4 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="mb-3">
                <a href="index.php?page=product-list" class="btn btn-secondary">Quay lại danh sách</a>
            </div>

            <div class="form-container p-4">
                <h1 class="h3 mb-4">Thêm sản phẩm mới</h1>

                <?php if (isset($_SESSION['error'])): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?= htmlspecialchars($_SESSION['error']) ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    <?php unset($_SESSION['error']); ?>
                <?php endif; ?>

                <form action="index.php?page=product-store" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label"><strong>Tên sản phẩm <span class="text-danger">*</span></strong></label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên sản phẩm" required>
                        <small class="text-muted">Tên sản phẩm phải dài từ 3-100 ký tự</small>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label"><strong>Giá (VNĐ) <span class="text-danger">*</span></strong></label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="0" min="0" step="1000" required>
                        <small class="text-muted">Nhập giá bán của sản phẩm</small>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label"><strong>Mô tả</strong></label>
                        <textarea class="form-control" id="description" name="description" rows="4" 
                                  placeholder="Nhập mô tả sản phẩm..."></textarea>
                        <small class="text-muted">Mô tả chi tiết về sản phẩm (tùy chọn)</small>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label"><strong>URL Hình ảnh</strong></label>
                        <input type="url" class="form-control" id="image" name="image" placeholder="https://...">
                        <small class="text-muted">Dán link hình ảnh từ Internet (tùy chọn)</small>
                    </div>

                    <div class="d-flex gap-2 mt-4">
                        <button type="submit" class="btn btn-primary btn-lg">
                            Thêm sản phẩm
                        </button>
                        <a href="index.php?page=product-list" class="btn btn-secondary btn-lg">
                            Hủy
                        </a>
                    </div>
                </form>
            </div>

            <div class="alert alert-info mt-4" role="alert">
                <strong>Hướng dẫn:</strong> Điền đầy đủ thông tin sản phẩm rồi nhấn "Thêm sản phẩm" để lưu vào hệ thống.
            </div>
        </div>
    </div>
</div>

<footer class="bg-dark text-white text-center py-3 mt-5">
    <p class="mb-0">&copy; 2026 Quản lý Sản phẩm MVC. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
