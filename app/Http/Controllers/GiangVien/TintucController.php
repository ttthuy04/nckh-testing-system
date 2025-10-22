<?php

namespace App\Http\Controllers\GiangVien;

use Illuminate\Http\Request;
use App\Models\TinTuc;

class TintucController
{
    // Hiển thị danh sách tin tức
    public function index()
    {
        $tintucs = TinTuc::all();
        return view('FormGiangVien.FormTinTuc.index', compact('tintucs'));
    }

    // Hiển thị form thêm tin tức
    public function create()
    {
    }

    public function store(Request $request)
    {
        $request->validate([
            'tieu_de' => 'required|max:255',
            'noi_dung' => 'required',
            'nguoi_dang' => 'required|email',
        ]);

        Tintuc::create([
            'tieu_de' => $request->tieu_de,
            'noi_dung' => $request->noi_dung,
            'nguoi_dang' => $request->nguoi_dang,
            'ngay_dang' => now(),
        ]);

        return redirect()->route('tintuc.index')->with('success', 'Tin tức đã được thêm!');
    }

    // Hiển thị chi tiết một tin tức
    public function show($id)
    {
        $tintuc = Tintuc::findOrFail($id);
        return view('FormGiangVien.FormTinTuc.show', compact('tintuc'));
    }

    // Hiển thị form chỉnh sửa tin tức
    public function edit($id)
    {
        $tintuc = Tintuc::findOrFail($id);
        return view('tintuc.edit', compact('tintuc'));
    }

    // Xử lý cập nhật tin tức
    public function update(Request $request, $id)
    {
        $request->validate([
            'tieu_de' => 'required|max:255',
            'noi_dung' => 'required',
        ]);

        $tintuc = Tintuc::findOrFail($id);
        $tintuc->update($request->all());

        return redirect()->route('tintuc.index')->with('success', 'Tin tức đã được cập nhật!');
    }

    // Xóa tin tức
    public function destroy($id)
    {
        $tintuc = Tintuc::findOrFail($id);
        $tintuc->delete();

        return redirect()->route('tintuc.index')->with('success', 'Tin tức đã bị xóa!');
    }
}

