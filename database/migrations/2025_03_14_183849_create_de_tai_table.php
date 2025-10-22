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
        Schema::create('de_tai', function (Blueprint $table) {
            $table->increments('ma_de_tai');
            $table->string('ten_de_tai', 255);
            $table->text('mo_ta');
            $table->enum('trang_thai', ['Chờ duyệt', 'Được duyệt', 'Hoàn thành']);
            $table->string('ma_gv', 20);
            $table->date('ngay_dang_ky')->default(DB::raw('CURRENT_DATE'));
            $table->integer('so_luong_sv')->check('so_luong_sv >= 1 AND so_luong_sv <= 5');
            $table->string('linh_vuc_nc', 255);
            $table->float('diem_phan_bien')->nullable()->check('diem_phan_bien >= 0 AND diem_phan_bien <= 100');
            $table->enum('ket_qua_khoa', ['Giải Nhất', 'Giải Nhì', 'Giải Ba', 'Không có giải'])->nullable();
            $table->enum('ket_qua_truong', ['Giải Nhất', 'Giải Nhì', 'Giải Ba', 'Không có giải'])->nullable();
            $table->timestamps();

            $table->foreign('ma_gv')->references('ma_gv')->on('giang_vien')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('de_tai');
    }
};
