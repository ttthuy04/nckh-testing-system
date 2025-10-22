<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class LichTrinhBaoVeTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Lấy danh sách mã hội đồng từ bảng hoi_dong_danh_gia
        $maHoiDongs = DB::table('hoi_dong_danh_gia')->pluck('ma_hd')->toArray();

        for ($i = 0; $i < 5; $i++) {
            DB::table('lich_trinh_bao_ve')->insert([
                'ngay_bao_ve' => $faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'), // Ngày bảo vệ trong khoảng từ hiện tại đến 1 năm sau
                'gio_bao_ve' => $faker->time('H:i:s'), // Giờ bảo vệ ngẫu nhiên
                'dia_diem' => $faker->address(), // Địa điểm ngẫu nhiên
                'ma_hoi_dong' => $faker->randomElement($maHoiDongs), // Chọn ngẫu nhiên một mã hội đồng từ danh sách
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
