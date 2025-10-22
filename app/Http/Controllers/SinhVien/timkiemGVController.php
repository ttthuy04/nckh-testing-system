<?php

namespace App\Http\Controllers\SinhVien;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GiangVien;
use App\Models\LoiMoiHuongDan;
use App\Models\DeTai;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
class TimKiemGVController extends Controller
{
    public function index(Request $request)
    {
        $fields = GiangVien::distinct()->pluck('linh_vuc_nc');
        $query = GiangVien::with('deTais');

        // Process search if form is submitted
        if ($request->has('submitted')) {
            if (empty($request->search) && empty($request->field)) {
                // If search is submitted with empty fields, show modal
                $giangVien = $query->get();
                return view('FormSinhVien.searchgv.index', compact('giangVien', 'fields'))
                    ->with('showEmptySearchModal', true);
            }

            if ($request->has('field') && !empty($request->field)) {
                $query->where('linh_vuc_nc', $request->field);
            }

            if ($request->has('search') && !empty($request->search)) {
                $search = $request->search;
                $query->where(function($q) use ($search) {
                    $q->where('ten_gv', 'like', "%{$search}%")
                      ->orWhere('ma_gv', 'like', "%{$search}%");
                });
            }
        }

        $giangVien = $query->get();
        
        if ($request->has('submitted') && $giangVien->isEmpty()) {
            return back()->with('error', 'Không có giảng viên phù hợp với tiêu chí cần tìm');
        }

        return view('FormSinhVien.searchgv.index', compact('giangVien', 'fields'));
    }

    public function show($ma_gv)
    {
        $giangVien = GiangVien::with('deTais')->where('ma_gv', $ma_gv)->firstOrFail();
        return view('FormSinhVien.searchgv.show', compact('giangVien'));
    }

    public function storeLoimoi(Request $request)
{
    try {
        DB::beginTransaction();

        $validator = Validator::make($request->all(), [
            'ma_gv' => 'required|exists:giang_vien,ma_gv',
            'ma_de_tai' => 'required_without:ten_de_tai|exists:de_tai,ma_de_tai',
            'ten_de_tai' => 'required_without:ma_de_tai|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Check if it's a new project
        if ($request->has('ten_de_tai')) {
            $deTai = DeTai::create([
                'ten_de_tai' => $request->ten_de_tai,
                'mo_ta' => 'Chưa có mô tả',
                'trang_thai' => 'Chờ duyệt',
                'ma_gv' => $request->ma_gv,
                'ngay_dang_ky' => now(),
                'so_luong_sv' => 1,
                'linh_vuc_nc' => $request->linh_vuc_nc ?? 'Chưa xác định'
            ]);

            $ma_de_tai = $deTai->ma_de_tai;
        } else {
            $ma_de_tai = $request->ma_de_tai;
        }

        // Create invitation with explicit status
        LoiMoiHuongDan::create([
            'ma_sv' => Auth::user()->sinhVien->ma_sv,
            'ma_gv' => $request->ma_gv,
            'ma_de_tai' => $ma_de_tai,
            'trang_thai' => 'Chờ duyệt',
            'thoi_gian_gui' => now()
        ]);

        DB::commit();
        return redirect()->back()
            ->with('success', 'Gửi lời mời thành công!');

    } catch (\Exception $e) {
        DB::rollBack();
        return redirect()->back()
            ->with('error', 'Có lỗi xảy ra khi gửi lời mời: ' . $e->getMessage());
    }
}
}
