<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lich_trinh_bao_ve', function (Blueprint $table) {
            $table->increments('ma_lich_trinh');
            $table->date('ngay_bao_ve');
            $table->time('gio_bao_ve');
            $table->string('dia_diem', 255);
            $table->unsignedInteger('ma_hoi_dong');
            $table->timestamps();

            $table->foreign('ma_hoi_dong')->references('ma_hd')->on('hoi_dong_danh_gia')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lich_trinh_bao_ve');
    }
};
