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
        Schema::create('khoa', function (Blueprint $table) {
            $table->string('ma_khoa', 20)->primary();
            $table->string('ten_khoa', 100);
            $table->string('truong_khoa', 20)->nullable();
            $table->timestamps();

            //$table->foreign('truong_khoa')->references('ma_gv')->on('giang_vien')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('khoa');
    }
};
