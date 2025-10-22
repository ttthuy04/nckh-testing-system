<?php

namespace App\Http\Controllers\GiangVien;

use Illuminate\Http\Request;
use App\Models\BaoCaoNghienCuu;
use App\Models\NhanXetBaoCao;

class BaoCaoNghienCuuController 
{
    // Hiển thị danh sách báo cáo
    public function index()
    {
        $baocaos = BaoCaoNghienCuu::all();
        if ($baocaos->isEmpty()) {
            return view('FormGiangVien.FormQuanLyBaoCao.index')->with('message', 'Không có báo cáo nào để xem.');
    }
        return view('FormGiangVien.FormQuanLyBaoCao.index', compact('baocaos'));
    }

    // Xử lý duyệt báo cáo
    public function xuLy(Request $request)
    {
        
        $baocao = BaoCaoNghienCuu::findOrFail($request->baocao_id);

        if ($request->action == 'accept') {
            $baocao->update(['trang_thai' => 'Được duyệt']);
        } else {
            $baocao->update(['trang_thai' => 'Bị từ chối']);
        }

        $baocao->save();
        return redirect()->route('baocaodetai.index');
    }

    // Xử lý nhận xét báo cáo
    public function nhanXet(Request $request)
    {
        $request->validate([
            'ma_bc' => 'required|exists:bao_cao_nghien_cuu,ma_bc',
            'noi_dung' => 'nullable|string|max:1000'
        ]);

        $nhanXet = NhanXetBaoCao::updateOrCreate(
            ['ma_bc' => $request->ma_bc],
            ['noi_dung' => $request->noi_dung]
        );

        return redirect()->back()->with('success', 'Nhận xét đã được lưu.');
    }

}
