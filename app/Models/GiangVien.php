<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiangVien extends Model
{
    use HasFactory;

    protected $table = 'giang_vien';
    protected $primaryKey = 'ma_gv';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['ma_gv', 'ten_gv', 'hoc_vi', 'sdt', 'ma_khoa', 'linh_vuc_nc', 'dinh_huong_nc', 'so_sv_huong_dan', 'email'];

    public function khoa()
    {
        return $this->belongsTo(Khoa::class, 'khoa', 'ma_khoa');
    }

    public function taiKhoan()
    {
        return $this->belongsTo(TaiKhoan::class, 'email', 'email');
    }

    public function deTai()
    {
        return $this->hasMany(DeTai::class, 'ma_gv', 'ma_gv');
    }
    public function deTais()
    {
        return $this->hasMany(DeTai::class, 'ma_gv', 'ma_gv');
    }
        public function nhanXetBaoCao()
    {
        return $this->hasMany(NhanXetBaoCao::class, 'ma_gv', 'ma_gv');
    }
}
