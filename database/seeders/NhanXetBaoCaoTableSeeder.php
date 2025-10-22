<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NhanXetBaoCaoTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('nhan_xet_bao_cao')->insert([
            [
                'ma_bc' => 1, // Mã báo cáo đã tồn tại trong bảng 'bao_cao'
                'ma_gv' => 'GV001', // Mã giảng viên đã tồn tại trong bảng 'giang_vien'
                'noi_dung' => 'Báo cáo có nội dung khá chi tiết, cần bổ sung thêm phần kết luận.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_bc' => 2,
                'ma_gv' => 'GV002',
                'noi_dung' => 'Cần trích dẫn nguồn rõ ràng hơn.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_bc' => 3,
                'ma_gv' => 'GV003',
                'noi_dung' => 'Phần phương pháp nghiên cứu cần trình bày rõ ràng hơn.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_bc' => 1,
                'ma_gv' => 'GV004',
                'noi_dung' => 'Hình thức trình bày tốt, nhưng cần bổ sung thêm dữ liệu thực nghiệm.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_bc' => 3,
                'ma_gv' => 'GV005',
                'noi_dung' => 'Báo cáo có nhiều điểm cần chỉnh sửa về nội dung và cách diễn đạt.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
