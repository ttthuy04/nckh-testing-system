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
        Schema::create('nhan_vien_phong_dao_tao', function (Blueprint $table) {
            $table->string('ma_nv', 20)->primary();
            $table->string('ten_nv', 100);
            $table->string('phong_ban', 100);
            $table->string('email', 100);
            $table->enum('quyen_nguoi_dung', ['Admin', 'Nhân viên']);
            $table->timestamps();

            $table->foreign('email')->references('email')->on('tai_khoan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhan_vien_phong_dao_tao');
    }
};
