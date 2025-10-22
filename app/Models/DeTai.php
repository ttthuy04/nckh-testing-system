<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeTai extends Model
{
    use HasFactory;

    protected $table = 'de_tai';
    protected $primaryKey = 'ma_de_tai';
    public $incrementing = true;

    protected $fillable = ['ten_de_tai', 'mo_ta', 'trang_thai', 'ma_gv', 'ngay_dang_ky', 'so_luong_sv', 'linh_vuc_nc', 'diem_phan_bien', 'ket_qua_khoa', 'ket_qua_truong'];

    public function giangVien()
    {
        return $this->belongsTo(GiangVien::class, 'ma_gv', 'ma_gv');
    }

    public function sinhVien()
    {
        return $this->belongsToMany(SinhVien::class, 'sinh_vien_de_tai', 'ma_de_tai', 'ma_sv');
    }
    public function baoCao()
    {
        return $this->hasOne(BaoCaoNghienCuu::class, 'ma_de_tai', 'ma_de_tai');
    }
        public function taiKhoan()
    {
        return $this->belongsTo(TaiKhoan::class, 'email', 'email');
    }

    public function deTai()
    {
        return $this->hasMany(DeTai::class, 'ma_gv', 'ma_gv');
    }
}

