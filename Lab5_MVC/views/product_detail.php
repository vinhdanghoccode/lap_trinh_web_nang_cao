<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm - <?= htmlspecialchars($product['name']) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; display: flex; flex-direction: column; min-height: 100vh; }
        .main-content { flex: 1; }
        .product-image { max-width: 400px; height: auto; object-fit: cover; border-radius: 8px; }
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
    <div class="mb-3">
        <a href="index.php?page=product-list" class="btn btn-secondary">← Quay lại danh sách</a>
    </div>

    <div class="row">
        <div class="col-md-5">
            <?php if (!empty($product['image'])): ?>
                <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" 
                     class="product-image w-100 shadow-sm">
            <?php else: ?>
                <div class="bg-light p-5 text-center rounded shadow-sm">
                    <p class="text-muted">Không có hình ảnh</p>
                </div>
            <?php endif; ?>
        </div>

        <div class="col-md-7">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h2 class="mb-0"><?= htmlspecialchars($product['name']) ?></h2>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <p><strong>Mã sản phẩm:</strong></p>
                            <p class="text-muted">#<?= $product['id'] ?></p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Giá bán:</strong></p>
                            <p class="text-success fs-5 fw-bold">
                                <?= number_format($product['price'], 0, ',', '.') ?> VNĐ
                            </p>
                        </div>
                    </div>

                    <hr>

                    <div class="mb-3">
                        <p><strong>Mô tả sản phẩm:</strong></p>
                        <p class="text-muted">
                            <?= nl2br(htmlspecialchars($product['description'] ?? 'Không có mô tả')) ?>
                        </p>
                    </div>

                    <hr>

                    <div class="d-flex gap-2">
                        <a href="index.php?page=product-edit&id=<?= $product['id'] ?>" class="btn btn-warning">
                            Chỉnh sửa
                        </a>
                        <a href="index.php?page=product-delete&id=<?= $product['id'] ?>" class="btn btn-danger"
                           onclick="return confirm('Bạn chắc chắn muốn xóa sản phẩm này?')">
                            Xóa
                        </a>
                    </div>
                </div>
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
