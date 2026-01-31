<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body { height: 100%; }
        body { 
            background-color: #f8f9fa; 
            display: flex; 
            flex-direction: column;
            min-height: 100vh;
        }
        .navbar { flex-shrink: 0; }
        main { flex: 1; }
        footer { flex-shrink: 0; }
        .hero-section { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 60px 20px; text-align: center; }
        .feature-box { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); margin: 15px 0; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Quản lý Sản phẩm</a>
        <div class="navbar-nav">
            <a class="nav-link active" href="index.php">Trang chủ</a>
            <a class="nav-link" href="index.php?page=product-list">Sản phẩm</a>
        </div>
    </div>
</nav>

<main>

<div class="hero-section">
    <h1><?= $message ?></h1>
    <p class="lead"><?= $studentInfo ?></p>
</div>
