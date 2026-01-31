<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; display: flex; flex-direction: column; min-height: 100vh; }
        .main-content { flex: 1; }
        .product-table { background-color: white; }
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
    <div class="mb-3">
        <a href="index.php?page=product-list" class="btn btn-secondary">Quay lại danh sách</a>
    </div>

    <div class="card shadow-sm mb-4">
        <div class="card-body p-4">
            <h4 class="card-title mb-3">Tìm kiếm sản phẩm</h4>
            <form method="GET" class="d-flex gap-2">
                <input type="hidden" name="page" value="product-search">
                <input type="text" name="q" class="form-control" placeholder="Nhập tên sản phẩm..." 
                       value="<?= htmlspecialchars($keyword ?? '') ?>" autofocus>
                <button type="submit" class="btn btn-primary">Tìm kiếm</button>
            </form>
        </div>
    </div>

    <?php if ($keyword): ?>
        <h5>Kết quả tìm kiếm cho: <strong>"<?= htmlspecialchars($keyword) ?>"</strong></h5>
        
        <?php if (empty($products)): ?>
            <div class="alert alert-warning" role="alert">
                Không tìm thấy sản phẩm nào phù hợp với từ khóa: <strong><?= htmlspecialchars($keyword) ?></strong>
            </div>
        <?php else: ?>
            <div class="table-responsive product-table rounded shadow-sm">
                <table class="table table-hover mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th width="50">ID</th>
                            <th>Tên sản phẩm</th>
                            <th width="120">Giá</th>
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
                                <a href="index.php?page=product-detail&id=<?= $p['id'] ?>" class="btn btn-sm btn-info">
                                    Xem
                                </a>
                                <a href="index.php?page=product-edit&id=<?= $p['id'] ?>" class="btn btn-sm btn-warning">
                                    Sửa
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</div>
</div>

<footer class="bg-dark text-white text-center py-3 mt-5">
    <p class="mb-0">&copy; 2026 Quản lý Sản phẩm MVC. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
