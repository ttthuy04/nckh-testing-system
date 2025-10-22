<?php

namespace App\Http\Controllers\SinhVien;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BaoCaoNghienCuu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BaoCaoController extends Controller
{
    // Hiển thị danh sách báo cáo
    public function index()
    {
        $baoCaoList = BaoCaoNghienCuu::with('deTai', 'nguoiTao')->get();
        return view('FormSinhVien.detai.index', compact('baoCaoList'));
    }

    // Hiển thị form nộp báo cáo
    public function create()
    {
        return view('baocao.create');
    }

    // Xử lý nộp báo cáo
    public function store(Request $request)
{
    $request->validate([
        'tieu_de' => 'required|string|max:255',
        'tep_bao_cao' => 'required|mimes:pdf,doc,docx|max:2048',
    ]);

    if ($request->hasFile('tep_bao_cao')) {
        $file = $request->file('tep_bao_cao');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('bao_cao', $fileName, 'public');

        BaoCaoNghienCuu::create([
            'tieu_de' => $request->tieu_de,  // Đảm bảo có giá trị cho 'tieu_de'
            'user_id' => Auth::id(),
            'file_path' => $filePath,
        ]);

        return redirect()->back()->with('success', 'Nộp báo cáo thành công!');
    }

    return redirect()->back()->withErrors(['Nộp báo cáo thất bại.']);
}


}
