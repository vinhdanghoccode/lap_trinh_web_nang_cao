# Lab 7 - Laravel Basic Routing

## Bài 1: Hello Laravel ✅

**Cài đặt thành công Laravel 8**

```bash
composer create-project --prefer-dist laravel/laravel Lab7_Laravel "8.*"
cd Lab7_Laravel
php artisan serve
```

Server đang chạy tại: **http://127.0.0.1:8000**

---

## Bài 2: Basic Routing & Views ✅

### Route 1: /home
- **URL**: http://127.0.0.1:8000/home
- **Kết quả**: "Chào mừng đến với Laravel"

### Route 2: /about
- **URL**: http://127.0.0.1:8000/about
- **Kết quả**: Hiển thị thông tin cá nhân (Họ tên, Lớp, MSSV)

### Route 3: /contact (với View)
- **URL**: http://127.0.0.1:8000/contact
- **View**: `resources/views/contact.blade.php`
- **Kết quả**: Trang HTML đẹp với thông tin liên hệ

---

## Bài 3: Dynamic Route & Calculation ✅

### Route 1: Tính tổng - /tong/{a}/{b}
- **URL mẫu**: http://127.0.0.1:8000/tong/5/10
- **Kết quả**: "Tổng của 5 và 10 là: 15"
- **Ví dụ khác**: 
  - `/tong/100/250` → "Tổng của 100 và 250 là: 350"
  - `/tong/7/3` → "Tổng của 7 và 3 là: 10"

### Route 2: Thông tin sinh viên - /sinh-vien/{name}/{age?}
- **URL mẫu 1**: http://127.0.0.1:8000/sinh-vien/Tuan/22
- **Kết quả**: "Tên sinh viên: Tuan<br>Tuổi: 22"
- **URL mẫu 2**: http://127.0.0.1:8000/sinh-vien/Tuan
- **Kết quả**: "Tên sinh viên: Tuan<br>Tuổi: 20" (tuổi mặc định)

---

## Bài 4 (Challenge): Route Group & Validation ✅

### Nhóm Route Admin (với prefix)

#### Route 1: /admin/dashboard
- **URL**: http://127.0.0.1:8000/admin/dashboard
- **Kết quả**: "Chào mừng Admin"

#### Route 2: /admin/users
- **URL**: http://127.0.0.1:8000/admin/users
- **Kết quả**: "Danh sách người dùng"

### Route kiểm tra ngày tháng (với Validation)

**Route**: /check-date/{day}/{month}/{year}

#### Quy tắc Validation:
- `day`: Số từ 1-31 (1-2 chữ số)
- `month`: Số từ 1-12 (1-2 chữ số)
- `year`: Phải là 4 chữ số

#### Ví dụ hợp lệ:
- http://127.0.0.1:8000/check-date/15/12/2024 ✅
- http://127.0.0.1:8000/check-date/1/1/2026 ✅
- http://127.0.0.1:8000/check-date/31/12/2025 ✅

#### Ví dụ không hợp lệ (404 Error):
- `/check-date/32/12/2024` ❌ (ngày > 31)
- `/check-date/15/13/2024` ❌ (tháng > 12)
- `/check-date/15/12/24` ❌ (năm không đủ 4 chữ số)
- `/check-date/abc/12/2024` ❌ (không phải số)

---

## Tổng hợp Routes đã tạo

| STT | Route | URL Mẫu | Mô tả |
|-----|-------|---------|-------|
| 1 | `/` | http://127.0.0.1:8000 | Trang chủ Laravel mặc định |
| 2 | `/home` | http://127.0.0.1:8000/home | Chào mừng |
| 3 | `/about` | http://127.0.0.1:8000/about | Thông tin cá nhân |
| 4 | `/contact` | http://127.0.0.1:8000/contact | Trang liên hệ (View) |
| 5 | `/tong/{a}/{b}` | http://127.0.0.1:8000/tong/5/10 | Tính tổng 2 số |
| 6 | `/sinh-vien/{name}/{age?}` | http://127.0.0.1:8000/sinh-vien/Tuan/22 | Thông tin SV |
| 7 | `/admin/dashboard` | http://127.0.0.1:8000/admin/dashboard | Admin Dashboard |
| 8 | `/admin/users` | http://127.0.0.1:8000/admin/users | Danh sách users |
| 9 | `/check-date/{day}/{month}/{year}` | http://127.0.0.1:8000/check-date/15/12/2024 | Kiểm tra ngày |

---

## Cấu trúc thư mục quan trọng

```
Lab7_Laravel/
├── app/
├── routes/
│   └── web.php          ← File định nghĩa routes (đã chỉnh sửa)
├── resources/
│   └── views/
│       └── contact.blade.php  ← View contact (đã tạo mới)
├── public/
├── .env
└── artisan
```

---

## Cách kiểm tra

1. **Mở trình duyệt**
2. **Truy cập từng URL** trong bảng trên
3. **Kiểm tra kết quả** hiển thị

### Ví dụ test nhanh:
```
✅ http://127.0.0.1:8000/home
✅ http://127.0.0.1:8000/about
✅ http://127.0.0.1:8000/contact
✅ http://127.0.0.1:8000/tong/20/30
✅ http://127.0.0.1:8000/sinh-vien/Nam
✅ http://127.0.0.1:8000/admin/dashboard
✅ http://127.0.0.1:8000/check-date/25/12/2024
```

---

## Ghi chú

- **Laravel version**: 8.x (tương thích PHP 8.0)
- **Server đang chạy**: http://127.0.0.1:8000
- **Dừng server**: Nhấn `Ctrl + C` trong terminal

## Kiến thức đã học

✅ Cài đặt Laravel bằng Composer  
✅ Hiểu cấu trúc thư mục Laravel  
✅ Định nghĩa routes cơ bản (GET)  
✅ Trả về string và view từ route  
✅ Sử dụng tham số động trong route  
✅ Tham số optional (tùy chọn)  
✅ Route Group với Prefix  
✅ Validation với where() và Regex  

---

**Hoàn thành tất cả bài tập! 🎉**
