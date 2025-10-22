# 🧪 Test Plan - Hệ thống đăng ký NCKH

## 1. Mục tiêu kiểm thử

Đảm bảo hệ thống đăng ký đề tài nghiên cứu khoa học (NCKH) hoạt động đúng yêu cầu, bao gồm:

-   Đăng nhập, đăng ký, quản lý đề tài, duyệt đề tài.
-   Kiểm tra tính ổn định và bảo mật cơ bản.

---

## 2. Phạm vi kiểm thử

| Bao gồm |
| ------- |

| - Chức năng người dùng (sinh viên, giảng viên, admin). <br> - Giao diện web, form nhập liệu, thông báo lỗi. <br> - Kiểm thử API nội bộ.

---

## 3. Môi trường kiểm thử

| Thành phần   | Chi tiết            |
| ------------ | ------------------- |
| OS           | Windows 10          |
| Browser      | Chrome 129+         |
| Framework    | Laravel 10          |
| DB           | MySQL 8.0           |
| Local server | `php artisan serve` |

---

## 4. Các loại kiểm thử

-   Kiểm thử chức năng (Functional Testing)
-   Kiểm thử giao diện (UI Testing)
-   Kiểm thử hồi quy (Regression Testing)
-   Kiểm thử chấp nhận (UAT)

---

## 5. Tiêu chí hoàn thành

| Mục tiêu     | Tiêu chí                        |
| ------------ | ------------------------------- |
| Pass rate    | ≥ 95% test case passed          |
| Bug Severity | Không còn lỗi Critical          |
| Coverage     | Bao phủ toàn bộ chức năng chính |

---

## 6. Thành viên thực hiện

| Vai trò | Tên                   |
| ------- | --------------------- |
| Tester  | Nguyễn Thị Thanh Thủy |

---

## 7. Kế hoạch kiểm thử

| Giai đoạn          | Thời gian | Mô tả                            |
| ------------------ | --------- | -------------------------------- |
| Phân tích yêu cầu  | 1 ngày    | Đọc hiểu chức năng hệ thống      |
| Viết Test Case     | 2 ngày    | Xây dựng các trường hợp kiểm thử |
| Thực hiện kiểm thử | 2 ngày    | Kiểm tra thực tế trên giao diện  |
| Báo cáo & tổng kết | 1 ngày    | Ghi lại bug và kết quả           |

---

## 8. Rủi ro & Giảm thiểu

| Rủi ro                     | Biện pháp                                |
| -------------------------- | ---------------------------------------- |
| Môi trường lỗi (PHP/MySQL) | Sử dụng bản ổn định Laravel 10           |
| Không rõ yêu cầu           | Dựa vào giao diện để phân tích test case |
