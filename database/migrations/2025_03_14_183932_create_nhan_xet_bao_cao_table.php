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
        Schema::create('nhan_xet_bao_cao', function (Blueprint $table) {
            $table->increments('ma_nhan_xet');
            $table->unsignedInteger('ma_bc');
            $table->string('ma_gv', 20);
            $table->text('noi_dung');
            $table->timestamps();

            $table->foreign('ma_bc')->references('ma_bc')->on('bao_cao_nghien_cuu')->onDelete('cascade');
            $table->foreign('ma_gv')->references('ma_gv')->on('giang_vien')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhan_xet_bao_cao');
    }
};
