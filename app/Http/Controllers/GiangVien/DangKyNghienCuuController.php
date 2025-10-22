<?php

namespace App\Http\Controllers\GiangVien;
use App\Models\GiangVien;
use App\Models\DeTai;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DangKyNghienCuuController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $giangviens = GiangVien::all();
        return view('FormGiangVien.FormDangKyDeTai.index', compact('giangviens'));
    }

    public function DangKyDinhHuongNghienCuu(Request $request)
{
    $giangVien = Auth::user()->giangVien;
    $validated = $request->validate([
        'research_orientation' => 'required|string',
    ]);

    try {
        // Lấy mã giảng viên từ user đang đăng nhập
        $giangVien->dinh_huong_nc = $validated['research_orientation'];
        $giangVien->save();
        
        return redirect()->back()->with('success', 'Đăng ký định hướng nghiên cứu thành công!');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Có lỗi xảy ra: ' . $e->getMessage());
    }
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    /**
 * Store a newly created resource in storage.
 */
public function store(Request $request)
{
    $giangVien = Auth::user()->giangVien;
    
    $validated = $request->validate([
        'tenDeTai' => 'required|string|max:255',
        'moTa' => 'required|string',
        'linhVuc' => 'required|string',
        'soLuongSV' => 'required|integer|min:1|max:5',
    ]);

    try {
        // Tạo bản ghi DeTai mới
        $deTai = new DeTai();
        $deTai->ten_de_tai = $validated['tenDeTai'];
        $deTai->mo_ta = $validated['moTa'];
        $deTai->linh_vuc_nc = $validated['linhVuc'];
        $deTai->so_luong_sv = $validated['soLuongSV'];
        $deTai->ma_gv = $giangVien->ma_gv; // Lấy mã giảng viên từ user đã đăng nhập
        $deTai->ngay_dang_ky = now(); // Ngày giờ hiện tại
        $deTai->trang_thai = 'Chờ duyệt'; // Trạng thái mặc định
        $deTai->save();
        
        return redirect()->back()->with('success', 'Đăng ký đề tài thành công');

    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Có lỗi xảy ra: ' . $e->getMessage());
    }
}
//
    /**
     * Display the specified resource.
     */
    public function show()
{
    // Lấy mã giảng viên của người dùng đang đăng nhập
    $giangVien = Auth::user()->giangVien;
    
    $deTaiList = DB::table('de_tai')
        ->where('trang_thai', 'Chờ duyệt')
        ->where('ma_gv', $giangVien->ma_gv) // Thêm điều kiện để lọc theo giảng viên đăng nhập
        ->select('ma_de_tai', 'ten_de_tai')
        ->get();
    
    return view('FormGiangVien.FormDangKyDeTai.show', [
        'deTaiList' => $deTaiList
    ]);
}

    public function approve(Request $request)
    {
        // Xác thực request
        $request->validate([
            'selected_detai' => 'sometimes|array',
            'selected_detai.*' => 'exists:de_tai,ma_de_tai',
        ]);

        // Lấy các ID đề tài đã chọn
        $selectedDeTai = $request->input('selected_detai', []);

        if (count($selectedDeTai) > 0) {
            // Cập nhật trạng thái của các đề tài đã chọn thành "Được duyệt"
            DB::table('de_tai')
                ->whereIn('ma_de_tai', $selectedDeTai)
                ->update(['trang_thai' => 'Được duyệt']);

            return redirect()->back()->with('success', 'Đã nộp đề tài thành công');
        }

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
