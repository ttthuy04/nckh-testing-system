<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    use HasFactory;

    protected $table = 'tin_tuc';
    protected $primaryKey = 'ma_tin_tuc';
    public $incrementing = true;

    protected $fillable = ['tieu_de', 'noi_dung', 'ngay_dang', 'nguoi_dang', 'duong_dan_tep'];

    public function taiKhoan()
    {
        return $this->belongsTo(TaiKhoan::class, 'nguoi_dang', 'email');
    }
}