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
<h2 class="page-title">Tin tức</h2>

@foreach ($tintucs as $tintuc)
<div class="news-section">
    <div class="news-item">
        
        <div class="news-content">
            <h3 class="news-title">{{ $tintuc->tieu_de }}</h3>
            <div class="news-date">{{ \Carbon\Carbon::parse($tintuc->ngay_dang  )->format('d/m/Y') }}&nbsp;&nbsp; {{ \Carbon\Carbon::parse($tintuc->created_at)->format('H:i') }}</div>
            <p class="news-excerpt">
                {{ Str::limit($tintuc->noi_dung, 150) }}
            </p>
            <div class="news-link">
                <img src="{{ asset('img/Chevron Right.png') }}" alt="Arrow" />
                <span>
                    <a href="{{ route('tintuc.show', $tintuc->ma_tin_tuc) }}" style="text-decoration: none; color: #245292">
                        Xem chi tiết tin tức
                    </a>
                </span>
            </div>
        </div>
    </div>
</div>

@if(!$loop->last)
<div class="divider"></div>
@endif
@endforeach


@endsection
