<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoiMoiHuongDan extends Model
{
    use HasFactory;

    protected $table = 'loi_moi_huong_dan';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    // Define status constants to match migration enum values
    const STATUS_PENDING = 'Đang chờ';
    const STATUS_APPROVED = 'Đã chấp nhận';
    const STATUS_REJECTED = 'Đã từ chối';

    protected $fillable = ['ma_sv', 'ma_gv', 'ma_de_tai', 'trang_thai', 'thoi_gian_gui'];

    protected $attributes = [
        'trang_thai' => self::STATUS_PENDING
    ];

    public function sinhVien()
    {
        return $this->belongsTo(SinhVien::class, 'ma_sv', 'ma_sv');
    }

    public function giangVien()
    {
        return $this->belongsTo(GiangVien::class, 'ma_gv', 'ma_gv');
    }

    public function deTai()
    {
        return $this->belongsTo(DeTai::class, 'ma_de_tai', 'ma_de_tai');
    }

    public static function getStatusText($status)
    {
        return [
            self::STATUS_PENDING => 'Chờ phê duyệt',
            self::STATUS_APPROVED => 'Đã chấp nhận',
            self::STATUS_REJECTED => 'Đã từ chối',
        ][$status] ?? 'Unknown';
    }
}
