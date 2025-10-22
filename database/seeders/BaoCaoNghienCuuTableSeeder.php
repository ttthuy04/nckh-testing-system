<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BaoCaoNghienCuuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Lấy danh sách mã đề tài từ bảng de_tai
        $deTais = DB::table('de_tai')->pluck('ma_de_tai')->toArray();
        
        // Lấy danh sách mã sinh viên từ bảng sinh_vien
        $sinhViens = DB::table('sinh_vien')->pluck('ma_sv')->toArray();

        // Nếu không có dữ liệu, không thực hiện seed để tránh lỗi khóa ngoại
        if (empty($deTais) || empty($sinhViens)) {
            return;
        }

        // Chèn dữ liệu vào bảng bao_cao_nghien_cuu
        DB::table('bao_cao_nghien_cuu')->insert([
            [
                'tieu_de' => 'Khuyến khích Nhà Khoa Học Dám Nghĩ, Dám Làm',
                'noi_dung' => 'Báo cáo phân tích vai trò của tư duy đột phá trong nghiên cứu khoa học, nhấn mạnh tầm quan trọng của việc tạo điều kiện cho các nhà khoa học thử nghiệm ý tưởng mới. Đồng thời, đề xuất các chính sách hỗ trợ nhằm thúc đẩy sáng tạo và ứng dụng khoa học vào thực tiễn.....',
                'ma_de_tai' => $deTais[array_rand($deTais)], // Chọn ngẫu nhiên một đề tài
                'nguoi_tao' => $sinhViens[array_rand($sinhViens)], // Chọn ngẫu nhiên một sinh viên
                'ngay_tao' => now(),
                'trang_thai' => 'Được duyệt',
                'duong_dan_tep' => 'example.com/file/BC20250307',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tieu_de' => 'Báo cáo về bảo mật dữ liệu bằng Blockchain',
                'noi_dung' => 'Nghiên cứu và báo cáo về việc sử dụng công nghệ Blockchain để bảo vệ dữ liệu khỏi các cuộc tấn công mạng.',
                'ma_de_tai' => $deTais[array_rand($deTais)],
                'nguoi_tao' => $sinhViens[array_rand($sinhViens)],
                'ngay_tao' => now(),
                'trang_thai' => 'Được duyệt',
                'duong_dan_tep' => 'uploads/reports/blockchain_security.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tieu_de' => 'Báo cáo về ứng dụng Machine Learning trong dự báo thời tiết',
                'noi_dung' => 'Nghiên cứu và ứng dụng các mô hình học máy trong việc dự báo thời tiết chính xác hơn.',
                'ma_de_tai' => $deTais[array_rand($deTais)],
                'nguoi_tao' => $sinhViens[array_rand($sinhViens)],
                'ngay_tao' => now(),
                'trang_thai' => 'Bị từ chối',
                'duong_dan_tep' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
