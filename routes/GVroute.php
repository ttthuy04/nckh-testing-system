<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaiKhoan\LoginController;
use App\Http\Controllers\GiangVien\TintucController;
use App\Http\Controllers\GiangVien\DangKyNghienCuuController;
use App\Http\Controllers\GiangVien\DetainghiencuuController;
use App\Http\Controllers\GiangVien\BaocaonghiencuuController;
use App\Http\Controllers\GiangVien\LoimoihuongdanController;


// Trang chủ, chuyển hướng về đăng nhập
Route::get('/', function () {
    return redirect()->route('login.form');
});

// Hiển thị và xử lý đăng nhập
Route::get('/dang-nhap', [LoginController::class, 'index'])->name('login.form');
Route::post('/dang-nhap', [LoginController::class, 'login'])->name('login.process');

// Bảo vệ các route yêu cầu đăng nhập
Route::middleware(['auth'])->group(function () {
    Route::prefix('Giảng Viên')->group(function () {
        // Trang tin tức dành cho sinh viên
        Route::get('/tintuc', [TintucController::class, 'index'])->name('tintuc.index');
        Route::get('/tin-tuc/{id}', [TintucController::class, 'show'])->name('tintuc.show');

        
        Route::get('/dang-ky-nghien-cuu', [DangKyNghienCuuController::class, 'index'])->name('dangkynghiencuu.index');
        Route::post('/dang-ky-nghien-cuu/dangky-dinhhuong', [DangKyNghienCuuController::class, 'DangKyDinhHuongNghienCuu'])
            ->name('giangvien.dangky-dinhhuong');
        Route::post('/dang-ky-nghien-cuu/store', [DangKyNghienCuuController::class, 'store'])->name('dangkydetaidukien.store');
        Route::get('/dangkynghiencuu', [DangKyNghienCuuController::class, 'show'])->name('dangkynghiencuu.show');
        Route::post('/detai/approve', [DangKyNghienCuuController::class, 'approve'])->name('detai.approve');


        
        Route::get('/de-tai-nghien-cuu', [DeTaiNghienCuuController::class, 'index'])->name('detainghiencuu.index');
        Route::post('/detainghiencuu', [DeTaiNghienCuuController::class, 'store'])->name('detainghiencuu.store');
         Route::get('/detainghiencuu/{ma_de_tai}', [DeTaiNghienCuuController::class, 'show'])->name('detainghiencuu.show');
        Route::put('/detainghiencuu/{ma_de_tai}', [DeTaiNghienCuuController::class, 'update'])->name('detainghiencuu.update');
        Route::delete('/detainghiencuu/{ma_de_tai}', [DeTaiNghienCuuController::class, 'destroy'])->name('detainghiencuu.destroy');




        Route::get('/bao-cao-de-tai', [BaoCaoNghienCuuController::class, 'index'])->name('baocaodetai.index');
        Route::post('/bao-cao-de-tai/nhan-xet', [BaoCaoNghienCuuController::class, 'nhanXet'])->name('FormGiangVien.FormBaoCaoNghienCuu.nhanXet');
        Route::post('/bao-cao-de-tai/xu-ly', [BaoCaoNghienCuuController::class, 'xuLy'])->name('FormGiangVien.FormBaoCaoNghienCuu.xuLy');

        
        Route::get('/loi-moi-huong-dan', [LoiMoiHuongDanController::class, 'index'])->name('loimoihuongdan.index');
        Route::post('/loi-moi-huong-dan/xu-ly', [LoiMoiHuongDanController::class, 'xuLy'])->name('FormGiangVien.FormLoiMoiHuongDan.xuLy');
    });
});
