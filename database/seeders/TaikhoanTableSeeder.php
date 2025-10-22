<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TaikhoanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tai_khoan')->insert([
            [
                'email' => 'admin@example.com',
                'mat_khau' => Hash::make('Admin@123'),
                'vai_tro' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'kingofzing2004@gmail.com',
                'mat_khau' => Hash::make('Tta@2004'),
                'vai_tro' => 'Giảng viên',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'sinhvien@example.com',
                'mat_khau' => Hash::make('Sinhvien@123'),
                'vai_tro' => 'Sinh viên',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'nhanvien@example.com',
                'mat_khau' => Hash::make('nhanvien123'),
                'vai_tro' => 'Nhân viên',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'tuananhxx72004@gmail.com',
                'mat_khau' => Hash::make('Password@123'),
                'vai_tro' => 'Giảng viên',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'giangvien1@example.com',
                'mat_khau' => Hash::make('password@123'),
                'vai_tro' => 'Giảng viên',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'giangvien2@example.com',
                'mat_khau' => Hash::make('Password@123'),
                'vai_tro' => 'Giảng viên',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'giangvien3@example.com',
                'mat_khau' => Hash::make('Password@123'),
                'vai_tro' => 'Giảng viên',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'giangvien4@example.com',
                'mat_khau' => Hash::make('Password@123'),
                'vai_tro' => 'Giảng viên',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'nhanvien1@example.com',
                'mat_khau' => Hash::make('Password@123'),
                'vai_tro' => 'Nhân viên',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'nhanvien2@example.com',
                'mat_khau' => Hash::make('Password@123'),
                'vai_tro' => 'Nhân viên',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'nhanvien3@example.com',
                'mat_khau' => Hash::make('Password@123'),
                'vai_tro' => 'Nhân viên',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'nhanvien4@example.com',
                'mat_khau' => Hash::make('Password@123'),
                'vai_tro' => 'Nhân viên',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'nhanvien5@example.com',
                'mat_khau' => Hash::make('Password@123'),
                'vai_tro' => 'Nhân viên',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'sinhvien.com',
                'mat_khau' => Hash::make('Password@123'),
                'vai_tro' => 'Nhân viên',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'sinhvien1@gmail.com',
                'mat_khau' => Hash::make('Password@123'),
                'vai_tro' => 'Sinh Viên',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'sinhvien2@gmail.com',
                'mat_khau' => Hash::make('Password@123'),
                'vai_tro' => 'Sinh Viên',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'sinhvien3@gmail.com',
                'mat_khau' => Hash::make('Password@123'),
                'vai_tro' => 'Sinh Viên',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'sinhvien4@gmail.com',
                'mat_khau' => Hash::make('Password@123'),
                'vai_tro' => 'Sinh Viên',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'nvkhoa1@example.com',
                'mat_khau' => Hash::make('Password@123'),
                'vai_tro' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'nvkhoa2@example.com',
                'mat_khau' => Hash::make('Password@123'),
                'vai_tro' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'nvkhoa3@example.com',
                'mat_khau' => Hash::make('Password@123'),
                'vai_tro' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'nvkhoa4@example.com',
                'mat_khau' => Hash::make('Password@123'),
                'vai_tro' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'nvkhoa5@example.com',
                'mat_khau' => Hash::make('Password@123'),
                'vai_tro' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
