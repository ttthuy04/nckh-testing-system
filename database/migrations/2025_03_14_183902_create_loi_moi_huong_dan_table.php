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
        Schema::create('loi_moi_huong_dan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ma_sv', 20);
            $table->string('ma_gv', 20);
            $table->unsignedInteger('ma_de_tai');
            $table->enum('trang_thai', ['Chờ duyệt', 'Chấp nhận', 'Từ chối'])->default('Chờ duyệt');
            $table->dateTime('thoi_gian_gui')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();

            $table->foreign('ma_sv')->references('ma_sv')->on('sinh_vien')->onDelete('cascade');
            $table->foreign('ma_gv')->references('ma_gv')->on('giang_vien')->onDelete('cascade');
            $table->foreign('ma_de_tai')->references('ma_de_tai')->on('de_tai')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loi_moi_huong_dan');
    }
};
