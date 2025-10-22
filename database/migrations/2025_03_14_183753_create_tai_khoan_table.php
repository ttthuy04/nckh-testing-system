<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaiKhoanTable extends Migration
{
    public function up()
    {
        Schema::create('tai_khoan', function (Blueprint $table) {
            $table->string('email', 100)->primary();
            $table->string('mat_khau', 255);
            $table->enum('vai_tro', ['Admin', 'Giảng viên', 'Sinh viên', 'Nhân viên']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tai_khoan');
    }
}
