<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; display: flex; flex-direction: column; min-height: 100vh; }
        .main-content { flex: 1; }
        .container { max-width: 1200px; }
        .product-table { background-color: white; }
        .action-btns a, .action-btns button { margin: 0 3px; }
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
<div class="container mt-4">
    <?php if (isset($_SESSION['success'])): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= htmlspecialchars($_SESSION['success']) ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        <?php unset($_SESSION['success']); ?>
    <?php endif; ?>

    <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= htmlspecialchars($_SESSION['error']) ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h2">Danh sách Sản phẩm</h1>
        <a href="index.php?page=product-add" class="btn btn-primary btn-lg">
            Thêm sản phẩm mới
        </a>
    </div>

    <?php if (empty($products)): ?>
        <div class="alert alert-info" role="alert">
            Không có sản phẩm nào. <a href="index.php?page=product-add">Thêm sản phẩm mới</a>
        </div>
    <?php else: ?>
        <div class="table-responsive product-table rounded shadow-sm">
            <table class="table table-hover mb-0">
                <thead class="table-dark">
                    <tr>
                        <th width="50">ID</th>
                        <th>Tên sản phẩm</th>
                        <th width="120">Giá</th>
                        <th width="150">Hình ảnh</th>
                        <th width="200">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($products as $p): ?>
                    <tr>
                        <td class="fw-bold"><?= htmlspecialchars($p['id']) ?></td>
                        <td>
                            <strong><?= htmlspecialchars($p['name']) ?></strong><br>
                            <small class="text-muted"><?= htmlspecialchars(substr($p['description'] ?? '', 0, 50)) ?>...</small>
                        </td>
                        <td class="fw-bold text-success">
                            <?= number_format($p['price'], 0, ',', '.') ?> VNĐ
                        </td>
                        <td>
                            <?php if (!empty($p['image'])): ?>
                                <img src="<?= htmlspecialchars($p['image']) ?>" alt="<?= htmlspecialchars($p['name']) ?>" 
                                     style="max-width: 80px; max-height: 80px; object-fit: cover;" class="rounded">
                            <?php else: ?>
                                <span class="badge bg-secondary">Chưa có</span>
                            <?php endif; ?>
                        </td>
                        <td class="action-btns">
                            <a href="index.php?page=product-detail&id=<?= $p['id'] ?>" class="btn btn-sm btn-info" title="Xem chi tiết">
                                Xem
                            </a>
                            <a href="index.php?page=product-edit&id=<?= $p['id'] ?>" class="btn btn-sm btn-warning" title="Chỉnh sửa">
                                Sửa
                            </a>
                            <a href="index.php?page=product-delete&id=<?= $p['id'] ?>" class="btn btn-sm btn-danger" 
                               onclick="return confirm('Bạn chắc chắn muốn xóa?')" title="Xóa">
                                Xóa
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</div>
</div>

<footer class="bg-dark text-white text-center py-3 mt-5">
    <p class="mb-0">&copy; 2026 Quản lý Sản phẩm MVC. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
