<?php
 
 namespace App\Http\Controllers\GiangVien;
 
 use Illuminate\Http\Request;
 use App\Models\LoiMoiHuongDan;
 use App\Models\SinhVien;
 use App\Models\GiangVien;
 use App\Models\DeTai;
 use Illuminate\Support\Facades\Session;
 
 class LoiMoiHuongDanController 
 {
     /**
      * Hiển thị danh sách lời mời hướng dẫn.
      */
     public function index()
     {
         $loimois = LoiMoiHuongDan::all();
         return view('FormGiangVien.FormLoiMoiHuongDan.index', compact('loimois'));
     }
 
     /**
      * Xử lý chấp nhận hoặc từ chối lời mời hướng dẫn.
      */
     public function xuLy(Request $request)
     {
         $loimoi = LoiMoiHuongDan::find($request->loimoi_id);
         
         if (!$loimoi) {
             return redirect()->back()->with('error', 'Lời mời không tồn tại!');
         }
 
         if ($request->action == 'accept') {
             $loimoi->trang_thai = 'Chấp nhận';
         } else {
             $loimoi->trang_thai = 'Từ chối';
         }
 
         $loimoi->save();
         return redirect()->route('loimoihuongdan.index');
     }
 }
