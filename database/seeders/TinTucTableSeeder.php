<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class TinTucTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tin_tuc')->insert([
            [
                'tieu_de' => 'Khuyến khích nhà khoa học dám nghĩ, dám làm',
                'noi_dung' => 'Thời gian qua, một trong những vướng mắc đối với các nhà khoa học là chưa có quy định, cơ chế rõ ràng về rủi ro trong nghiên cứu khoa học. Luật Khoa học và Công nghệ năm 2013...',
                'ngay_dang' => Carbon::parse('2025-02-06 07:01'),
                'nguoi_dang' => 'admin@example.com',  // Đảm bảo đúng email trong `tai_khoan`
                'duong_dan_tep' => 'uploads/news/file1.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tieu_de' => 'Mở đường để các công trình, nghiên cứu đi vào đời sống',
                'noi_dung' => 'Nghị quyết số 57-NQ/TW ngày 22/12/2024 của Bộ Chính trị về đột phá phát triển khoa học, công nghệ, đổi mới sáng tạo và chuyển đối số quốc gia vừa được TổngBí thư Tô Lâm ký ban hành,...',
                'ngay_dang' => Carbon::parse('2025-01-18 07:01'),
                'nguoi_dang' => 'admin@example.com',
                'duong_dan_tep' => 'uploads/news/file2.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tieu_de' => '17 công trình vào chung khảo Giải thưởng khoa học công nghệ dành cho giảng viên trẻ',
                'noi_dung' => '17 công trình khoa học của giảng viên từ các trường đại học đã được Hội đồng đánh giá và xét Giải thưởng khoa học công nghệ dành cho giảng viên trẻ năm2024...',
                'ngay_dang' => Carbon::parse('2025-03-06 07:01'),
                'nguoi_dang' => 'admin@example.com',
                'duong_dan_tep' => 'uploads/news/file3.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tieu_de' => '17 công trình vào chung khảo Giải thưởng khoa học công nghệ dành cho giảng viên trẻ',
                'noi_dung' => 'Hiện nay, Bộ Khoa học và Công nghệ đang cùng các bộ, ngành phối hợp chặt chẽ triển khai Chương trình Phát triển khoa học cơ bản...',
                'ngay_dang' => Carbon::parse('2025-03-06 07:01'),
                'nguoi_dang' => 'admin@example.com',
                'duong_dan_tep' => 'uploads/news/file4.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}