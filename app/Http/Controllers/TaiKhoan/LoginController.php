<?php

namespace App\Http\Controllers\TaiKhoan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\TaiKhoan;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => [
                'required',
                'min:8',
                'regex:/[a-z]/',      // phải có chữ thường
                'regex:/[A-Z]/',      // phải có chữ hoa
                'regex:/[0-9]/',      // phải có số
                'regex:/[@$!%*#?&]/', // phải có ký tự đặc biệt
            ],
        ], [
            'email.email' => 'Tên đăng nhập hoặc mật khẩu không chính xác!',
            'email.required' => 'Không được để trống tài khoản!',
            'password.required' => 'Không được để trống mật khẩu!',
            'password.password' => 'Tên đăng nhập hoặc mật khẩu không chính xác!',
            'password.min' => 'Yêu cầu nhập mật khẩu có 8 ký tự (gồm số, chữ hoa, chữ thường và ký hiệu)',
            'password.regex' => 'Yêu cầu nhập mật khẩu có 8 ký tự (gồm số, chữ hoa, chữ thường và ký hiệu)',
        ]);

        // Kiểm tra đăng nhập
        if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
            $user = Auth::user();
            // Kiểm tra vai trò và chuyển hướng phù hợp
            if ($user->vai_tro === 'Sinh viên') {
                return redirect()->route('FormSinhVien.student.index');
            } elseif ($user->vai_tro === 'Giảng viên') {
                return redirect()->route('tintuc.index');
            } elseif ($user->vai_tro === 'Admin') {
                return redirect()->route('vanphongkhoa.tintuc');
            } elseif ($user->vai_tro === 'Nhân viên') {
                return redirect()->route('phongdaotao.tintuc');
            }
            // Trường hợp không xác định vai trò
        }

        // Nếu đăng nhập thất bại, hiển thị lỗi
        return back()->withErrors(['email' => 'Tài khoản hoặc mật khẩu không đúng!'])->withInput();
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/dang-nhap')->with('success', 'Bạn đã đăng xuất thành công!');
    }
    public function showChangePasswordForm() {}

    // Xử lý đổi mật khẩu
    public function changePassword(Request $request)
    {
        // Kiểm tra dữ liệu nhập vào
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/',
            'confirm_password' => 'required|same:new_password',
        ]);

        // Lấy tài khoản của người dùng hiện tại
        $taiKhoan = TaiKhoan::where('email', Auth::user()->email)->first();

        // Kiểm tra mật khẩu cũ
        if (!Hash::check($request->current_password, $taiKhoan->mat_khau)) {
            return back()->with('error', 'Mật khẩu cũ không đúng.');
        }

        // Cập nhật mật khẩu mới
        $taiKhoan->mat_khau = Hash::make($request->new_password);
        $taiKhoan->save();

        return back()->with('success', 'Đổi mật khẩu thành công!');
    }
}
