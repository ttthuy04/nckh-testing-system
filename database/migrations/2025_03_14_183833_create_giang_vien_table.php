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
        Schema::create('giang_vien', function (Blueprint $table) {
            $table->string('ma_gv', 20)->primary();
            $table->string('ten_gv', 100);
            $table->string('hoc_vi', 50);
            $table->string('sdt', 15)->unique();
            $table->string('ma_khoa', 20);
            $table->string('linh_vuc_nc', 255);
            $table->text('dinh_huong_nc')->nullable();
            $table->integer('so_sv_huong_dan')->default(0)->check('so_sv_huong_dan >= 0');
            $table->string('email', 100);
            $table->timestamps();

            $table->foreign('email')->references('email')->on('tai_khoan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('giang_vien');
    }
};
