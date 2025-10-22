<?php

namespace App\Http\Controllers\GiangVien;

use Illuminate\Http\Request;
use App\Models\DeTai;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\GiangVien;
use Illuminate\Support\Facades\Log; // Thêm dòng này

use Illuminate\Support\Facades\DB;


class DeTaiNghienCuuController 
{
    /**
     * Display a listing of the research topics.
     */
    public function index()
    {
        $giangVien = Auth::user()->giangVien;

        if (!$giangVien) {
            return redirect()->back()->with('error', 'Không tìm thấy thông tin giảng viên.');
        }
    
        // Giả sử bạn có Model DeTai đại diện cho bảng 'de_tai'
        $deTais = DeTai::where('ma_gv', $giangVien->ma_gv)
                    ->select('ma_de_tai', 'ten_de_tai','trang_thai','mo_ta', 'ma_gv', 'ngay_dang_ky', 'so_luong_sv', 'linh_vuc_nc', 'diem_phan_bien', 'ket_qua_khoa', 'ket_qua_truong')
                    ->get();
        if ($deTais->isEmpty()) {
                        return view('FormGiangVien.FormQuanLyDeTai.index')->with('message', 'Không có đề tài nào để xem.');
                }
    
        return view('FormGiangVien.FormQuanLyDeTai.index', compact('deTais'));
    }

    public function store(Request $request)
{

    $validator = Validator::make($request->all(), [
        'ten_de_tai' => 'required|string|max:255',
        'mo_ta' => 'required|string',
        'trang_thai' => 'required|in:Chờ duyệt,Được duyệt,Hoàn thành',
        'linh_vuc_nc' => 'required|string|max:255',
        'so_luong_sv' => 'required|integer|min:1|max:5',
        'ma_gv' => 'required|string|exists:giang_vien,ma_gv',
    ]);

    // if ($validator->fails()) {
    //     return redirect()->back()
    //         ->withErrors($validator)
    //         ->withInput();
    // }
    
 // Giả sử bạn đã lưu mã giảng viên trong bảng users
    $deTai = new DeTai();
    $deTai->ten_de_tai = $request->input('ten_de_tai');
    $deTai->mo_ta = $request->input('mo_ta');
    $deTai->trang_thai = $request->input('trang_thai');
    $deTai->ma_gv = Auth::user()->giangVien->ma_gv;  
    $deTai->linh_vuc_nc = $request->input('linh_vuc_nc');
    $deTai->so_luong_sv = $request->input('so_luong_sv');
    $deTai->save();

    return redirect()->route('detainghiencuu.index');
}
    public function show($ma_de_tai)
    {
        $deTai = DeTai::findOrFail($ma_de_tai);
        return response()->json($deTai);
    }

    /**
     * Update the specified research topic.
     */
    public function update(Request $request, $ma_de_tai)
{
    $validator = Validator::make($request->all(), [
        'ten_de_tai' => 'required|string|max:255',
        'mo_ta' => 'required|string',
        'trang_thai' => 'required|in:Chờ duyệt,Được duyệt,Hoàn thành',
        'linh_vuc_nc' => 'required|string|max:255',
        'so_luong_sv' => 'required|integer|min:1|max:5',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $deTai = DeTai::findOrFail($ma_de_tai);
    $deTai->update($request->all());

    return redirect()->route('detainghiencuu.index');
}
    /**
     * Remove the specified research topic.
     */
    public function destroy($ma_de_tai)
    {
        $deTai = DeTai::findOrFail($ma_de_tai);
        
        // Kiểm tra quyền xóa
        if (Auth::user()->giangVien->ma_gv !== $deTai->ma_gv) {
            return redirect()->back()->with('error', 'Bạn không có quyền xóa đề tài này.');
        }

        $deTai->delete();
        return redirect()->route('detainghiencuu.index');
    }
}
