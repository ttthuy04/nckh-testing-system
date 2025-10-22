<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SinhVien extends Model
{
    use HasFactory;

    protected $table = 'sinh_vien';
    protected $primaryKey = 'ma_sv';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'ma_sv', 
        'ten_sv', 
        'lop', 
        'gioi_tinh', 
        'nam_sinh', 
        'ma_khoa',  // Change from 'khoa' to 'ma_khoa'
        'email'
    ];
    public function taiKhoan()
    {
        return $this->belongsTo(TaiKhoan::class, 'email', 'email');
    }

    public function deTai()
    {
        return $this->belongsToMany(DeTai::class, 'sinh_vien_de_tai', 'ma_sv', 'ma_de_tai');
    }
}

