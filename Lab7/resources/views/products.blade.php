<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Danh Sách Sản Phẩm</h1>
        <table class="table table-striped table-hover mt-4">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Giá</th>
                    <th>Ghi Chú</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product['id'] }}</td>
                    <td>{{ $product['name'] }}</td>
                    <td>
                        @if($product['price'] > 10000000)
                            <span style="color: red; font-weight: bold;">
                                {{ number_format($product['price'], 0, ',', '.') }} đ (Vip)
                            </span>
                        @else
                            {{ number_format($product['price'], 0, ',', '.') }} đ
                        @endif
                    </td>
                    <td>
                        {{ $product['price'] > 10000000 ? 'Sản phẩm cao cấp' : 'Sản phẩm thường' }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
