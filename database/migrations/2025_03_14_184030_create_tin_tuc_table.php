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
        Schema::create('tin_tuc', function (Blueprint $table) {
            $table->increments('ma_tin_tuc');
            $table->string('tieu_de', 255);
            $table->text('noi_dung');
            $table->date('ngay_dang')->default(DB::raw('CURRENT_DATE'));
            $table->string('nguoi_dang', 100);
            $table->string('duong_dan_tep', 255)->nullable();
            $table->timestamps();

            $table->foreign('nguoi_dang')->references('email')->on('tai_khoan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tin_tuc');
    }
};
