# 🚀 Hướng dẫn Chạy Laravel Project Trên Local

## 🔽 Bước 1: Clone source code về máy

```bash
git clone https://github.com/mchien1005/WebkhoahocDHTHUYLOI.git
cd WebkhoahocDHTHUYLOI
```

> ✅ Thay đường dẫn GitHub bằng link thật của bạn nếu khác.

---

## 📦 Bước 2: Cài đặt thư viện PHP bằng Composer

```bash
composer install
```

---

## ⚙️ Bước 3: Tạo file `.env` và cấu hình môi trường

```bash
cp .env.example .env
```

Sau đó mở file `.env` để chỉnh thông tin kết nối database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=webkhoahoc
DB_USERNAME=root
DB_PASSWORD=
```

> ✅ Nhớ tạo **database trong MySQL** trước khi chạy migrate.  
> Nếu chưa biết cách tạo database, bạn có thể tạo trong phpMyAdmin tại địa chỉ: [http://localhost/phpmyadmin](http://localhost/phpmyadmin).

---

## 🔑 Bước 4: Tạo key ứng dụng Laravel

```bash
php artisan key:generate
```

> Khi thành công sẽ hiển thị: `Application key set successfully.`

---

## 🧩 Bước 5: Chạy migrate để tạo bảng trong database

```bash
php artisan migrate
```

Nếu dự án có sẵn dữ liệu mẫu (seed), hãy chạy thêm:

```bash
php artisan db:seed
```

---

## 🌐 Bước 6 (Tuỳ chọn): Cài thư viện frontend (nếu dùng Vite hoặc Mix)

```bash
npm install
npm run dev
```

> ⚠️ Cần cài [Node.js](https://nodejs.org/en/download/) trước khi thực hiện lệnh này.

---

## 🟢 Bước 7: Chạy project

```bash
php artisan serve
```

Mở trình duyệt và truy cập địa chỉ:

👉 [http://localhost:8000](http://localhost:8000)

---

## 💡 Lỗi thường gặp & Cách khắc phục

| **Lỗi**                                             | **Nguyên nhân**                          | **Cách khắc phục**                                    |
| --------------------------------------------------- | ---------------------------------------- | ----------------------------------------------------- |
| `SQLSTATE[HY000] [1049] Unknown database`           | Chưa tạo database                        | Tạo database tên trùng với `DB_DATABASE` trong `.env` |
| `Access denied for user 'root'@'localhost'`         | Sai user/password                        | Sửa `DB_USERNAME` và `DB_PASSWORD` trong `.env`       |
| `No application encryption key has been specified.` | Chưa tạo key ứng dụng                    | Chạy lại `php artisan key:generate`                   |
| `vite not found` hoặc lỗi khi `npm run dev`         | Chưa cài Node.js hoặc thiếu dependencies | Cài Node.js, chạy `npm install` lại                   |

---
