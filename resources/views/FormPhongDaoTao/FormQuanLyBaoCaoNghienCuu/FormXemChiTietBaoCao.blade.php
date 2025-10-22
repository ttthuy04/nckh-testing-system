@extends('layouts.PDTlayout')

@section('sidebar')
    <div class="menu-item ">
        <a href="{{route('phongdaotao.tintuc')}}">
            <img src="{{ asset('images/Commercial.png') }}" alt="News Icon" class="sidebar-icon" />
            <span>Tin tức</span>
        </a>
    </div>
    <div class="menu-item active">
        <a href="{{route('phongdaotao.xembaocao')}}">
            <img src="{{ asset('images/School Director.png') }}" alt="Research Icon" class="sidebar-icon" />
            <span>Báo cáo đề tài</span>
        </a>
    </div>
    <div class="menu-item">
        <a href="{{ route('phongdaotao.phanbienvabaove')}}">
            <img src="{{ asset('images/carbon_result.png') }}" alt="Register Icon" class="sidebar-icon" />
            <span>Phản biện & bảo vệ</span>
        </a>
    </div>
    <div class="menu-item">
        <a href="{{ route('phongdaotao.capnhatketqua') }}">
            <img src="{{ asset('images/New Document.png') }}" alt="Report Icon" class="sidebar-icon" />
            <span>Cập nhật kết quả trình bày bảo vệ</span>
        </a>
    </div>
    <div class="menu-item">
        <a href="{{ route('phongdaotao.truyvanthongtin') }}">
            <img src="{{ asset('images/mdi_court-hammer.png') }}" alt="Invitation Icon" class="sidebar-icon" />
            <span>Truy vấn thông tin</span>
        </a>
    </div>
    <div class="menu-item">
        <a href="{{ route('phongdaotao.quanlytaikhoan') }}">
            <img src="{{ asset('images/solar_user-linear.png') }}" alt="Invitation Icon" class="sidebar-icon" />
            <span>Quản lý tài khoản</span>
        </a>
    </div>
@endsection

@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rasa:wght@400;500&display=swap');

        /* Định dạng chung */
        body {
            font-family: 'Rasa', serif;
        }

        /* Định dạng tiêu đề chính */
        .custom-title {
            font-size: 36px;
            /* Tăng kích thước */
            font-weight: 700;
            /* Làm đậm hơn */
            color: #255293;
            text-align: left;
            margin-bottom: 25px;
        }

        /* Định dạng phần chứa nội dung */
        .p-3 {
            background-color: #e7f5ff;
            border-radius: 12px;
            padding: 30px;
            /* Tăng padding */
            position: relative;
            width: 1000px;
            /* Mở rộng khung nội dung */
            height: auto;
            margin: 0;
        }

        /* Định dạng hình ảnh */
        .news-image {
            width: 300px;
            /* Tăng kích thước ảnh */
            height: auto;
            position: absolute;
            top: 20px;
            right: 20px;
            border-radius: 10px;
            box-shadow: 3px 3px 12px rgba(0, 0, 0, 0.15);
        }

        /* Định dạng mã tin tức */
        .matintuc {
            font-size: 32px;
            /* Tăng kích thước */
            font-weight: 700;
            color: #17488C;
            margin-bottom: 15px;
        }

        /* Định dạng tiêu đề tin tức */
        .tieude {
            font-size: 36px;
            /* Tăng kích thước */
            font-weight: 500;
            color: #255293;
            margin-bottom: 15px;
            font-family: Rasa;
        }

        /* Định dạng nội dung */
        p {
            font-size: 32px;
            /* Làm chữ to hơn */
            color: #333;
            line-height: 2;
            /* Tăng khoảng cách dòng */
            text-align: left;
            margin: 0;
            color: #255293;
            font-weight: 500;
        }

        /* Định dạng ngày đăng, người đăng */
        p strong {
            color: #245292;
            display: inline;
            font-size: 32px;
            /* Làm to chữ */
        }

        /* Định dạng đường dẫn tệp đính kèm */
        a {
            font-size: 24px;
            /* Tăng kích thước chữ */
            color: #0f3460;
            text-decoration: none;
            font-weight: 700;
        }

        a:hover {
            text-decoration: underline;
            color: #17488C;
        }

        /* Định dạng nút quay lại */
        .btn-back {
            display: inline-block;
            padding: 15px 28px;
            /* Tăng kích thước nút */
            font-size: 24px;
            /* Tăng cỡ chữ */
            font-weight: 700;
            color: white;
            background: rgba(81, 131, 202, 0.85);
            border-radius: 12px;
            text-decoration: none;
            transition: 0.3s;
            position: absolute;
            right: 25px;
            bottom: 25px;
            box-shadow: 3px 3px 12px rgba(0, 0, 0, 0.25);
        }

        /* Hiệu ứng hover */
        .btn-back:hover {
            background: rgba(81, 131, 202, 1);
            color: #fff;
        }

        /* Đảm bảo nội dung luôn căn trái */
        .col-md-9 {
            text-align: left;
            margin-left: 0;
            padding-left: 0;
        }
    </style>
    <div class="container mt-4 p-3">
        <div class="position-relative">
            <div class="row">
                <div class="col-md-9 position-relative text-left">
                    <p class="mabaocao"><strong>Mã báo cáo:</strong> {{ $baocao->ma_bc }}</p>
                    <p class="tieude"><strong>Tiêu đề:</strong> {{ $baocao->tieu_de }}</p>

                    <p><strong>Nội dung:</strong></p>
                    <p>{{ $baocao->noi_dung }}</p>

                    <p><strong>Tên đề tài:</strong> {{ $baocao->deTai->ten_de_tai ?? 'Không có dữ liệu' }}</p>
                    <p><strong>Người tạo:</strong> {{ $baocao->nguoi_tao }}</p>
                    <p><strong>Ngày tạo:</strong> {{ date('d/m/Y H:i', strtotime($baocao->ngay_tao)) }}</p>
                    <p><strong>Trạng thái:</strong> {{ $baocao->trang_thai }}</p>

                    @if($baocao->duong_dan_tep)
                        <p><strong>Đường dẫn tệp đính kèm:</strong>
                            <a href="{{ $baocao->duong_dan_tep }}" target="_blank">{{ $baocao->duong_dan_tep }}</a>
                        </p>
                    @endif

                    <!-- Nút quay lại -->
                    <a href="{{ route('phongdaotao.xembaocao') }}" class="btn-back">
                        <i class="fas fa-arrow-left"></i> Quay lại
                    </a>
                </div>
            </div>
        </div>
    </div>


@endsection