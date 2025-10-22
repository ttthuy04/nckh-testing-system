<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class SinhVienDeTai extends Pivot
{
    use HasFactory;

    protected $table = 'sinh_vien_de_tai';
    protected $primaryKey = null;
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = ['ma_sv', 'ma_de_tai'];

    public function sinhVien()
    {
        return $this->belongsTo(SinhVien::class, 'ma_sv', 'ma_sv');
    }

    public function deTai()
    {
        return $this->belongsTo(DeTai::class, 'ma_de_tai', 'ma_de_tai');
    }
}
