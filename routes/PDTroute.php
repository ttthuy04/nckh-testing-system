<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaiKhoan\LoginController;
use App\Http\Controllers\PhongDaoTao\PhongDaoTaoController;
use App\Http\Controllers\TaiKhoan\TaiKhoanController;

Route::get('/', function () {
    return redirect()->route('login.form');
});

Route::get('/dang-nhap', [LoginController::class, 'index'])->name('login.form'); // Trang hiển thị form đăng nhập
Route::post('/dang-nhap', [LoginController::class, 'login'])->name('login.process'); // Xử lý đăng nhập


Route::middleware(['auth'])->group(function () {
    Route::get('/capnhatketqua', [PhongDaoTaoController::class, 'capnhatketquacaptruong'])->name('phongdaotao.capnhatketqua');
    Route::post('/luu-de-tai-cap-truong', [PhongDaoTaoController::class, 'luuDeTaiCapTruong'])->name('phongdaotao.luuDeTaiCapTruong');
    Route::post('/cap-nhat-ket-qua-truong', [PhongDaoTaoController::class, 'capNhatDiemCapTruong']);


    Route::get('/truyvanthongtin', [PhongDaoTaoController::class, 'truyvanthongtin'])->name('phongdaotao.truyvanthongtin');
    Route::get('/capnhatlichtrinhbaove', [PhongDaoTaoController::class, 'capnhatlichtrinhbaove'])->name('phongdaotao.capnhatlichtrinhbaove');
    Route::post('/lich-trinh/{id}/update', [PhongDaoTaoController::class, 'updatelichtrinh'])->name('lich_trinh.update');

    Route::get('/ghepdoidetai-hoidong', [PhongDaoTaoController::class, 'ghepdoidetaihoidong'])->name('phongdaotao.ghepdoidetaihoidong');
    Route::post('/ghepdoidetai-hoidong-luu', [PhongDaoTaoController::class, 'storeghepdoidetai'])->name('ghepdoi.luu');

    Route::get('/tintuc', [PhongDaoTaoController::class, 'tintuc'])->name('phongdaotao.tintuc');
    Route::post('/tin-tuc/store', [PhongDaoTaoController::class, 'store'])->name('tin-tuc.store');
    Route::post('/tin-tuc/update/{id}', [PhongDaoTaoController::class, 'update'])->name('tin-tuc.update');
    Route::delete('/tin-tuc/delete/{id}', [PhongDaoTaoController::class, 'destroy'])->name('tin-tuc.delete');

    Route::get('/tintuc/{ma_tin_tuc}', [PhongDaoTaoController::class, 'showTinTuc'])->name('phongdaotao.chitiettintuc');
    Route::get('/phanbienvabaove', [PhongDaoTaoController::class, 'phanBienVaBaoVe'])->name('phongdaotao.phanbienvabaove');
    Route::get('/xem-bao-cao', [PhongDaoTaoController::class, 'xemBaoCao'])->name('phongdaotao.xembaocao');
    Route::get('/baocao/{ma_bc}', [PhongDaoTaoController::class, 'showBaoCao'])->name('phongdaotao.chitietbaocao');
    Route::get('/chia-hoi-dong', [PhongDaoTaoController::class, 'chiaHoiDong'])->name('phongdaotao.chiahoidong');
    Route::get('/chon-hoi-dong', [PhongDaoTaoController::class, 'chonHoiDong'])->name('phongdaotao.chonhoidong');



    Route::get('/quanlytaikhoan', [TaiKhoanController::class, 'index'])->name('phongdaotao.quanlytaikhoan');
    Route::post('/taikhoan/store', [TaiKhoanController::class, 'store'])->name('taikhoan.store');
    Route::get('/taikhoan/{email}/edit', [TaiKhoanController::class, 'edit']); // Lấy tài khoản để sửa
    Route::post('/taikhoan/update', [TaiKhoanController::class, 'update']);
    Route::delete('/quanlytaikhoan/{email}', [TaiKhoanController::class, 'destroy'])->name('taikhoan.destroy');
    Route::post('/taikhoan/phanquyen', [TaiKhoanController::class, 'phanQuyen']);
});

// Đăng xuất
Route::post('/dang-xuat', [LoginController::class, 'logout'])->name('logout');
