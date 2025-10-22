<?php

namespace App\Http\Controllers\PhongDaoTao;

use App\Models\Khoa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DeTai;
use App\Models\GiangVien;
use Illuminate\Support\Facades\DB;
use App\Models\HoiDongDanhGia;
use App\Models\LichTrinhBaoVe;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use App\Models\BaoCaoNghienCuu;
use App\Models\TinTuc;
use Illuminate\Support\Facades\Auth;

class PhongDaoTaoController extends Controller
{
    /**
     * 
     * Display a listing of the resource.
     */
    public function truyVanThongTin()
    {
        $deTaiList = DeTai::all(); // GIỮ NGUYÊN CODE CỦA BẠN

        // Tổng số đề tài
        $tongDeTai = $deTaiList->count();

        // Số đề tài theo trạng thái
        $deTaiChoDuyet = $deTaiList->where('trang_thai', 'Chờ duyệt')->count();
        $deTaiDuocDuyet = $deTaiList->where('trang_thai', 'Được duyệt')->count();
        $deTaiHoanThanh = $deTaiList->where('trang_thai', 'Hoàn thành')->count();

        // Số lượng đề tài theo lĩnh vực
        $deTaiTheoLinhVuc = $deTaiList->groupBy('linh_vuc_nc')->map->count();
        $deTaiTheoKhoa = Khoa::leftJoin('giang_vien', 'khoa.ma_khoa', '=', 'giang_vien.ma_khoa')
            ->leftJoin('de_tai', 'giang_vien.ma_gv', '=', 'de_tai.ma_gv')
            ->select('khoa.ten_khoa', DB::raw('COUNT(de_tai.ma_de_tai) as so_luong'))
            ->groupBy('khoa.ten_khoa')
            ->get();

        // Tổng số giảng viên hướng dẫn (đếm giảng viên khác nhau)
        $tongGiangVien = $deTaiList->pluck('ma_gv')->unique()->count();

        // Tổng số sinh viên tham gia
        $tongSinhVien = $deTaiList->sum('so_luong_sv');

        // Thống kê kết quả đề tài
        $deTaiDatCapKhoa = $deTaiList->whereNotNull('ket_qua_khoa')->count();
        $deTaiDatCapTruong = $deTaiList->whereNotNull('ket_qua_truong')->count();
        $diemPhanBienTB = $deTaiList->whereNotNull('diem_phan_bien')->avg('diem_phan_bien');

        // Lấy thông tin lịch trình bảo vệ
        $deTaiTheoDot = LichTrinhBaoVe::select('ngay_bao_ve', DB::raw('count(*) as total'))
            ->groupBy('ngay_bao_ve')
            ->get();

        // Tổng số đề tài báo cáo thành công
        $deTaiBaoCaoThanhCong = DeTai::whereNotNull('diem_phan_bien')
            ->orWhereNotNull('ket_qua_khoa')
            ->orWhereNotNull('ket_qua_truong')
            ->count();

        // Tính tỷ lệ báo cáo thành công (tránh chia cho 0)
        $tyLeBaoCaoThanhCong = $tongDeTai > 0 ? ($deTaiBaoCaoThanhCong / $tongDeTai) * 100 : 0;


        // 🔹 **Lọc danh sách đề tài bảo vệ chỉ lấy ngày lớn hơn hôm nay**
        $deTaiSapBaoVe = LichTrinhBaoVe::join('hoi_dong_danh_gia', 'lich_trinh_bao_ve.ma_hoi_dong', '=', 'hoi_dong_danh_gia.ma_hd')
            ->select('lich_trinh_bao_ve.*', 'hoi_dong_danh_gia.ma_de_tai')
            ->whereDate('lich_trinh_bao_ve.ngay_bao_ve', '>', Carbon::today())
            ->orderBy('lich_trinh_bao_ve.ngay_bao_ve', 'asc')
            ->get();


        // Tổng số hội đồng và giảng viên phản biện
        $tongHoiDong = HoiDongDanhGia::count();
        $tongGiangVienPhanBien = HoiDongDanhGia::sum('so_luong_gv');

        return view('FormPhongDaoTao.FormQuanLyTruyVan.FormXemDanhSachDeTai', compact(
            'deTaiList',
            'tongDeTai',
            'deTaiChoDuyet',
            'deTaiDuocDuyet',
            'deTaiTheoKhoa',
            'deTaiHoanThanh',
            'deTaiTheoLinhVuc',
            'tongGiangVien',
            'tongSinhVien',
            'deTaiDatCapKhoa',
            'deTaiDatCapTruong',
            'diemPhanBienTB',
            'deTaiTheoDot',
            'deTaiBaoCaoThanhCong',
            'tyLeBaoCaoThanhCong',
            'deTaiSapBaoVe',
            'tongHoiDong',
            'tongGiangVienPhanBien'
        ));
    }


    public function capnhatlichtrinhbaove()
    {
        $lichTrinh = LichTrinhBaoVe::join('hoi_dong_danh_gia', 'lich_trinh_bao_ve.ma_hoi_dong', '=', 'hoi_dong_danh_gia.ma_hd')
            ->join('de_tai', 'hoi_dong_danh_gia.ma_de_tai', '=', 'de_tai.ma_de_tai')
            ->select(
                'hoi_dong_danh_gia.ma_hd as ma_hoi_dong', // Sửa lại alias
                'hoi_dong_danh_gia.ma_de_tai',
                'lich_trinh_bao_ve.dia_diem',
                'de_tai.ten_de_tai',
                'lich_trinh_bao_ve.*'
            )
            ->get();

        return view('FormPhongDaoTao.FormQuanLyPhanBien.FormCapNhatLichTrinhBaoVe', compact('lichTrinh'));
    }
    public function updatelichtrinh(Request $request, $id)
    {
        $lichTrinh = LichTrinhBaoVe::findOrFail($id);

        // Kiểm tra nếu dữ liệu bị thiếu
        if (!$request->ngay_gio || !$request->dia_diem) {
            return response()->json(['success' => false, 'message' => 'Dữ liệu không hợp lệ!']);
        }

        // Xử lý ngày và giờ
        $dateTimeParts = explode(" ", $request->ngay_gio); // 🛠 Sửa lỗi "T" thành " "

        if (count($dateTimeParts) < 2) {
            return response()->json(['success' => false, 'message' => 'Định dạng ngày giờ không hợp lệ!']);
        }

        $lichTrinh->ngay_bao_ve = $dateTimeParts[0];
        $lichTrinh->gio_bao_ve = $dateTimeParts[1];
        $lichTrinh->dia_diem = $request->dia_diem;

        $lichTrinh->save();

        return response()->json(['success' => true]);
    }

    public function ghepdoidetaihoidong()
    {
        $deTais = DeTai::all();
        $hoiDongs = HoiDongDanhGia::all();
        return view('FormPhongDaoTao.FormQuanLyPhanBien.FormGhepDoiDeTai-HoiDong', compact('deTais', 'hoiDongs'));
    }
    public function storeghepdoidetai(Request $request)
    {
        Log::info("Dữ liệu nhận từ AJAX:", $request->all());

        if (!isset($request->ghep_doi) || empty($request->ghep_doi)) {
            return response()->json(['success' => false, 'message' => 'Dữ liệu trống!']);
        }

        try {
            foreach ($request->ghep_doi as $ma_de_tai => $ma_hds) {
                foreach ($ma_hds as $ma_hd) {
                    // Kiểm tra xem đề tài đã được ghép với hội đồng này chưa
                    $exists = HoiDongDanhGia::where('ma_de_tai', $ma_de_tai)
                        ->where('ma_hd', $ma_hd)
                        ->exists();

                    if ($exists) {
                        return response()->json([
                            'success' => false,
                            'message' => "Đề tài này đã được ghép đôi!"
                        ]);
                    }

                    // Nếu chưa tồn tại, thêm mới vào CSDL
                    HoiDongDanhGia::create([
                        'ma_hd' => $ma_hd,
                        'ma_de_tai' => $ma_de_tai,
                        'so_luong_gv' => count($ma_hds)
                    ]);
                }
            }

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            Log::error("Lỗi khi lưu dữ liệu: " . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Lỗi khi lưu dữ liệu!']);
        }
    }


    public function xemBaoCao()
    {
        $baocaos = BaoCaoNghienCuu::all();
        return view('FormPhongDaoTao.FormQuanLyBaoCaoNghienCuu.FormXemBaoCao', compact('baocaos'));
    }

    public function showBaoCao($ma_bc)
    {
        // Lấy dữ liệu báo cáo từ database
        $baocao = BaoCaoNghienCuu::find($ma_bc);
        // Kiểm tra nếu không tìm thấy báo cáo
        if (!$baocao) {
            abort(404, 'Báo cáo không tồn tại');
        }
        return view('FormPhongDaoTao.FormQuanLyBaoCaoNghienCuu.FormXemChiTietBaoCao', compact('baocao'));
    }

    public function phanBienVaBaoVe()
    {
        return view('FormPhongDaoTao.FormQuanLyPhanBien.FormBaChucNang');
    }
    public function tintuc()
    {
        $vpk = TinTuc::all();
        return view('FormPhongDaoTao.FormTinTuc.FormTinTuc', compact('vpk'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tieu_de' => 'required|max:255',
            'noi_dung' => 'required',
            // 'duong_dan_tep' => 'nullable|file|max:2048'
        ]);

        // $duongDanTep = null;
        // if ($request->hasFile('duong_dan_tep')) {
        //     $duongDanTep = $request->file('duong_dan_tep')->store('uploads', 'public');
        // }

        TinTuc::create([
            'tieu_de' => $request->tieu_de,
            'noi_dung' => $request->noi_dung,
            'nguoi_dang' => Auth::user()->email,
            // 'duong_dan_tep' => $duongDanTep
        ]);

        return response()->json(['success' => true]);
    }
    public function update(Request $request, $id)
    {
        // Tìm tin tức theo ID
        $tinTuc = TinTuc::find($id);

        if (!$tinTuc) {
            return response()->json(['success' => false, 'message' => 'Tin tức không tồn tại!'], 404);
        }

        // Cập nhật thông tin (ngoại trừ ngày đăng và mã đề tài)
        $tinTuc->tieu_de = $request->input('tieu_de');
        $tinTuc->noi_dung = $request->input('noi_dung');
        $tinTuc->nguoi_dang = $request->input('nguoi_dang');

        if ($tinTuc->save()) {
            return response()->json(['success' => true, 'message' => 'Cập nhật tin tức thành công!']);
        }

        return response()->json(['success' => false, 'message' => 'Cập nhật thất bại!'], 500);
    }
    public function destroy($id)
    {
        // Tìm tin tức theo ID
        $tinTuc = TinTuc::find($id);

        // Kiểm tra tin tức có tồn tại không
        if (!$tinTuc) {
            return response()->json(['success' => false, 'message' => 'Tin tức không tồn tại!'], 404);
        }

        // Xóa tin tức
        if ($tinTuc->delete()) {
            return response()->json(['success' => true, 'message' => 'Xóa tin tức thành công!']);
        }

        return response()->json(['success' => false, 'message' => 'Xóa thất bại!'], 500);
    }

    public function showTinTuc($ma_tin_tuc)
    {
        // Lấy dữ liệu tin tức từ database
        $vpk = TinTuc::find($ma_tin_tuc);
        // Kiểm tra nếu không tìm thấy tin tức
        if (!$vpk) {
            abort(404, 'Tin tức không tồn tại');
        }

        return view('FormPhongDaoTao.FormTinTuc.FormDetailTinTuc', compact('vpk'));
    }
    public function chiaHoiDong()
    {
        return view('FormPhongDaoTao.FormQuanLyPhanBien.FormChiaHoiDong');
    }
    public function chonHoiDong()
    {
        // Lấy danh sách giảng viên từ database
        $giangVien = GiangVien::all();
        // Trả dữ liệu về view
        return view('FormPhongDaoTao.FormQuanLyPhanBien.FormChonHoiDong', compact('giangVien'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function quanlytaikhoan()
    {
        return view('FormPhongDaoTao.FormQuanLyTaiKhoan.Quanlytaikhoan');
    }
    public function luuDeTaiCapTruong(Request $request)
    {
        $deTaiIds = $request->input('deTaiIds');

        if (!$deTaiIds || count($deTaiIds) == 0) {
            return response()->json(['success' => false, 'message' => 'Không có đề tài nào được chọn!']);
        }

        foreach ($deTaiIds as $id) {
            // Lấy kết quả cấp khoa
            $deTai = DeTai::where('ma_de_tai', $id)->where('ket_qua_khoa', 'Giải Nhất')->first();
            if ($deTai) {
                // Cập nhật kết quả cấp trường bằng kết quả cấp khoa
                $deTai->ket_qua_truong = $deTai->ket_qua_khoa ?? 'Không có giải';
                if ($deTai->trang_thai === 'Chờ duyệt') {
                    $deTai->trang_thai = 'Được duyệt';
                }
                $deTai->save();
            }
        }

        return response()->json(['success' => true, 'message' => 'Cập nhật thành công!']);
    }
    public function capnhatketquacaptruong()
    {
        $deTaiList = DeTai::where('trang_thai', 'Được duyệt')->get();

        // Trả về view và truyền danh sách đề tài
        return view('FormPhongDaoTao.FormQuanLyCapNhatKetQua.FormCapNhatKetQuaDeTaiCapTruong', compact('deTaiList'));
    }
    public function capNhatDiemCapTruong(Request $request)
    {
        $request->validate([
            'ma_de_tai' => 'required|exists:de_tai,ma_de_tai',
            'ket_qua_truong' => 'required|string|in:Giải Nhất,Giải Nhì,Giải Ba,Không có giải',
        ]);

        $deTai = DeTai::find($request->ma_de_tai);
        if (!$deTai) {
            return response()->json(['success' => false, 'message' => 'Đề tài không tồn tại'], 404);
        }

        $deTai->ket_qua_truong = $request->ket_qua_truong;
        $deTai->save();

        return response()->json(['success' => true, 'message' => 'Cập nhật thành công']);
    }
}