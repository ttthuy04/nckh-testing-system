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
        Schema::create('hoi_dong_giang_vien', function (Blueprint $table) {
            $table->unsignedInteger('ma_hd');
            $table->string('ma_gv', 20);
            $table->primary(['ma_hd', 'ma_gv']);
            $table->timestamps();

            $table->foreign('ma_hd')->references('ma_hd')->on('hoi_dong_danh_gia')->onDelete('cascade');
            $table->foreign('ma_gv')->references('ma_gv')->on('giang_vien')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hoi_dong_giang_vien');
    }
};
