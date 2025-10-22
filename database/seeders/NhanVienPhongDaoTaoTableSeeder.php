<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class NhanVienPhongDaoTaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('nhan_vien_phong_dao_tao')->insert([
            [
                'ma_nv' => 'NV001',
                'ten_nv' => 'Nguyễn Văn A',
                'phong_ban' => 'Phòng đào tạo',
                'email' => 'admin@example.com',
                'quyen_nguoi_dung' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_nv' => 'NV002',
                'ten_nv' => 'Trần Thị B',
                'phong_ban' => 'Phòng đào tạo',
                'email' => 'nhanvien1@example.com',
                'quyen_nguoi_dung' => 'Nhân viên',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_nv' => 'NV003',
                'ten_nv' => 'Lê Hoàng C',
                'phong_ban' => 'Phòng đào tạo',
                'email' => 'nhanvien2@example.com',
                'quyen_nguoi_dung' => 'Nhân viên',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_nv' => 'NV004',
                'ten_nv' => 'Phạm Minh D',
                'phong_ban' => 'Phòng đào tạo',
                'email' => 'nhanvien3@example.com',
                'quyen_nguoi_dung' => 'Nhân viên',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_nv' => 'NV005',
                'ten_nv' => 'Đặng Thanh E',
                'phong_ban' => 'Phòng đào tạo',
                'email' => 'nhanvien4@example.com',
                'quyen_nguoi_dung' => 'Nhân viên',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
