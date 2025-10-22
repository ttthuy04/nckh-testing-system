<?php

namespace App\Http\Controllers\SinhVien; // Đúng với đường dẫn file
use App\Http\Controllers\Controller; // Thêm dòng này
use App\Models\Detai;
use Illuminate\Http\Request;
use App\Models\BaoCaoNghienCuu;
use Illuminate\Support\Facades\Auth;
class DetainghiencuuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sinhVien = Auth::user()->sinhVien; // Lấy thông tin sinh viên từ tài khoản đăng nhập

        if (!$sinhVien) {
            return redirect()->route('login')->with('error', 'Bạn chưa đăng nhập hoặc không phải sinh viên.');
        }

        // Lấy danh sách đề tài mà sinh viên này đã đăng ký
        $deTais = $sinhVien->deTai()
            ->with('baoCao')
            ->get();

        return view('FormSinhVien.detai.index', compact('deTais'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $sinhVien = Auth::user()->sinhVien;
        
        // Kiểm tra xem đề tài có thuộc về sinh viên này không
        $deTai = $sinhVien->deTai()
            ->with('baoCao')
            ->where('ma_de_tai', $id)
            ->firstOrFail();

        return view('FormSinhVien.detai.show', compact('deTai'));
    }
    public function storeBaoCao(Request $request)
{
    $request->validate([
        'ma_de_tai' => 'required|exists:de_tai,ma_de_tai',
        'tep_bao_cao' => 'required|file|mimes:pdf,doc,docx|max:10240'
    ]);

    $sinhVien = Auth::user()->sinhVien;
    
    // Get the existing report
    $baoCao = BaoCaoNghienCuu::where('ma_de_tai', $request->ma_de_tai)->first();

    if (!$baoCao) {
        return redirect()->back()->with('error', 'Không tìm thấy báo cáo để cập nhật');
    }

    // Handle file upload
    $file = $request->file('tep_bao_cao');
    $fileName = time() . '_' . $file->getClientOriginalName();
    $filePath = $file->storeAs('bao-cao', $fileName, 'public');

    // Update only the file path
    $baoCao->update([
        'duong_dan_tep' => $filePath,
        'ngay_tao' => now()
    ]);

    return redirect()->route('FormSinhVien.detai.index')
        ->with('success', 'Nộp báo cáo thành công');
}

}
