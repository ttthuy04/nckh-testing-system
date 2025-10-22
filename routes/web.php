<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaiKhoan\LoginController;
use App\Http\Controllers\VanPhongKhoa\VanPhongKhoaController;

Route::middleware(['auth'])->group(function () {
    Route::get('/tintuc', [VanPhongKhoaController::class, 'tintuc'])->name('vanphongkhoa.tintuc');
});
require_once __DIR__ . '/sinhvien.php';
require_once __DIR__ . '/VPKroute.php';
require_once __DIR__ . '/GVroute.php';
require_once __DIR__ . '/PDTroute.php';
