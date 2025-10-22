<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class HoiDongDanhGiaTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Lấy danh sách mã đề tài từ bảng de_tai
        $maDeTais = DB::table('de_tai')->pluck('ma_de_tai')->toArray();

        for ($i = 0; $i < 5; $i++) {
            DB::table('hoi_dong_danh_gia')->insert([
                'so_luong_gv' => $faker->numberBetween(1, 10), // Số lượng giáo viên từ 1 đến 10
                'ma_de_tai' => $faker->randomElement($maDeTais), // Chọn ngẫu nhiên một mã đề tài từ danh sách
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
