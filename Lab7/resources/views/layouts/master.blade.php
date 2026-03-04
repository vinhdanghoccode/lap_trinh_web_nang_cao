<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Web Ứng Dụng')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex: 1;
        }
        footer {
            background-color: #f8f9fa;
            border-top: 1px solid #dee2e6;
            padding: 20px 0;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <!-- Header/Menu -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">Web Ứng Dụng</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Trang Chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/info') }}">Thông Tin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/layout-contact') }}">Liên Hệ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/products') }}">Sản Phẩm</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        <div class="container mt-5">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Thông Tin</h5>
                    <p>Đây là ứng dụng Laravel được xây dựng nhằm học tập các khái niệm cơ bản.</p>
                </div>
                <div class="col-md-4">
                    <h5>Liên Kết</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('/') }}">Trang Chủ</a></li>
                        <li><a href="{{ url('/products') }}">Sản Phẩm</a></li>
                        <li><a href="{{ url('/layout-contact') }}">Liên Hệ</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Liên Hệ</h5>
                    <p>Email: info@example.com</p>
                    <p>Điện thoại: 0123-456-789</p>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p>&copy; 2024 Bản quyền thuộc về Web Ứng Dụng. Tất cả quyền được bảo lưu.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
