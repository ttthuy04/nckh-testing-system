<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoiMoiHuongDanTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('loi_moi_huong_dan')->insert([
            [
                'ma_sv' => 'SV001',
                'ma_gv' => 'GV001',
                'ma_de_tai' => 1,
                'trang_thai' => 'Chờ duyệt',
                'thoi_gian_gui' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_sv' => 'SV002',
                'ma_gv' => 'GV002',
                'ma_de_tai' => 2,
                'trang_thai' => 'Chấp nhận',
                'thoi_gian_gui' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_sv' => 'SV003',
                'ma_gv' => 'GV003',
                'ma_de_tai' => 3,
                'trang_thai' => 'Từ chối',
                'thoi_gian_gui' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_sv' => 'SV004',
                'ma_gv' => 'GV004',
                'ma_de_tai' => 1,
                'trang_thai' => 'Chờ duyệt',
                'thoi_gian_gui' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_sv' => 'SV005',
                'ma_gv' => 'GV005',
                'ma_de_tai' => 3,
                'trang_thai' => 'Chấp nhận',
                'thoi_gian_gui' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
