<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoiDongDanhGia extends Model
{
    use HasFactory;

    protected $table = 'hoi_dong_danh_gia';
    protected $primaryKey = 'ma_hd';
    public $incrementing = true;

    protected $fillable = ['so_luong_gv', 'ma_de_tai'];



    public function giangViens()
    {
        return $this->belongsToMany(GiangVien::class, 'hoi_dong_giang_vien', 'ma_hd', 'ma_gv');
    }
}
