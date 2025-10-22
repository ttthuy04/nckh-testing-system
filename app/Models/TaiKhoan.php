<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class TaiKhoan extends Authenticatable
{
    use HasFactory;

    protected $table = 'tai_khoan';
    protected $primaryKey = 'email';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'email',
        'mat_khau', // Đổi lại từ 'mat_khau' để Laravel nhận diện đúng
        'vai_tro',
    ];

    protected $hidden = [
        'mat_khau', // Laravel yêu cầu trường này
    ];

    // Đổi tên cột 'mat_khau' để dùng với Laravel Auth
    public function getAuthPassword()
    {
        return $this->attributes['mat_khau']; // Sử dụng 'password' thay vì 'mat_khau'
    }
    public function sinhVien()
    {
        return $this->hasOne(SinhVien::class, 'email', 'email');
    }
    public function giangVien()
    {
        return $this->hasOne(GiangVien::class, 'email', 'email');
    }
    public function vanphongkhoa()
    {
        return $this->hasOne(VanPhongKhoa::class, 'email', 'email');
    }
    public function phongdaotao()
    {
        return $this->hasOne(PhongDaoTao::class, 'email', 'email');
    }
    
}

    