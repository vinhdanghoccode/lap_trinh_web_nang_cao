@extends('layouts.master')

@section('title', 'Liên Hệ')

@section('content')
    <h1>Liên Hệ Với Chúng Tôi</h1>
    <p class="lead">Chúng tôi rất vui được nghe từ bạn. Vui lòng điền mẫu dưới đây.</p>

    <div class="row">
        <div class="col-md-6">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Tên Của Bạn</label>
                    <input type="text" class="form-control" id="name" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Số Điện Thoại</label>
                    <input type="tel" class="form-control" id="phone">
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Tin Nhắn</label>
                    <textarea class="form-control" id="message" rows="5" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Gửi Tin Nhắn</button>
            </form>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Địa Chỉ</h5>
                    <p>123 Đường ABC<br>Thành phố XYZ<br>Quốc gia</p>

                    <h5 class="card-title mt-4">Email</h5>
                    <p><a href="mailto:info@example.com">info@example.com</a></p>

                    <h5 class="card-title mt-4">Điện Thoại</h5>
                    <p><a href="tel:+84123456789">+84 (123) 456-789</a></p>

                    <h5 class="card-title mt-4">Giờ Làm Việc</h5>
                    <p>Thứ hai - Thứ sáu: 8:00 AM - 5:00 PM<br>Thứ bảy: 9:00 AM - 2:00 PM</p>
                </div>
            </div>
        </div>
    </div>
@endsection
