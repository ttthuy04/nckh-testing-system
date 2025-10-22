@extends('layouts.PDTlayout')

@section('sidebar')
    <div class="menu-item ">
        <a href="{{route('phongdaotao.tintuc')}}">
            <img src="{{ asset('images/Commercial.png') }}" alt="News Icon" class="sidebar-icon" />
            <span>Tin tức</span>
        </a>
    </div>
    <div class="menu-item">
        <a href="{{route('phongdaotao.xembaocao')}}">
            <img src="{{ asset('images/School Director.png') }}" alt="Research Icon" class="sidebar-icon" />
            <span>Báo cáo đề tài</span>
        </a>
    </div>
    <div class="menu-item active ">
        <a href="{{ route('phongdaotao.phanbienvabaove')}}">
            <img src="{{ asset('images/carbon_result.png') }}" alt="Register Icon" class="sidebar-icon" />
            <span>Phản biện & bảo vệ</span>
        </a>
    </div>
    <div class="menu-item">
        <a href="{{ route('phongdaotao.capnhatketqua') }}">
            <img src="{{ asset('images/New Document.png') }}" alt="Report Icon" class="sidebar-icon" />
            <span>Cập nhật kết quả <br />trình bày bảo vệ</span>
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
        .frame-1 {
            background: rgba(81, 131, 202, 0.6);
            width: 822px;
            height: 433px;
            position: absolute;
            left: 700px;

            top: 307.94px;
            overflow: hidden;
        }

        .md-01 {
            color: #255293;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 25px;
            top: 19px;
        }

        .dt01 {
            color: #255293;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 230px;
            top: 20px;
        }

        .md-02 {
            color: #255293;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 25px;
            top: 93px;
        }

        .md-03 {
            color: #255293;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 25px;
            top: 163px;
        }

        .dt02 {
            color: #255293;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 230px;
            top: 93px;
        }

        .dt03 {
            color: #255293;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 230px;
            top: 163px;
        }

        .hd01 {
            color: #255293;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 600px;
            top: 10px;
        }

        .hd02 {
            color: #255293;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 600px;
            top: 75px;
        }

        .hd03 {
            color: #255293;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 600px;
            top: 150px;
        }

        .rectangle-38 {
            background: rgba(37, 82, 147, 0.87);
            width: 822px;
            height: 64.15px;
            position: absolute;
            left: 700px;
            top: 242.86px;
        }

        .line-8 {
            margin-top: -1px;
            border-style: solid;
            border-color: #e7f5ff;
            border-width: 1px 0 0 0;
            width: 549.77px;
            height: 0px;
            position: absolute;
            left: 880px;
            top: 242.86px;
            transform-origin: 0 0;
            transform: rotate(90deg) scale(1, 1);
        }

        .hoidong {
            color: #e7f5ff;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 740px;
            top: 260px;
            width: 220px;
            height: 30.14px;
        }

        .detai {
            color: #e7f5ff;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 935px;
            top: 260px;
            width: 188px;
            height: 30.14px;
        }

        .lichtrinhbaove {
            color: #e7f5ff;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 1100px;
            right: 500px;
            top: 245px;
            width: 177px;
            height: 29.67px;
        }

        .hoatdong {
            color: #e7f5ff;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 1310px;
            top: 260.53px;
            width: 237px;
            height: 30.14px;
        }

        .line-9 {
            margin-top: -1px;
            border-style: solid;
            border-color: #ffffff;
            border-width: 1px 0 0 0;
            width: 549.77px;
            height: 0px;
            position: absolute;
            left: 1060px;
            top: 242.86px;
            transform-origin: 0 0;
            transform: rotate(89.684deg) scale(1, 1);
        }

        .line-10 {
            margin-top: -1px;
            border-style: solid;
            border-color: #e7f5ff;
            border-width: 1px 0 0 0;
            width: 1420px;
            height: 0px;
            position: absolute;
            left: 410px;
            top: 375.97px;
            transform-origin: 0 0;
            transform: rotate(0.109deg) scale(1, 1);
        }

        .line-11 {
            margin-top: -1px;
            border-style: solid;
            border-color: #e7f5ff;
            border-width: 1px 0 0 0;
            width: 1420px;
            height: 0px;
            position: absolute;
            left: 410px;
            top: 446.64px;
            transform-origin: 0 0;
            transform: rotate(0.313deg) scale(1, 1);
        }

        .line-12 {
            margin-top: -1px;
            border-style: solid;
            border-color: #e7f5ff;
            border-width: 1px 0 0 0;
            width: 1420px;
            height: 0px;
            position: absolute;
            left: 396px;
            top: 513.15px;
            transform-origin: 0 0;
            transform: rotate(0.455deg) scale(1, 1);
        }

        .line-13 {
            margin-top: -1px;
            border-style: solid;
            border-color: #e7f5ff;
            border-width: 1px 0 0 0;
            width: 1420px;
            height: 0px;
            position: absolute;
            left: 410px;
            top: 586.94px;
            transform-origin: 0 0;
            transform: rotate(0.189deg) scale(1, 1);
        }

        .line-14 {
            margin-top: -1px;
            border-style: solid;
            border-color: #e7f5ff;
            border-width: 1px 0 0 0;
            width: 1420px;
            height: 0px;
            position: absolute;
            left: 410px;
            top: 657.6px;
            transform-origin: 0 0;
            transform: rotate(0.112deg) scale(1, 1);
        }

        .line-19 {
            border-style: solid;
            border-color: #e7f5ff;
            border-width: 1px 0 0 0;
            width: 549.77px;
            height: 0px;
            position: absolute;
            left: 1250px;
            top: 242.86px;
            transform-origin: 0 0;
            transform: rotate(90deg) scale(1, 1);
        }

        .line-15 {
            margin-top: -1px;
            border-style: solid;
            border-color: #e7f5ff;
            border-width: 1px 0 0 0;
            width: 1449.01px;
            height: 0px;
            position: absolute;
            left: 410px;
            top: 724.12px;
            transform-origin: 0 0;
            transform: rotate(0.168deg) scale(1, 1);
        }

        .group-13 {
            width: 345px;
            height: 92px;
            position: static;
        }

        .rectangle-40 {
            background: #5183CA99;
            border-radius: 10px;
            width: 174px;
            height: 60px;
            position: absolute;
            left: 510px;
            top: 700px;
        }

        .quaylai {
            text-align: center;
            font-family: "Rasa-Medium", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 450px;
            top: 700px;
            width: 297.05px;
            height: 56.25px;
        }

        .group-12 {
            width: 345px;
            height: 92px;
            position: static;
        }

        .xuatdanhsach {
            color: #e7f5ff;

            text-align: center;
            font-family: "Rasa-Medium", sans-serif;
            font-size: 36px;
            font-weight: 500;
            position: absolute;
            left: 1100px;
            top: 883px;
            width: 253.28px;
            height: 56.25px;
        }

        .truy-v-n-th-ng-tin2 {
            color: #17488C;
            font-size: 48px;
            font-family: Rasa;
            font-weight: 500;
            word-wrap: break-word;
            text-align: center;
            position: absolute;
            left: 460px;
            top: 136px;
        }

        .popup-container {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 778px;
            height: 242px;
            background: #E7F5FF;
            border: 2px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            overflow: auto;
            border-radius: 10px;
            /* color: #5183ca; */
            font-weight: bolder;
            color: #255293;
            font-size: 24px;
            font-family: "Rasa", sans-serif;
            font-weight: 500;
            word-wrap: break-word;

        }

        .popup-container2 {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 810px;
            height: 308px;
            background: #E7F5FF;
            border: 2px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            overflow: auto;
            border-radius: 10px;
            /* color: #5183ca; */
            font-weight: bolder;
            color: #255293;
            font-size: 24px;
            font-family: "Rasa", sans-serif;
            font-weight: 500;
            word-wrap: break-word;

        }

        .popup-container p {
            padding-left: 30px;
        }


        /* Nội dung có thể cuộn */
        .popup-content {
            height: 100%;
            overflow-y: auto;
            padding-left: 20px;
            padding-top: 20px;

            /* Điều chỉnh khoảng cách giữa các dòng */
            font-family: Rasa;
            font-weight: 700;
            font-size: 32px;
            line-height: 100%;
            letter-spacing: 0%;
        }

        /* Nút đóng popup */
        .close-btn {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 20px;
            cursor: pointer;
            color: #255293;
        }

        .export-btn {
            background-color: #5183CA99;
            color: #255293;
            font-size: 18px;
            font-family: "Rasa", sans-serif;
            font-weight: 600;
            padding: 20px 30px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            margin-top: 10px;
            margin-left: 485px;
            /* Tạo khoảng cách với nội dung trên */
            width: 300px;
            /* Cố định chiều rộng để đẹp hơn */
            text-align: center;
        }

        .export-btn:hover {
            background-color: #1d417a;
        }

        .popup-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        .confirm-popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 810px;
            height: 307px;
            background: #e7f5ff;
            border: 2px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 1001;
            border-radius: 10px;
            text-align: center;

        }

        .confirm-popup2 {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 1048px;
            height: 428px;
            background: #e7f5ff;
            border: 2px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 1001;
            border-radius: 10px;
            text-align: center;

        }

        .confirm-popup .popup-header2 {
            font-size: 40px;
            font-weight: bold;
            color: #255293;
            font-weight: 500;
            word-wrap: break-word
        }

        .confirm-popup .popup-header {
            font-size: 32px;
            color: #255293;
            font-weight: 700;
            padding-left: 30px;
            word-wrap: break-word
        }

        .confirm-popup .popup-content {
            font-size: 40px;
            color: #255293;
            font-weight: 500;
            word-wrap: break-word
        }

        .confirm-popup2 .btn-update {
            background-color: #5183CA99;
            color: #255293;
            font-size: 32px;
            width: 169px;
            font-family: Rasa;
            font-weight: 700;
            word-wrap: break-word;

            border: none;
            border-radius: 10px;
            cursor: pointer;
            margin-top: 40px;
            margin-left: 700px;
            font-weight: 500;
            word-wrap: break-word
        }

        .confirm-popup .confirm-btn:hover,
        .confirm-popup .cancel-btn:hover {
            background-color: #1d417a;
        }

        .popup-header {
            display: flex;
            align-items: center;
            /* Canh giữa theo chiều dọc */
            font-size: 32px;
            font-weight: 700;
            color: #255293;
            padding: 10px 20px 10px;
        }

        .popup-header2 {
            display: flex;
            align-items: center;
            /* Canh giữa theo chiều dọc */
            font-size: 40px;
            font-weight: bold;
            color: #255293;
            padding: 10px;
        }

        .megaphone {
            width: 30px;
            /* Kích thước icon */
            height: 60px;
            margin-right: 10px;
            margin-left: 20px;
            /* Tạo khoảng cách giữa icon và chữ */
        }

        .cancel {
            width: 90px;
            /* Kích thước icon */
            height: 90px;

            /* Tạo khoảng cách giữa icon và chữ */
        }

        .line-16 {
            margin-top: -1px;
            border-style: solid;
            border-color: #255293;
            border-width: 1px 0 0 0;
            width: 1449.01px;
            height: 0px;
            position: absolute;
            left: 410px;
            top: 724.12px;
            transform-origin: 0 0;
            transform: rotate(0.168deg) scale(1, 1);
        }

        .success-popup {
            width: 778px;
            height: 242px;
            background: #E7F5FF;
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            z-index: 1001;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-top: 80px;

        }

        .confirm-popup .confirm-btn,
        .confirm-popup .cancel-btn {
            background-color: #5183CA99;
            color: #255293;
            font-size: 32px;
            width: 200px;
            font-family: Rasa;
            font-weight: 500;
            word-wrap: break-word;
            padding: 5px;
            margin-top: 40px;
            border: none;
            border-radius: 20px;
            cursor: pointer;

            font-weight: 500;
            word-wrap: break-word
        }

        .confirm-popup .confirm-btn {
            margin-right: 40px;
        }

        .success-popup p {
            color: #255293;
            font-size: 40px;
            font-family: Rasa;
            font-weight: 500;
            word-wrap: break-word;
        }

        a {
            text-decoration: none;
            color: inherit;
            /* Giữ nguyên màu chữ */
        }

        a:hover {
            color: blue;
            /* Màu khi di chuột vào */
        }

        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            margin-top: 40px;
        }

        .form-label {
            color: #17488C;
            font-size: 32px;
            font-family: Rasa;
            font-weight: 700;
            width: 300px;
            /* Điều chỉnh độ rộng của nhãn */
        }

        .input-container {
            position: relative;
            width: 700px;
            height: 48.23601531982422px;
            border-radius: 10px;
            font-size: 32px;
            font-family: Rasa;
            font-weight: 700;

            display: flex;
            align-items: center;

        }

        .form-input {
            width: 640px;
            height: 44.790584564208984px;
            border-radius: 10px;
            /* border: 1px solid #255293; */
            border: none;
            padding: 0 40px 0 10px;
            color: #17488C;
            background: #5183CA99;
            font-size: 32px;
            font-family: Rasa;
            font-weight: 700;


        }

        .input-icon {
            position: absolute;

            width: 35px;
            height: 35px;
            right: 70px;

            cursor: pointer;
            top: 50%;
            transform: translateY(-50%);

            pointer-events: none;
            /* Không cản trở nhập liệu */
        }

        .icon:hover {
            background-color: #D0E4FF;
            /* Đổi màu khi hover */
        }

        .error-message {
            padding: 20px;

            display: flex;
            /* Sử dụng flexbox */
            align-items: center;
            /* Căn giữa theo chiều dọc */
            gap: 10px;
            /* Khoảng cách giữa icon và văn bản */
            color: #17488C;
            /* Màu chữ */
            font-size: 40px;
            /* Cỡ chữ */
            font-weight: 500;
            font-family: Rasa;
        }

        .error-message img {
            margin-left: 20px;
        }

        .error-message p {
            padding-left: 30px;
        }

        .popup-header2 {
            display: flex;
            align-items: center;
            /* Canh giữa theo chiều dọc */
            font-size: 36px;
            font-weight: bold;
            color: #255293;
            padding: 5px;
        }

        input[type="datetime-local"] {
            color: #17488C;
            /* Màu chữ */
            font-size: 32px;
            /* Điều chỉnh cỡ chữ */
            font-weight: bold;
            /* Đậm chữ */
        }


        .container {
            display: flex;
            justify-content: center;
            /* Căn giữa ngang */
            align-items: center;
            /* Căn giữa dọc (nếu cần) */
        }

        .custom-table {
            padding-top: 150px;
            width: 80%;
            /* Điều chỉnh độ rộng bảng */
            max-width: 1000px;
            /* Giới hạn chiều rộng tối đa */
            margin: auto;
            /* Căn giữa theo chiều ngang */
            text-align: center;
            /* Căn giữa nội dung */
        }

        .custom-table th {
            background-color: #255293DE;
            color: white;
            text-align: center;
            height: 64.15px;
            font-family: 'Rasa', serif;
            font-weight: 600;
            font-size: 24px;
            line-height: 100%;
            letter-spacing: 0%;

        }

        .custom-table td {
            background: rgba(81, 131, 202, 0.6);
            color: #255293;
            text-align: center;
            max-height: 100px;
            height: 50px;
            font-family: 'Rasa', serif;
            font-weight: 600;
            font-size: 24px;
            line-height: 100%;
            letter-spacing: 0%;

        }


        .custom-table th:nth-child(1) {
            width: 25%;
        }

        /* Mã đề tài */
        .custom-table th:nth-child(2) {
            width: 25%;
        }

        /* Tên đề tài */
        .custom-table th:nth-child(3) {
            width: 25%;
        }

        /* Ngày đăng ký */
        .custom-table th:nth-child(4) {
            width: 25%;
        }

        .btn-update {
            font-family: 'Rasa', serif;
            font-weight: 600;
            font-size: 24px;
            line-height: 100%;
            letter-spacing: 0%;

            /* Cỡ chữ 20px */
            background-color: transparent;
            /* Nền trong suốt */
            border: none;
            /* Không có viền */
            color: #255293;
            /* Màu chữ (có thể điều chỉnh nếu trùng với nền) */
            cursor: pointer;
            /* Hiển thị con trỏ khi rê chuột */
            /* Chữ in đậm để dễ nhìn hơn */
        }

        .close-btn {
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
            color: #5183CA99;
        }

        .close-btn:hover {
            color: red;
        }

        /* Trạng thái */
    </style>
    <div class="container mt-4 d-flex justify-content-center">
        <table class="table table-bordered custom-table responsive-table text-center">

            <thead>
                <tr>
                    <th>Hội đồng</th>
                    <th>Đề tài</th>
                    <th>Lịch trình bảo vệ</th>
                    <th>Hoạt động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lichTrinh as $lt)
                    <tr>
                        <td>Hội đồng {{ $lt->ma_hoi_dong }}</td> <!-- Hiển thị mã hội đồng -->
                        <td>Đề tài {{ $lt->ma_de_tai }}</td> <!-- Hiển thị mã đề tài -->
                        <td>
                            {{ \Carbon\Carbon::parse($lt->ngay_bao_ve)->format('d/m/Y') }} -
                            {{ \Carbon\Carbon::parse($lt->gio_bao_ve)->format('H:i') }}
                        </td> <!-- Hiển thị ngày và giờ bảo vệ -->
                        <td>
                            <button class="btn-update" data-id="{{ $lt->ma_lich_trinh }}" data-ngay="{{ $lt->ngay_bao_ve }}"
                                data-gio="{{ $lt->gio_bao_ve }}" data-diadiem="{{ $lt->dia_diem }}"
                                onclick="openPopupFromButton(this)">
                                Cập nhật lịch <br>trình bảo vệ
                            </button>
                        </td>

                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    <div class="group-13">
        <div class="rectangle-40"></div>
        <a href="{{ route('phongdaotao.phanbienvabaove') }}">
            <button class="quaylai"
                style="border: none;background: transparent; cursor: pointer; color: #255293DE; font-size: 24px; font-weight: 600;">
                Quay lại
            </button>
        </a>
    </div>
    <div class="truy-v-n-th-ng-tin2">Cập nhật lịch trình bảo vệ</div>
    <!-- Popup cập nhật lịch trình -->
    <!-- Popup cập nhật lịch trình -->
    <div class="popup-overlay" id="updateOverlay" style="display: none;"></div>
    <div class="confirm-popup2" id="Popupupdate" style="display: none;">
        <div class="popup-header">
            <p>Cập nhật lịch trình bảo vệ đề tài</p>
            <button class="close-btn" onclick="closePopup()">✖</button>
        </div>

        <hr style="border: 1px solid #255293; width: 100%; margin: 0;">

        <div class="popup-content">
            <!-- Ngày và giờ bảo vệ -->
            <div class="form-group">
                <label class="form-label">Ngày và giờ bảo vệ:</label>
                <div class="input-container">
                    <input type="text" id="datetime" class="form-input" placeholder="Nhập dạng yyyy-mm-dd h:m:s">
                    <img class="input-icon" src="{{ asset('images/image.png') }}" alt="Thời gian">
                </div>
            </div>



            <!-- Địa điểm bảo vệ -->
            <div class="form-group">
                <label class="form-label">Địa điểm bảo vệ:</label>
                <input type="text" id="location" class="form-input">
            </div>

            <input type="hidden" id="lichTrinhId">

            <!-- Nút xác nhận -->
            <button class="btn-update" onclick="validateAndSubmit()">Cập nhật</button>
        </div>
    </div>

    <!-- Popup xác nhận -->
    <div class="popup-overlay" id="confirmOverlay" style="display: none;"></div>
    <div class="confirm-popup" id="confirmPopup" style="display: none;">
        <div class="popup-header2">
            <img class="megaphone" src="{{ asset('images/Megaphone.png') }}" alt="Thông báo">
            <span>Thông báo</span>
        </div>
        <hr style="border: 1px solid #255293; width: 100%; margin: 0;">
        <div class="popup-content">
            <p>Bạn có chắc chắn muốn cập nhật lịch trình<br> bảo vệ không?</p>
            <button class="confirm-btn" onclick="submitUpdate()">Xác nhận</button>
            <button class="cancel-btn" onclick="closeConfirmPopup()">Hủy</button>
        </div>
    </div>

    <!-- Popup thông báo thành công -->
    <div class="popup-overlay" id="successOverlay" style="display: none;"></div>
    <div class="popup-container success-popup" id="successPopup" style="display: none;">
        <div style="display: flex; align-items: center; justify-content: center; gap: 15px;">
            <img class="done" src="{{ asset('images/Done.png') }}" alt="Xuất báo cáo thành công!">
            <p>Cập nhật lịch trình bảo vệ thành công</p>
        </div>
    </div>
    <div class="popup-overlay" id="errorOverlay"></div>
    <div class="popup-container2" id="errorPopup">
        <div class="popup-header2">
            <img class="megaphone" src="{{ asset('images/Megaphone.png') }}" alt="Thông báo">
            <span>Thông báo</span>
        </div>

        <hr style="border: 1px solid #255293; width: 100%; margin: 0;">

        <div class="error-message">
            <img class="cancel" src="{{ asset('images/Cancel.png') }}">
            <p>Thông tin bạn nhập không chính xác<br />hoặc thiếu!Bạn hãy nhập lại thông tin.</p>
        </div>
    </div>
    <script>
        function openPopupFromButton(button) {
            let id = button.getAttribute("data-id");
            let ngay = button.getAttribute("data-ngay");
            let gio = button.getAttribute("data-gio");
            let diadiem = button.getAttribute("data-diadiem");

            console.log("Dữ liệu nhận:", id, ngay, gio, diadiem); // Kiểm tra giá trị nhận được

            document.getElementById("Popupupdate").style.display = "block";
            document.getElementById("updateOverlay").style.display = "block";
            document.getElementById("lichTrinhId").value = id;
            document.getElementById("datetime").value = ngay + " " + gio;
            document.getElementById("location").value = diadiem;
        }

        function closePopup() {
            document.getElementById("Popupupdate").style.display = "none";
            document.getElementById("updateOverlay").style.display = "none";
        }

        function validateAndSubmit() {
            let dateTime = document.getElementById("datetime").value.trim();
            let location = document.getElementById("location").value.trim();

            if (!dateTime || !location) {
                showErrorPopup();
                return;
            }

            let regex = /^\d{4}-\d{2}-\d{2} \d{1,2}:\d{2}:\d{2}$/;
            if (!regex.test(dateTime)) {
                showErrorPopup();
                return;
            }

            // 🛠 Hiển thị popup xác nhận
            document.getElementById("confirmOverlay").style.display = "block";
            document.getElementById("confirmPopup").style.display = "block";
            document.getElementById("Popupupdate").style.display = "none";
            document.getElementById("updateOverlay").style.display = "none";
        }


        function closeConfirmPopup() {
            document.getElementById("confirmOverlay").style.display = "none";
            document.getElementById("confirmPopup").style.display = "none";
        }


        function submitUpdate() {
            let id = document.getElementById("lichTrinhId").value;
            let ngayGio = document.getElementById("datetime").value.trim();
            let diadiem = document.getElementById("location").value.trim();

            fetch(`/lich-trinh/${id}/update`, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({ ngay_gio: ngayGio, dia_diem: diadiem })
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        closePopup();
                        showSuccessPopup("Cập nhật lịch trình bảo vệ thành công!");
                    } else {
                        showErrorPopup(data.message || "Có lỗi xảy ra, vui lòng thử lại.");
                    }
                })
                .catch(() => showErrorPopup("Lỗi kết nối! Vui lòng thử lại."));
        }


        function showErrorPopup(message) {
            //document.querySelector("#errorPopup .error-message p").innerText = message;
            document.getElementById("errorOverlay").style.display = "block";
            document.getElementById("errorPopup").style.display = "block";

            document.getElementById("Popupupdate").style.display = "none";
            document.getElementById("updateOverlay").style.display = "none";

            setTimeout(() => {
                document.getElementById("errorOverlay").style.display = "none";
                document.getElementById("errorPopup").style.display = "none";


            }, 2500);
        }

        function showSuccessPopup(message) {
            //document.querySelector("#successPopup p").innerText = message;
            document.getElementById("successOverlay").style.display = "block";
            document.getElementById("successPopup").style.display = "block";
            document.getElementById("confirmOverlay").style.display = "none";
            document.getElementById("confirmPopup").style.display = "none";

            setTimeout(() => location.reload(), 2000);
        }

        // Đóng popup khi click ra ngoài
        document.getElementById("updateOverlay").addEventListener("click", function (event) {
            if (event.target === this) {
                closePopup();
            }
        });
    </script>
@endsection