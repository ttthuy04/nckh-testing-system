<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaiKhoan\LoginController;
use App\Http\Controllers\VanPhongKhoa\VanPhongKhoaController;

Route::get('/', function () {
    return redirect()->route('login.form');
});

Route::get('/dang-nhap', [LoginController::class, 'index'])->name('login.form'); // Trang hiển thị form đăng nhập
Route::post('/dang-nhap', [LoginController::class, 'login'])->name('login.process'); // Xử lý đăng nhập


Route::middleware(['auth'])->group(function () {
    Route::get('vpk/capnhatketqua', [VanPhongKhoaController::class, 'capnhatketqua'])->name('vanphongkhoa.capnhatketqua');
    Route::post('vpk/cap-nhat-ket-qua-khoa', [VanPhongKhoaController::class, 'capNhatDiem']);

    Route::get('vpk/truyvanthongtin', [VanPhongKhoaController::class, 'truyvanthongtin'])->name('vanphongkhoa.truyvanthongtin');
    Route::get('vpk/capnhatlichtrinhbaove', [VanPhongKhoaController::class, 'capnhatlichtrinhbaove'])->name('vanphongkhoa.capnhatlichtrinhbaove');
    Route::post('vpk/lich-trinh/{id}/update', [VanPhongKhoaController::class, 'updatelichtrinh'])->name('lich_trinh.update');

    Route::get('vpk/ghepdoidetai-hoidong', [VanPhongKhoaController::class, 'ghepdoidetaihoidong'])->name('vanphongkhoa.ghepdoidetaihoidong');
    Route::post('vpk/ghepdoidetai-hoidong-luu', [VanPhongKhoaController::class, 'storeghepdoidetai'])->name('ghepdoi.luu');

    Route::get('vpk/tintuc', [VanPhongKhoaController::class, 'tintuc'])->name('vanphongkhoa.tintuc');
    Route::get('vpk/tintuc/{ma_tin_tuc}', [VanPhongKhoaController::class, 'showTinTuc'])->name('vanphongkhoa.chitiettintuc');
    Route::get('vpk/phanbienvabaove', [VanPhongKhoaController::class, 'phanBienVaBaoVe'])->name('vanphongkhoa.phanbienvabaove');
    Route::get('vpk/xem-bao-cao', [VanPhongKhoaController::class, 'xemBaoCao'])->name('vanphongkhoa.xembaocao');
    Route::get('vanphongkhoa/baocao/{ma_bc}', [VanPhongKhoaController::class, 'showBaoCao'])->name('vanphongkhoa.chitietbaocao');
    Route::get('vpk/chia-hoi-dong', [VanPhongKhoaController::class, 'chiaHoiDong'])->name('vanphongkhoa.chiahoidong');
    Route::get('vpk/chon-hoi-dong', [VanPhongKhoaController::class, 'chonHoiDong'])->name('vanphongkhoa.chonhoidong');
});

// Đăng xuất
Route::post('/dang-xuat', [LoginController::class, 'logout'])->name('logout');
