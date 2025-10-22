<?php

namespace App\Http\Controllers\TaiKhoan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TaiKhoan;
use Illuminate\Support\Facades\Hash;
use App\Models\SinhVien;
use App\Models\GiangVien;
use App\Models\PhongDaoTao;
use App\Models\VanPhongKhoa;
use Illuminate\Support\Facades\Log;

class TaiKhoanController extends Controller
{
    // 1️⃣ Hiển thị danh sách tài khoản
    public function index()
    {
        $taiKhoans = TaiKhoan::with(['giangVien'])->get();

        foreach ($taiKhoans as $tk) {
            // Lấy tên đăng nhập từ bảng tương ứng với email
            $tk->ten_dang_nhap = SinhVien::where('email', $tk->email)->value('ten_sv') ??
                GiangVien::where('email', $tk->email)->value('ten_gv') ??
                PhongDaoTao::where('email', $tk->email)->value('ten_nv') ?? 'Không xác định';
            VanPhongKhoa::where('email', $tk->email)->value('ten_nv') ?? 'Không xác định';
        }
        return view('FormPhongDaoTao.FormQuanLyTaiKhoan.Quanlytaikhoan', compact('taiKhoans'));
    }

    // 2️⃣ Thêm tài khoản mới
    public function store(Request $request)
    {
        try {
            Log::info("Nhận dữ liệu:", $request->all()); // Ghi log request

            // Validate dữ liệu đầu vào
            $validatedData = $request->validate([
                'email' => 'required|email|unique:tai_khoan,email',
                'mat_khau' => 'required|min:6',
                'vai_tro' => 'required'
            ]);

            // Lưu vào database
            TaiKhoan::create([
                'email' => $validatedData['email'],
                'mat_khau' => Hash::make($validatedData['mat_khau']), // Băm mật khẩu
                'vai_tro' => $validatedData['vai_tro']
            ]);

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            Log::error("Lỗi khi lưu tài khoản: " . $e->getMessage()); // Ghi log lỗi
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    // 3️⃣ Sửa tài khoản
    public function edit($email)
    {
        $taiKhoan = TaiKhoan::where('email', $email)->first();

        if (!$taiKhoan) {
            return response()->json(['error' => 'Không tìm thấy tài khoản'], 404);
        }

        return response()->json([
            'email' => $taiKhoan->email,
            'mat_khau' => $taiKhoan->mat_khau,
            'vai_tro' => $taiKhoan->vai_tro
        ]);
    }



    // Cập nhật tài khoản
    public function update(Request $request)
    {
        $tk = TaiKhoan::where('email', $request->email)->first();

        if ($tk) {
            $tk->mat_khau = Hash::make($request->mat_khau); // Mã hóa mật khẩu
            $tk->vai_tro = $request->vai_tro;
            $tk->save();

            return response()->json(['success' => true]);
        } else {
            return response()->json(['error' => 'Cập nhật thất bại'], 500);
        }
    }

    // 4️⃣ Xóa tài khoản
    public function destroy($email)
    {
        $taiKhoan = TaiKhoan::where('email', $email)->first();

        if ($taiKhoan) {
            $taiKhoan->delete();
            return redirect()->route('phongdaotao.quanlytaikhoan')->with('delete_success', true);
        }

        return redirect()->route('phongdaotao.quanlytaikhoan')->with('delete_failed', true);
    }

    public function phanQuyen(Request $request)
    {
        $updates = $request->input('updates');

        foreach ($updates as $update) {
            $taikhoan = TaiKhoan::where('email', $update['email'])->first();
            if ($taikhoan) {
                $taikhoan->vai_tro = $update['vai_tro'];
                $taikhoan->save();
            }
        }

        return response()->json(['success' => true, 'message' => 'Phân quyền thành công!']);
    }
}
