<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SinhVienTableSeeder extends Seeder
{
    public function run()
    {

        // Chèn dữ liệu vào bảng sinh_vien
        DB::table('sinh_vien')->insert([
            [
                'ma_sv' => 'SV001',
                'ten_sv' => 'Nguyễn Văn A',
                'lop' => 'CTK43',
                'gioi_tinh' => 'Nam',
                'nam_sinh' => 2004,
                'ma_khoa' => 'KH001',
                'email' => 'sinhvien@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_sv' => 'SV002',
                'ten_sv' => 'Trần Thị B',
                'lop' => 'CTK44',
                'gioi_tinh' => 'Nữ',
                'nam_sinh' => 2005,
                'ma_khoa' => 'KH002',
                'email' => 'sinhvien1@gmail.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_sv' => 'SV003',
                'ten_sv' => 'Lê Hoàng C',
                'lop' => 'CTK45',
                'gioi_tinh' => 'Nam',
                'nam_sinh' => 2003,
                'ma_khoa' => 'KH003',
                'email' => 'sinhvien2@gmail.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_sv' => 'SV004',
                'ten_sv' => 'Phạm Minh D',
                'lop' => 'CTK46',
                'gioi_tinh' => 'Khác',
                'nam_sinh' => 2002,
                'ma_khoa' => 'KH004',
                'email' => 'sinhvien3@gmail.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_sv' => 'SV005',
                'ten_sv' => 'Đặng Thanh E',
                'lop' => 'CTK47',
                'gioi_tinh' => 'Nữ',
                'nam_sinh' => 2001,
                'ma_khoa' => 'KH005',
                'email' => 'sinhvien4@gmail.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
