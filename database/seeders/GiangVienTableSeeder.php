<?php
namespace Database\Seeders; 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GiangVienTableSeeder extends Seeder
{
    public function run()
    {
        // Chèn dữ liệu vào bảng giang_vien
        DB::table('giang_vien')->insert([
            [
                'ma_gv' => 'GV001',
                'ten_gv' => 'Phạm Tuấn Anh',
                'hoc_vi' => 'Tiến sĩ',
                'sdt' => '0987654321',
                'ma_khoa' => 'KH002',
                'linh_vuc_nc' => 'Khoa học dữ liệu',
                'dinh_huong_nc' => 'Nghiên cứu về trí tuệ nhân tạo và học máy',
                'so_sv_huong_dan' => 3,
                'email' => 'tuananhxx72004@gmail.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_gv' => 'GV002',
                'ten_gv' => 'Nguyễn Văn A',
                'hoc_vi' => 'Thạc sĩ',
                'sdt' => '0987111222',
                'ma_khoa' => 'KH001',
                'linh_vuc_nc' => 'Mạng máy tính',
                'dinh_huong_nc' => 'An ninh mạng và bảo mật thông tin',
                'so_sv_huong_dan' => 2,
                'email' => 'giangvien1@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_gv' => 'GV003',
                'ten_gv' => 'Trần Thị B',
                'hoc_vi' => 'Tiến sĩ',
                'sdt' => '0987222333',
                'ma_khoa' => 'KH003',
                'linh_vuc_nc' => 'Công nghệ phần mềm',
                'dinh_huong_nc' => 'Phát triển phần mềm và quản lý dự án',
                'so_sv_huong_dan' => 4,
                'email' => 'giangvien2@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_gv' => 'GV004',
                'ten_gv' => 'Lê Thị C',
                'hoc_vi' => 'Thạc sĩ',
                'sdt' => '0987333444',
                'ma_khoa' => 'KH004',
                'linh_vuc_nc' => 'Hệ thống thông tin',
                'dinh_huong_nc' => 'Dữ liệu lớn và phân tích dữ liệu',
                'so_sv_huong_dan' => 5,
                'email' => 'giangvien3@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_gv' => 'GV005',
                'ten_gv' => 'Đặng Văn D',
                'hoc_vi' => 'Tiến sĩ',
                'sdt' => '0987444555',
                'ma_khoa' => 'KH005',
                'linh_vuc_nc' => 'Trí tuệ nhân tạo',
                'dinh_huong_nc' => 'Xử lý ngôn ngữ tự nhiên',
                'so_sv_huong_dan' => 3,
                'email' => 'giangvien4@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
