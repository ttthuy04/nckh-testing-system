<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SinhVienDeTaiTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('sinh_vien_de_tai')->insert([
            [
                'ma_sv' => 'SV001',
                'ma_de_tai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_sv' => 'SV002',
                'ma_de_tai' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_sv' => 'SV003',
                'ma_de_tai' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_sv' => 'SV004',
                'ma_de_tai' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_sv' => 'SV005',
                'ma_de_tai' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
