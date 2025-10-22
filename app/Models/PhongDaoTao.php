<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhongDaoTao extends Model
{
    use HasFactory;

    protected $table = 'nhan_vien_phong_dao_tao'; // Tên bảng trong CSDL

    protected $primaryKey = 'ma_nv'; // Khóa chính

    public $incrementing = false; // Vì `ma_nv` là VARCHAR, không tự động tăng

    protected $keyType = 'string'; // Kiểu dữ liệu của khóa chính

    protected $fillable = [
        'ma_nv',
        'ten_nv',
        'phong_ban',
        'email',
        'quyen_nguoi_dung',
    ];

    public function taiKhoan()
    {
        return $this->belongsTo(User::class, 'email', 'email'); // Liên kết với bảng tài khoản qua email
    }
}
