<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeTaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Lấy danh sách mã giảng viên từ bảng giang_vien
        $giangViens = DB::table('giang_vien')->pluck('ma_gv')->toArray();

        // Nếu bảng giang_vien trống, không seed dữ liệu để tránh lỗi khóa ngoại
        if (empty($giangViens)) {
            return;
        }

        // Chèn dữ liệu vào bảng de_tai
        DB::table('de_tai')->insert([
            [
                'ten_de_tai' => ' Phát Triển Chính Sách Hỗ Trợ Nhà Khoa Học Đổi Mới ',
                'mo_ta' => 'Nghiên cứu cách sử dụng AI để hỗ trợ bác sĩ chẩn đoán bệnh chính xác hơn.',
                'trang_thai' => 'Chờ duyệt',
                'ma_gv' => $giangViens[array_rand($giangViens)], // Chọn ngẫu nhiên một giảng viên
                'ngay_dang_ky' => now(),
                'so_luong_sv' => 3,
                'linh_vuc_nc' => 'Trí tuệ nhân tạo',
                'diem_phan_bien' => null,
                'ket_qua_khoa' => null,
                'ket_qua_truong' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ten_de_tai' => 'Phát triển hệ thống an ninh mạng bằng Blockchain',
                'mo_ta' => 'Nghiên cứu cách ứng dụng Blockchain để bảo vệ hệ thống mạng khỏi các cuộc tấn công.',
                'trang_thai' => 'Được duyệt',
                'ma_gv' => $giangViens[array_rand($giangViens)],
                'ngay_dang_ky' => now(),
                'so_luong_sv' => 4,
                'linh_vuc_nc' => 'An ninh mạng',
                'diem_phan_bien' => 85.5,
                'ket_qua_khoa' => 'Giải Nhất',
                'ket_qua_truong' => 'Giải Nhì',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ten_de_tai' => 'Ứng dụng Machine Learning trong dự báo thời tiết',
                'mo_ta' => 'Nghiên cứu và ứng dụng thuật toán Machine Learning để dự báo thời tiết chính xác hơn.',
                'trang_thai' => 'Hoàn thành',
                'ma_gv' => $giangViens[array_rand($giangViens)],
                'ngay_dang_ky' => now(),
                'so_luong_sv' => 5,
                'linh_vuc_nc' => 'Khoa học dữ liệu',
                'diem_phan_bien' => 92.3,
                'ket_qua_khoa' => 'Giải Nhất',
                'ket_qua_truong' => 'Giải Nhất',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
