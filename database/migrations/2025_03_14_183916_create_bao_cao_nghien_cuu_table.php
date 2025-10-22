<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bao_cao_nghien_cuu', function (Blueprint $table) {
            $table->increments('ma_bc');
            $table->string('tieu_de', 255);
            $table->text('noi_dung');
            $table->unsignedInteger('ma_de_tai');
            $table->string('nguoi_tao', 20);
            $table->date('ngay_tao')->default(DB::raw('CURRENT_DATE'));
            $table->enum('trang_thai', ['Chờ duyệt', 'Được duyệt', 'Bị từ chối']);
            $table->string('duong_dan_tep', 255)->nullable();
            $table->timestamps();

            $table->foreign('ma_de_tai')->references('ma_de_tai')->on('de_tai')->onDelete('cascade');
            $table->foreign('nguoi_tao')->references('ma_sv')->on('sinh_vien')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bao_cao_nghien_cuu');
    }
};
