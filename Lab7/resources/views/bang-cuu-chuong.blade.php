<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Cửu Chương</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="mb-4">Bảng Cửu Chương</h1>

                @if(isset($error))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Lỗi!</strong> {{ $error }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if($n !== null)
                    <div class="alert alert-success">
                        <h4>Bảng Cửu Chương {{ $n }}</h4>
                    </div>

                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Phép Tính</th>
                                <th>Kết Quả</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for($i = 1; $i <= 10; $i++)
                                <tr>
                                    <td>{{ $n }} × {{ $i }}</td>
                                    <td><strong>{{ $n * $i }}</strong></td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>

                    <div class="mt-4">
                        <a href="{{ url('/') }}" class="btn btn-primary">Quay Lại Trang Chủ</a>
                    </div>
                @else
                    <div class="alert alert-warning">
                        <p>Vui lòng truyền một số từ 1 đến 10 để xem bảng cửu chương.</p>
                        <p><strong>Ví dụ:</strong> <code>/bang-cuu-chuong/5</code></p>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Thử Bảng Cửu Chương:</h5>
                            <div class="row g-2">
                                @for($i = 1; $i <= 9; $i++)
                                    <div class="col-md-3">
                                        <a href="{{ url('/bang-cuu-chuong/' . $i) }}" class="btn btn-outline-primary w-100">
                                            Bảng {{ $i }}
                                        </a>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
