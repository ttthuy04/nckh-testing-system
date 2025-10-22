@extends('layouts.app1')

@section('sidebar')
<div class="menu-item active">
    <a href="{{ route('tintuc.index') }}">
        <img src="{{ asset('img/Commercial.png') }}" alt="News Icon" class="sidebar-icon" />
        <span>Tin tức</span>
    </a>
</div>
<div class="menu-item ">
    <a href="{{ route('detainghiencuu.index') }}">
        <img src="{{ asset('img/Saddle Stitched Booklet.png') }}" alt="Research Icon" class="sidebar-icon" />
        <span>Đề tài nghiên cứu</span>
    </a>
</div>
<div class="menu-item ">
    <a href="{{ route('dangkynghiencuu.index') }}">
        <img src="{{ asset('img/Vector.png') }}" alt="Register Icon" class="sidebar-icon" />
        <span>Đăng ký nghiên cứu</span>
    </a>
</div>
<div class="menu-item">
    <a href="{{ route('baocaodetai.index') }}">
        <img src="{{ asset('img/material-symbols_article-person-outline.png') }}" alt="Report Icon" class="sidebar-icon" />
        <span>Báo cáo đề tài</span>
    </a>
</div>
<div class="menu-item">
    <a href="{{ route('loimoihuongdan.index') }}">
        <img src="{{ asset('img/School Director.png') }}" alt="Invitation Icon" class="sidebar-icon" />
        <span>Lời mời hướng dẫn</span>
    </a>
</div>
@endsection


@section('content')
<div class="container mt-4">
    <h4 class="custom-title" style="color: #17488C; font-weight: 500;; margin-bottom: 20px;">Xem chi tiết tin tức</h4>
    <div class="p-3 rounded fs-5" style="background-color: #e7f5ff;">
        <div class="row">
            <!-- Cột chứa nội dung -->
            <div class="col-md-9">
                <p style="margin-bottom: 10px; color: #17488C;font-weight: 500;"><strong style="color: #17488c; font-weight: 700;">Mã tin tức:</strong> {{ $tintuc->ma_tin_tuc ?? 'NCKH'.date('Ymd', strtotime($tintuc->ngay_dang)) }}</p>
                <p style="margin-bottom: 10px; color: #17488C;font-weight: 500;"><strong style="color: #17488c; font-weight: 700;">Tiêu đề:</strong> {{ $tintuc->tieu_de }}</p>
                <p style="margin-bottom: 10px; color: #17488C;font-weight: 500;"><strong style="color: #17488c; font-weight: 700;">Nội dung:</strong></p>
                <p style="margin-bottom: 15px; color: #17488C;font-weight: 500; line-height: 1.6; text-align: justify;">{{ $tintuc->noi_dung }}</p>
                <p style="margin-bottom: 10px; color: #17488C;font-weight: 500;"><strong style="color: #17488c; font-weight: 700;">Ngày đăng:</strong> {{ \Carbon\Carbon::parse($tintuc->ngay_dang)->format('d/m/Y') }}</p>
                <p style="margin-bottom: 10px; color: #17488C;font-weight: 500;"><strong style="color: #17488c; font-weight: 700;">Người đăng:</strong> {{ $tintuc->nguoi_dang ?? 'Admin' }}</p>
               
                @if($tintuc->duong_dan_tep)
                    <p style="margin-bottom: 10px; color: #17488C;font-weight: 500;"><strong style="color: #17488c; font-weight: 700;">Đường dẫn tệp đính kèm:</strong>
                        <a href="{{ asset($tintuc->duong_dan_tep) }}" target="_blank" style="color: #17488C;font-weight: 500; text-decoration: underline;">{{ basename($tintuc->duong_dan_tep) }}</a>
                    </p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection




