<?php

namespace App\Http\Controllers\SinhVien;

use App\Http\Controllers\Controller; // Thêm dòng này
use App\Models\LoiMoiHuongDan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\GiangVien;
class LoimoiSinhVienController extends Controller
{
    public function index()
    {
        // Kiểm tra người dùng đã đăng nhập 
        if (Auth::check()) {
            // Lấy tài khoản người dùng đang đăng nhập
            $user = Auth::user();

            // Lấy thông tin sinh viên liên quan
            $sinhVien = $user->sinhVien;

            // Nếu không tìm thấy sinh viên, trả về thông báo lỗi
            if (!$sinhVien) {
                return redirect()->route('login')->with('error', 'Không tìm thấy thông tin sinh viên.');
            }

            // Lấy danh sách lời mời của sinh viên theo ma_sv
            $loiMois = LoiMoiHuongDan::where('ma_sv', $sinhVien->ma_sv)->get();

            return view('FormSinhVien.loimoi.index', compact('loiMois'));
        } else {
            // Nếu chưa đăng nhập, yêu cầu người dùng đăng nhập
            return redirect()->route('login')->with('error', 'Vui lòng đăng nhập.');
        }
    }
    

    public function thuHoi($id)
    {
        // Tìm lời mời theo ID
        $loiMoi = LoiMoiHuongDan::find($id);

        // Kiểm tra nếu lời mời không tồn tại
        if (!$loiMoi) {
            return back()->with('error', 'Lời mời không tồn tại.');
        }

        // Xóa lời mời
        $loiMoi->delete();

        return back()->with('success', 'Lời mời đã được thu hồi.');
    }
}
