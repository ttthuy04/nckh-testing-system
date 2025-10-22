<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class HoiDongGiangVien extends Pivot
{
    use HasFactory;

    protected $table = 'hoi_dong_giang_vien';
    protected $primaryKey = null;
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = ['ma_hd', 'ma_gv'];

    public function hoiDong()
    {
        return $this->belongsTo(HoiDongDanhGia::class, 'ma_hd', 'ma_hd');
    }

    public function giangVien()
    {
        return $this->belongsTo(GiangVien::class, 'ma_gv', 'ma_gv');
    }
}
