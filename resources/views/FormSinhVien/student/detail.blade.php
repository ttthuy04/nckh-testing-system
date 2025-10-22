@extends('layouts.app')
@section('sidebar')
<div class="menu-item active">
    <a href="{{ route('FormSinhVien.student.index') }}">
        <img src="{{ asset('img/Commercial.png') }}" alt="News Icon" class="sidebar-icon" />
        <span>Tin tức</span>
    </a>
</div>
<div class="menu-item ">
    <a href="{{ route('FormSinhVien.detai.index') }}">
        <img src="{{ asset('img/Saddle Stitched Booklet.png') }}" alt="Research Icon" class="sidebar-icon" />
        <span>Đề tài nghiên cứu</span>
    </a>
</div>
<div class="menu-item">
    <a href="{{ route('FormSinhVien.searchgv.index') }}">
        <img src="{{ asset('img/Vector.png') }}" alt="Register Icon" class="sidebar-icon" />
        <span>Tìm kiếm giảng viên</span>
    </a>
</div>
<div class="menu-item">
    <a href="{{ route('FormSinhVien.loimoi.index') }}">
        <img src="{{ asset('img/School Director.png') }}" alt="Invitation Icon" class="sidebar-icon" />
        <span>Lời mời hướng dẫn</span>
    </a>
</div>
@endsection
@section('content')
<div class="container mt-4">
    <h4 class="custom-title">Xem chi tiết tin tức</h4>

    <div class="p-3 rounded fs-5" style="background-color: #e7f5ff;color:  #225293;">

        <div class="row">
            <!-- Cột chứa nội dung -->
            <div class="col-md-9">
                <p><strong>Mã tin tức:</strong> {{ $student->ma_tin_tuc }}</p>

                <p><strong>Tiêu đề:</strong> {{ $student->tieu_de }}</p>

                <p><strong>Nội dung:</strong></p>
                <p>{{ $student->noi_dung }}</p>

                <p><strong>Ngày đăng:</strong> {{ date('d/m/Y', strtotime($student->ngay_dang)) }}</p>
                <p><strong>Người đăng:</strong> {{ $student->nguoi_dang }}</p>

                @if($student->duong_dan_tep)
                <p><strong>Đường dẫn tệp đính kèm:</strong>
                    <a href="{{ $student->duong_dan_tep }}" target="_blank">{{ $student->duong_dan_tep }}</a>
                </p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
