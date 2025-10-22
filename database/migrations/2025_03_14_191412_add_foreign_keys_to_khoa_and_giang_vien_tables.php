<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToKhoaAndGiangVienTables extends Migration
{
    public function up()
    {
        // Thêm khóa ngoại cho bảng giang_vien
        Schema::table('giang_vien', function (Blueprint $table) {
            $table->foreign('ma_khoa')->references('ma_khoa')->on('khoa')->onDelete('restrict');
        });

        // Thêm khóa ngoại cho bảng khoa
        Schema::table('khoa', function (Blueprint $table) {
            $table->foreign('truong_khoa')->references('ma_gv')->on('giang_vien')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('giang_vien', function (Blueprint $table) {
            $table->dropForeign(['khoa']);
        });

        Schema::table('khoa', function (Blueprint $table) {
            $table->dropForeign(['truong_khoa']);
        });
    }
};
