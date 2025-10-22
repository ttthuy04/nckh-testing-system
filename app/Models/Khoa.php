<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khoa extends Model
{
    use HasFactory;

    protected $table = 'khoa';
    protected $primaryKey = 'ma_khoa';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['ma_khoa', 'ten_khoa', 'truong_khoa'];

    public function truongKhoa()
    {
        return $this->belongsTo(GiangVien::class, 'truong_khoa', 'ma_gv');
    }

    public function giangVien()
    {
        return $this->hasMany(GiangVien::class, 'khoa', 'ma_khoa');
    }
}

