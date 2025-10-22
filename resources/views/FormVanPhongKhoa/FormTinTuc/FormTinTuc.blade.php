@extends('layouts.layout2')

@section('sidebar')
    <div class="menu-item active">
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
    <div class="menu-item">
        <a href="{{ route('vanphongkhoa.phanbienvabaove')}}">
            <img src="{{ asset('images/carbon_result.png') }}" alt="Register Icon" class="sidebar-icon" />
            <span>Phản biện & bảo vệ</span>
        </a>
    </div>
    <div class="menu-item">
        <a href="{{ route('vanphongkhoa.capnhatketqua') }}">
            <img src="{{ asset('images/New Document.png') }}" alt="Report Icon" class="sidebar-icon" />
            <span>Cập nhật kết quả</span>
        </a>
    </div>
    <div class="menu-item ">
        <a href="{{ route('vanphongkhoa.truyvanthongtin') }}">
            <img src="{{ asset('images/mdi_court-hammer.png') }}" alt="Invitation Icon" class="sidebar-icon" />
            <span>Truy vấn thông tin</span>
        </a>
    </div>
@endsection

@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e7f5ff;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            font-size: 28px;
            color: #245292;
            font-weight: 500;
        }

        .add-button {
            background-color: #5083c9;
            color: #e6f4ff;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            display: flex;
            align-items: center;
            margin-left: auto;
            margin-bottom: 20px;
            max-width: 180px;
        }

        .add-button span {
            margin-right: 10px;
            font-size: 24px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            background-color: #a5c8e6;
        }

        th {
            background-color: #4a75af;
            color: white;
            text-align: left;
            padding: 12px 15px;
            font-weight: 500;
        }

        td {
            padding: 12px 15px;
            border-bottom: 1px solid #86b5d9;
            background-color: #bbd5eb;
        }

        tr:nth-child(even) td {
            background-color: #c8dfef;
        }

        .empty-row td {
            height: 50px;
            background-color: #c8dfef;
        }

        /* Hiệu ứng hover cho từng mục tin tức */
        .news-item {
            transition: all 0.3s ease-in-out;
        }

        .news-item:hover {
            transform: translateY(-5px);
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
        }

        /* Hiệu ứng hover cho liên kết "Xem chi tiết tin tức" */
        .news-link {
            transition: color 0.3s ease-in-out;
            color: #255293;
            font-family: Rasa;
            font-size: 24px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
        }

        .news-link:hover {
            color: #0f3460;
        }

        .divider {
            background-color: #245292;
            /* Màu xanh theo yêu cầu */
            margin: 20px 0;
            /* Khoảng cách trên dưới */
            width: 100%;
            /* Độ dài 100% để kéo dài toàn bộ */
        }

        .news-meta {
            color: #255293;
            font-family: Rasa;
            font-size: 24px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
        }

        .news-title {
            color: #255293;
            font-family: "Rasa";
            font-size: 32px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
        }

        .news-meta {
            color: #17488C;
            font-family: Rasa;
            font-size: 20px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
        }
    </style>
    <div class="main-content">
        <h1 class="page-title">Tin tức</h1>
        <div class="divider"></div>
        @foreach ($vpk as $item)
            <div class="news-item">


                <div class="news-content">
                    <h3 class="news-title">{{ $item->tieu_de }}</h3>
                    <div class="news-meta">{{ date('d/m/Y 07:01', strtotime($item->ngay_dang)) }}</div>
                    <p class="news-excerpt">{{ Str::limit($item->noi_dung, 500) }}</p>
                    <div class="news-action">
                        <a href="{{ route('vanphongkhoa.chitiettintuc', ['ma_tin_tuc' => $item->ma_tin_tuc]) }}"
                            class="news-link">
                            <img src="{{ asset('images/Chevron Right.png') }}" alt="Arrow" />
                            Xem chi tiết tin tức
                        </a>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
        @endforeach
    </div>


@endsection