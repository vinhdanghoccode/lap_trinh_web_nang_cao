@extends('layouts.master')

@section('title', 'Trang Chủ')

@section('content')
    <h1>Chào Mừng Đến Với Ứng Dụng</h1>
    <p class="lead">Đây là trang chủ của ứng dụng Laravel được xây dựng với Master Layout.</p>
    
    <div class="alert alert-info" role="alert">
        <h4 class="alert-heading">💡 Thông Báo</h4>
        <p>Hãy khám phá các tính năng của ứng dụng bằng cách click vào Menu trên.</p>
    </div>

    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Danh Sách Sản Phẩm</h5>
                    <p class="card-text">Xem tất cả các sản phẩm có sẵn trong hệ thống.</p>
                    <a href="{{ url('/products') }}" class="btn btn-primary">Xem Chi Tiết</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Liên Hệ Chúng Tôi</h5>
                    <p class="card-text">Gửi tin nhắn cho chúng tôi nếu bạn có bất kỳ câu hỏi nào.</p>
                    <a href="{{ url('/layout-contact') }}" class="btn btn-primary">Gửi Tin Nhắn</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Về Chúng Tôi</h5>
                    <p class="card-text">Tìm hiểu thêm về dự án và nhóm phát triển.</p>
                    <a href="{{ url('/info') }}" class="btn btn-primary">Tìm Hiểu Thêm</a>
                </div>
            </div>
        </div>
    </div>
@endsection
