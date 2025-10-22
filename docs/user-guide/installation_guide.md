# ⚙️ Hướng dẫn Cài đặt & Chạy Dự án Laravel

🚀 Hướng dẫn chạy Laravel project trên local
🔽 Bước 1: Clone source code về máy
bash
Copy
Edit
git clone https://github.com/ten-cua-ban/ten-repo.git
cd ten-repo
✅ Thay ten-cua-ban/ten-repo bằng link GitHub thật.

📦 Bước 2: Cài đặt thư viện PHP bằng Composer
bash
Copy
Edit
composer install
⚙️ Bước 3: Tạo file .env và cấu hình môi trường
bash
Copy
Edit
cp .env.example .env
Sau đó mở file .env để chỉnh thông tin kết nối database:

env
Copy
Edit
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ten_cua_database
DB_USERNAME=root
DB_PASSWORD=mat_khau
✅ Nhớ tạo database trong MySQL trước hoặc để mình hướng dẫn nếu cần.

🔑 Bước 4: Tạo key ứng dụng Laravel
bash
Copy
Edit
php artisan key:generate
🧩 Bước 5: Chạy migrate để tạo bảng trong database
bash
Copy
Edit
php artisan migrate
⚠️ Nếu có seed dữ liệu:

bash
Copy
Edit
php artisan db:seed
🌐 Bước 6 (tuỳ chọn): Cài thư viện frontend (nếu dùng Vite, Mix)
bash
Copy
Edit
npm install
npm run dev
🟢 Bước 7: Chạy project
bash
Copy
Edit
php artisan serve
Truy cập website tại: http://localhost:8000
