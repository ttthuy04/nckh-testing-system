<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class NhanVienVanPhongKhoaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('nhan_vien_van_phong_khoa')->insert([
            [
                'ma_nv' => 'NVK001',
                'ten_nv' => 'Nguyễn Văn A',
                'phong_ban' => 'Khoa Công nghệ Thông tin',
                'email' => 'nvkhoa1@example.com',
                'quyen_nguoi_dung' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_nv' => 'NVK002',
                'ten_nv' => 'Trần Thị B',
                'phong_ban' => 'Khoa Điện - Điện tử',
                'email' => 'nvkhoa2@example.com',
                'quyen_nguoi_dung' => 'Nhân viên',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_nv' => 'NVK003',
                'ten_nv' => 'Lê Hoàng C',
                'phong_ban' => 'Khoa Xây dựng',
                'email' => 'nvkhoa3@example.com',
                'quyen_nguoi_dung' => 'Nhân viên',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_nv' => 'NVK004',
                'ten_nv' => 'Phạm Minh D',
                'phong_ban' => 'Khoa Môi trường',
                'email' => 'nvkhoa4@example.com',
                'quyen_nguoi_dung' => 'Nhân viên',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_nv' => 'NVK005',
                'ten_nv' => 'Đặng Thanh E',
                'phong_ban' => 'Khoa Cơ khí',
                'email' => 'nvkhoa5@example.com',
                'quyen_nguoi_dung' => 'Nhân viên',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
