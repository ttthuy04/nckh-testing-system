<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HoiDongGiangVienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hoi_dong_giang_vien')->insert([
            [
                'ma_hd' => 1,
                'ma_gv' => 'GV001',
            ],
            [
                'ma_hd' => 5,
                'ma_gv' => 'GV002',
            ],
            [
                'ma_hd' => 2,
                'ma_gv' => 'GV003',
            ],
            [
                'ma_hd' => 3,
                'ma_gv' => 'GV004',
            ],
            [
                'ma_hd' => 4,
                'ma_gv' => 'GV005',
            ],
        ]);
    }
}
