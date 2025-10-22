<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaoCaoNghienCuu extends Model
{
    use HasFactory;

    protected $table = 'bao_cao_nghien_cuu'; // Tên bảng
    protected $primaryKey = 'ma_bc'; // Khóa chính

    protected $fillable = [
        'ma_de_tai',
        'tieu_de',
        'noi_dung',
        'nguoi_tao',
        'ngay_tao',
        'trang_thai',
        'duong_dan_tep'
    ];


    public function deTai()
    {
        return $this->belongsTo(DeTai::class, 'ma_de_tai', 'ma_de_tai');
    }
    public function sinhVien()
    {
        return $this->belongsTo(SinhVien::class, 'nguoi_tao', 'ma_sv');
    }
        public function nhanXet()
    {
        return $this->hasMany(NhanXetBaoCao::class, 'ma_bc', 'ma_bc');
    }
}
