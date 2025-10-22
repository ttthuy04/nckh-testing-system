<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LichTrinhBaoVe extends Model
{
    use HasFactory;

    protected $table = 'lich_trinh_bao_ve';
    protected $primaryKey = 'ma_lich_trinh';
    public $incrementing = true;

    protected $fillable = ['ngay_bao_ve', 'gio_bao_ve', 'dia_diem', 'ma_hoi_dong'];

    public function hoiDong()
    {
        return $this->belongsTo(HoiDongDanhGia::class, 'ma_hoi_dong', 'ma_hd');
    }
    public function deTai()
    {
        return $this->hasOneThrough(DeTai::class, HoiDongDanhGia::class, 'ma_hd', 'ma_de_tai', 'ma_hoi_dong', 'ma_de_tai');
    }
}
