<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhoaTableSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;'); 
        DB::table('khoa')->insert([
            [
                'ma_khoa' => 'KH001',
                'ten_khoa' => 'Công nghệ thông tin',
                'truong_khoa' => 'GV001',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_khoa' => 'KH002',
                'ten_khoa' => 'Khoa học dữ liệu',
                'truong_khoa' => 'GV002',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_khoa' => 'KH003',
                'ten_khoa' => 'Kỹ thuật phần mềm',
                'truong_khoa' => 'GV003',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_khoa' => 'KH004',
                'ten_khoa' => 'Hệ thống thông tin',
                'truong_khoa' => 'GV004',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_khoa' => 'KH005',
                'ten_khoa' => 'Trí tuệ nhân tạo',
                'truong_khoa' => 'GV005',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
