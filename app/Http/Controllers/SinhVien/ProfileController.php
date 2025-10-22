<?php

namespace App\Http\Controllers\SinhVien;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\SinhVien;
use App\Models\TaiKhoan;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function updateProfile(Request $request)
    {
        try {
            DB::beginTransaction();

            $validator = Validator::make($request->all(), [
                'ten_sv' => [
                'required',
                'string',
                'max:255',
                'regex:/^[\p{L}\s]+$/u' // Chỉ cho phép chữ cái và khoảng trắng
            ],
                'lop' => 'required|string|max:50',
                'gioi_tinh' => 'required|in:Nam,Nữ',
                'nam_sinh' => 'required|integer|min:1900|max:'.(date('Y')-16),
                'ma_khoa' => 'required|exists:khoa,ma_khoa',
                'email' => 'required|email|max:255'
        ],[
                'ten_sv.required' => 'Vui lòng nhập họ tên',
                'ten_sv.regex' => 'Họ tên không được chứa ký tự đặc biệt hoặc số',
                'ten_sv.max' => 'Họ tên không được vượt quá 255 ký tự',
                
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $sinhVien = Auth::user()->sinhVien;
            $oldEmail = $sinhVien->email;
            $newEmail = $request->email;

            // Cập nhật thông tin sinh viên
            $sinhVien->update([
                'ten_sv' => $request->ten_sv,
                'lop' => $request->lop,
                'gioi_tinh' => $request->gioi_tinh,
                'nam_sinh' => $request->nam_sinh,
                'ma_khoa' => $request->ma_khoa,
                'email' => $newEmail
            ]);

            // Nếu email thay đổi, cập nhật cả trong bảng tai_khoan
            if ($oldEmail !== $newEmail) {
                $taiKhoan = TaiKhoan::find($oldEmail);
                if ($taiKhoan) {
                    // Tạo tài khoản mới với email mới
                    $newTaiKhoan = TaiKhoan::create([
                        'email' => $newEmail,
                        'mat_khau' => $taiKhoan->mat_khau,
                        'vai_tro' => $taiKhoan->vai_tro
                    ]);
                    
                    // Xóa tài khoản cũ
                    $taiKhoan->delete();
                    
                    // Đăng nhập lại với tài khoản mới
                    Auth::login($newTaiKhoan);
                }
            }

            DB::commit();
            return redirect()->back()->with('success', 'Cập nhật thành công!');

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()
                ->with('error', 'Có lỗi xảy ra: ' . $e->getMessage())
                ->withInput();
        }
    }
}
