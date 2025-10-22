@extends('layouts.layout2')

@section('sidebar')
    <div class="menu-item ">
        <a href="{{route('vanphongkhoa.tintuc')}}">
            <img src="{{ asset('images/Commercial.png') }}" alt="News Icon" class="sidebar-icon" />
            <span>Tin tức</span>
        </a>
    </div>
    <div class="menu-item">
        <a href="{{route('vanphongkhoa.xembaocao')}}">
            <img src="{{ asset('images/School Director.png') }}" alt="Research Icon" class="sidebar-icon" />
            <span>Báo cáo đề tài</span>
        </a>
    </div>
    <div class="menu-item active ">
        <a href="{{ route('vanphongkhoa.phanbienvabaove')}}">
            <img src="{{ asset('images/carbon_result.png') }}" alt="Register Icon" class="sidebar-icon" />
            <span>Phản biện & bảo vệ</span>
        </a>
    </div>
    <div class="menu-item">
        <a href="">
            <img src="{{ asset('images/New Document.png') }}" alt="Report Icon" class="sidebar-icon" />
            <span>Cập nhật kết quả</span>
        </a>
    </div>
    <div class="menu-item">
        <a href="">
            <img src="{{ asset('images/mdi_court-hammer.png') }}" alt="Invitation Icon" class="sidebar-icon" />
            <span>Truy vấn thông tin</span>
        </a>
    </div>
@endsection
@section('content')
<style>


/* Toàn bộ giao diện */


/* Tiêu đề */
h1 {
    color: #17488C;
}

h2 {
    color: #17488C;
    margin-top: 40px;
}

/* Chọn số lượng hội đồng */
select {
    padding: 10px;
    border: 2px solid #1E3A8A;
    border-radius: 8px;
    font-size: 16px;
    background-color: rgba(81, 131, 202, 0.60);
    cursor: pointer;
    transition: 0.3s ease-in-out;
}

select:hover {
    border-color: #2563EB;
}

/* Bảng danh sách giảng viên */
table {
    width: 100%;
    border-collapse: collapse;
    background-color: #EFF6FF;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

/* Header bảng */
thead tr {
    background-color: rgba(37, 82, 147, 0.87);
    color: white;
}

/* Ô trong bảng */
th,
td {
    padding: 12px;
    border: 1px solid #A7C7E7;
    text-align: center;
    background: rgba(81, 131, 202, 0.60);
}

/* Hiệu ứng hover trên từng dòng */
tbody tr:hover {
    background-color: #BFDBFE;
    transition: 0.3s;
}

/* Checkbox */
input[type="checkbox"] {
    width: 20px;
    height: 20px;
    accent-color: #1E3A8A;
    cursor: pointer;
}

/* Nút Tiếp theo */
button {
    background-color: rgba(81, 131, 202, 0.60);
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 8px;
    transition: 0.3s ease-in-out;
}

button:hover {
    background-color: #1D4ED8;
    transform: scale(1.05);
}

/* Link trong nút */
button a {
    text-decoration: none;
    color: #17488C;
    font-weight: bold;
    text-align: center;
}

.flex.justify-end {
    display: flex;
    justify-content: flex-end;
    margin-top: 40px;
}

body {
    background-color: #E7F5FF;
}
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="flex-1 p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-blue-900">Chọn số lượng hội đồng</h1>
        <div class="flex items-center">
            <i class="fas fa-user-circle text-xl text-blue-900 mr-2"></i>
            <i class="fas fa-caret-down text-blue-900 ml-2"></i>
        </div>
    </div>

    <div class="mb-6">
        <select class="p-2 border border-blue-900 rounded">
            @for ($i = 1; $i <= 6; $i++) <option value="{{ $i }}">{{ $i }}</option>
                @endfor
        </select>
    </div>

    <h2 class="text-4xl font-bold text-blue-900 mb-4">Chọn giảng viên phản biện</h2>

    <table class="w-full bg-blue-200 text-blue-900">
        <thead>
            <tr class="bg-blue-300">
                <th class="p-2 border border-blue-400 text-center">Mã giảng viên</th>
                <th class="p-2 border border-blue-400 text-center">Tên giảng viên</th>
                <th class="p-2 border border-blue-400 text-center">Lĩnh vực nghiên cứu</th>
                <th class="p-2 border border-blue-400 text-center">Chọn</th>

            </tr>
        </thead>
        <tbody>
            @foreach($giangVien as $gv)
            <tr>
                <td class="p-2 border border-blue-400"
                    style="color: #255293; font-family: Inter; font-size: 24px; font-style: normal; font-weight: 600; line-height: normal;">
                    {{ $gv->ma_gv }}
                </td>

                <td class="p-2 border border-blue-400">
                    <!-- Khi nhấn vào tên giảng viên, hiển thị modal -->
                    <a href="#" data-bs-toggle="modal" data-bs-target="#GVchitietModal{{ $gv->ma_gv }}"
                        class="hover:underline"
                        style="color: #255293; font-family: Inter; font-size: 24px; font-style: normal; font-weight: 600; line-height: normal; text-decoration: none;">
                        {{ $gv->ten_gv }}
                    </a>



                </td>
                <td class="p-2 border border-blue-400"
                    style="color: #255293; font-family: Inter; font-size: 24px; font-style: normal; font-weight: 600; line-height: normal;">
                    {{ $gv->linh_vuc_nc }}
                </td>

                <td class="p-2 border border-blue-400 text-center">
                    <input type="checkbox" name="chon_gv[]" value="{{ $gv->ma_gv }}" />
                </td>
            </tr>

            <!-- Modal hiển thị thông tin giảng viên -->
            <div class="modal fade" id="GVchitietModal{{ $gv->ma_gv }}" tabindex="-1"
                aria-labelledby="GVchitietModalLabel{{ $gv->ma_gv }}" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content" style="background-color: #E7F5FF; border-radius: 0;">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-2 d-flex justify-content-start align-items-start">
                                    <div
                                        style="width: 130px; height: 160px; background-color: rgba(81, 131, 202, 0.6); 
                                            display: flex; justify-content: center; align-items: center; border-radius: 8px;">
                                        <img src="{{ asset('img/User02.png') }}" class="img-fluid" width="100"
                                            height="100" style="border-radius: 45%;">
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="row g-0">
                                        <div class="col-md-3 fw-bold">Họ và tên:</div>
                                        <div class="col-md-9">{{ $gv->ten_gv }}</div>
                                    </div>
                                    <div class="row g-0">
                                        <div class="col-md-3 fw-bold">Mã giảng viên:</div>
                                        <div class="col-md-3">{{ $gv->ma_gv }}</div>
                                        <div class="col-md-2 fw-bold">Mã khoa:</div>
                                        <div class="col-md-4">{{ $gv->ma_khoa }}</div>
                                    </div>
                                    <div class="row g-0">
                                        <div class="col-md-3 fw-bold">Học vị:</div>
                                        <div class="col-md-9">{{ $gv->hoc_vi }}</div>
                                    </div>
                                    <div class="row g-0">
                                        <div class="col-md-3 fw-bold">Số điện thoại:</div>
                                        <div class="col-md-9">{{ $gv->sdt }}</div>
                                    </div>
                                    <div class="row g-0">
                                        <div class="col-md-3 fw-bold">Email:</div>
                                        <div class="col-md-9">{{ $gv->email }}</div>
                                    </div>
                                    <div class="row g-0">
                                        <div class="col-md-4 fw-bold">Lĩnh vực nghiên cứu:</div>
                                        <div class="col-md-8">{{ $gv->linh_vuc_nc }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mt-2">
                                <div class="col-md-12">
                                    <p><strong>Định hướng nghiên cứu:</strong> {{ $gv->dinh_huong_nc }}</p>
                                </div>
                            </div>
                            <div class="row g-0">
                                <div class="col-md-12">
                                    <p><strong>Số sinh viên hướng dẫn:</strong> {{ $gv->so_sv_huong_dan }}</p>
                                </div>
                            </div>
                            <button type="button" class="btn-close position-absolute top-0 end-0 m-3"
                                data-bs-dismiss="modal" aria-label="Close"></button>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Kết thúc modal -->
            @endforeach
        </tbody>
    </table>

    <div class="flex justify-end mt-12">
        <button class="bg-blue-700 text-white px-4 py-2 rounded">
            <a href="{{ route('vanphongkhoa.chiahoidong') }}">Tiếp theo</a>
        </button>
    </div>
</div>
@endsection
