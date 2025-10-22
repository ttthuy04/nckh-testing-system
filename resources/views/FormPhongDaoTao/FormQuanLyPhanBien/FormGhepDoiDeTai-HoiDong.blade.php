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
    <div class="menu-item active">
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
            left: 300px;
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
            left: 300px;
            top: 93px;
        }

        .dt03 {
            color: #255293;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 300px;
            top: 163px;
        }

        .hd01 {
            color: #255293;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 620px;
            top: 20px;
        }

        .hd02 {
            color: #255293;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 620px;
            top: 90px;
        }

        .hd03 {
            color: #255293;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 620px;
            top: 165px;
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
            left: 940px;
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
            left: 1250px;
            right: 500px;
            top: 260px;
            width: 177px;
            height: 30.14px;
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
            left: 1160px;
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
            left: 520px;
            top: 700px;
        }

        .quaylai {
            text-align: center;
            font-family: "Rasa-Medium", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 460px;
            top: 700px;
            width: 297.05px;
            height: 56.25px;
        }

        .rectangle-402 {
            background: #5183CA99;
            border-radius: 10px;
            width: 174px;
            height: 60px;
            position: absolute;
            left: 1150px;
            top: 700px;
        }

        .luu {
            text-align: center;
            font-family: "Rasa-Medium", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 1090px;
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
            left: 1000px;
            top: 783px;
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
            width: 810px;
            height: 307px;
            background: #e7f5ff;
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
            line-height: 1.8;
        }

        .popup-container2 {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 778px;
            height: 242px;
            background: #e7f5ff;
            border: 2px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            overflow: auto;
            border-radius: 10px;
            /* color: #5183ca; */
            font-weight: bolder;
            color: #255293;
            padding-top: 50px;

        }

        .popup-container2 p {
            padding-left: 40px;
            font-size: 36px;
            font-family: "Rasa", sans-serif;
            font-weight: 500;
            word-wrap: break-word;
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
            font-size: 24px;
            font-weight: bold;
            color: #255293;
            font-weight: 500;
            word-wrap: break-word
        }

        .confirm-popup .popup-header {
            font-size: 32px;
            font-weight: bold;
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
            font-size: 40px;
            font-weight: bold;
            color: #255293;
            padding: 10px;
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

        .megaphone {
            width: 30px;
            /* Kích thước icon */
            height: 50px;
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
            width: 810px;
            height: 307px;
            background: white;
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
            width: 640px;
            height: 48.23601531982422px;
            border-radius: 10px;
            font-size: 32px;
            font-family: Rasa;
            font-weight: 700;

        }

        .form-input {
            width: 640px;
            height: 44.790584564208984px;
            border-radius: 10px;
            border: 1px solid #255293;
            padding: 0 40px 0 10px;
            color: #17488C;
            background: #5183CA99;
            font-size: 32px;
            font-family: Rasa;
            font-weight: 700;
        }

        .icon {
            position: absolute;
            right: 41px;
            top: 47%;
            transform: translateY(-50%);
            width: 35px;
            height: 35px;
            cursor: pointer;
            /* Làm nổi bật icon */
            padding: 3px;
            border-radius: 50%;
            margin-left: -120px;
            background-color: #D0E4FF;
        }

        .icon:hover {
            background-color: #D0E4FF;
            /* Đổi màu khi hover */
        }

        .error-message {
            padding: 30px;

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
            padding-left: 40px;
        }

        input[type="datetime-local"] {
            color: #17488C;
            /* Màu chữ */
            font-size: 32px;
            /* Điều chỉnh cỡ chữ */
            font-weight: bold;
            /* Đậm chữ */
        }

        input[type="checkbox"] {
            width: 20px;
            height: 20px;
        }

        .container {
            display: flex;
            justify-content: center;
            /* Căn giữa ngang */
            align-items: center;
            /* Căn giữa dọc (nếu cần) */
        }

        .custom-table {
            padding-top: 100px;
            width: 90%;
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
            font-size: 20px;
            line-height: 100%;
            letter-spacing: 0%;

        }


        .custom-table th:nth-child(1) {
            width: 250px;
            max-width: 300px;
        }
    </style>
    <div class="container mt-4 d-flex justify-content-center">
        <table class="table table-bordered custom-table responsive-table text-center">

            <thead>
                <tr>
                    <th>Tên Đề tài</th>
                    @foreach ($hoiDongs as $hoiDong)
                        <th>Hội đồng {{ $hoiDong->ma_hd }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>

                @foreach ($deTais as $deTai)
                    <tr>
                        <td>{{ $deTai->ten_de_tai }}</td>
                        @foreach ($hoiDongs as $hoiDong)
                            <td>
                                <input type="checkbox" name="ghep_doi[{{ $deTai->ma_de_tai }}][]" value="{{ $hoiDong->ma_hd }}">
                            </td>
                        @endforeach
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
                Thoát
            </button>
        </a>
    </div>
    <div class="group-12">
        <div class="rectangle-402"></div>
        <button class="luu" onclick="validateAndSave()"
            style="
                                                                                                                                                                                                                                                                                                                                                                                                                                    border: none; background: transparent; cursor: pointer; color: #255293DE; font-size: 24px; font-weight: 600;">
            Lưu

        </button>
    </div>
    <div class="truy-v-n-th-ng-tin2">Ghép đôi đề tài - hội đồng</div>


    <!-- Popup xác nhận -->
    <div class="popup-overlay" id="confirmOverlay"></div>
    <div class="confirm-popup" id="confirmPopup">
        <div class="popup-header">
            <img class="megaphone" src="{{ asset('images/Megaphone.png') }}" alt="Thông báo">
            <span>Thông báo</span>
        </div>
        <hr>
        <div class="popup-content">
            <p style="margin: 10px;">Bạn có chắc chắn muốn lưu các ghép đôi đề<br> tài - hội đồng này không?</p>
            <button class="confirm-btn" onclick="submitData()">Xác nhận</button>
            <button class="cancel-btn" onclick="closeConfirmPopup()">Hủy</button>
        </div>
    </div>

    <!-- Popup thành công -->
    <div class="popup-overlay" id="successOverlay"></div>
    <div class="popup-container2" id="successPopup">
        <div style="display: flex; align-items: center; justify-content: center; gap: 15px;">
            <img class="done" src="{{ asset('images/Done.png') }}" alt="Xuất báo cáo thành công!">
            <p>Ghép đôi đề tài-hội đồng thành công</p>
        </div>
    </div>

    <!-- Popup lỗi -->
    <div class="popup-overlay" id="errorOverlay"></div>
    <div class="popup-container" id="errorPopup">
        <div class="popup-header2">
            <img class="megaphone" src="{{ asset('images/Megaphone.png') }}" alt="Thông báo">
            <span>Thông báo</span>
        </div>

        <hr style="border: 1px solid #255293; width: 100%; margin: 0;">

        <div class="error-message">
            <img class="cancel" src="{{ asset('images/Cancel.png') }}">
            <p>Đề tài này đã được ghép đôi!</p>
        </div>
    </div>
    {{-- <div class="popup-overlay" id="errorOverlay"></div>
    <div class="popup-container" id="errorPopup">
        <div class="popup-header2">
            <img class="megaphone" src="{{ asset('images/Megaphone.png') }}" alt="Thông báo">
            <span>Thông báo</span>
        </div>

        <hr style="border: 1px solid #255293; width: 100%; margin: 0;">

        <div class="error-message">
            <img class="cancel" src="{{ asset('images/Cancel.png') }}">
            <p>Số lượng giảng viên không hợp lệ,<br />vui lòng nhập lại.</p>
        </div>
    </div> --}}
    <script>
        function validateAndSave() {
            let rows = document.querySelectorAll("tbody tr");
            let isValid = true;

            rows.forEach(row => {
                let checkboxes = row.querySelectorAll("input[type='checkbox']");
                let checkedCount = 0;

                checkboxes.forEach(checkbox => {
                    if (checkbox.checked) {
                        checkedCount++;
                    }
                });

                // Nếu có chọn hội đồng nhưng số lượng < 2 => báo lỗi
                if (checkedCount > 0 && checkedCount > 1) {
                    isValid = false;
                }

            });

            if (!isValid) {
                document.getElementById("errorOverlay").style.display = "block";
                document.getElementById("errorPopup").style.display = "block";
                setTimeout(() => {
                    document.getElementById("errorOverlay").style.display = "none";
                    document.getElementById("errorPopup").style.display = "none";
                }, 2000);
            } else {
                showConfirmPopup();
            }
        }



        function showConfirmPopup() {
            document.getElementById("confirmOverlay").style.display = "block";
            document.getElementById("confirmPopup").style.display = "block";
        }

        function closeConfirmPopup() {
            document.getElementById("confirmOverlay").style.display = "none";
            document.getElementById("confirmPopup").style.display = "none";
        }

        function validateAndShowConfirm() {
            let rows = document.querySelectorAll("tbody tr");
            let isValid = true;
            let data = [];

            rows.forEach(row => {
                let checkboxes = row.querySelectorAll("input[type='checkbox']");
                let checkedValues = [];

                checkboxes.forEach(checkbox => {
                    if (checkbox.checked) {
                        checkedValues.push(checkbox.value);
                    }
                });

                if (checkedValues.length > 0 && checkedValues.length < 2) {
                    isValid = false;
                }

                if (checkedValues.length > 0) {
                    data.push({
                        ma_de_tai: row.cells[0].dataset.id,
                        ma_hds: checkedValues
                    });
                }
            });

            if (!isValid) {
                document.getElementById("errorOverlay").style.display = "block";
                document.getElementById("errorPopup").style.display = "block";
                setTimeout(() => {
                    document.getElementById("errorOverlay").style.display = "none";
                    document.getElementById("errorPopup").style.display = "none";
                }, 2000);
            } else {
                document.getElementById("confirmOverlay").style.display = "block";
                document.getElementById("confirmPopup").style.display = "block";
                window.ghepDoiData = data; // Lưu tạm dữ liệu để gửi sau khi xác nhận
            }
        }

        function submitData() {
            let selectedData = {};
            document.querySelectorAll("input[type='checkbox']:checked").forEach((checkbox) => {
                let maDeTai = checkbox.name.match(/\d+/)[0]; // Lấy mã đề tài từ name="ghep_doi[1][]"
                let maHoiDong = checkbox.value;

                if (!selectedData[maDeTai]) {
                    selectedData[maDeTai] = [];
                }
                selectedData[maDeTai].push(maHoiDong);
            });

            console.log("Dữ liệu gửi đi:", selectedData);

            fetch("{{ route('ghepdoi.luu') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({ ghep_doi: selectedData })
            })
                .then(response => response.json())
                .then(data => {
                    console.log("Phản hồi từ server:", data);
                    if (data.success) {
                        document.getElementById("confirmOverlay").style.display = "none";
                        document.getElementById("confirmPopup").style.display = "none";
                        document.getElementById("successOverlay").style.display = "flex";
                        document.getElementById("successPopup").style.display = "block";

                        setTimeout(() => {
                            document.getElementById("successOverlay").style.display = "none";
                            document.getElementById("successPopup").style.display = "none";
                            location.reload();
                        }, 2000);
                    } else {
                        showErrorPopup(data.message); // Hiển thị thông báo lỗi từ server
                    }
                })
                .catch(error => {
                    console.error("Lỗi gửi dữ liệu:", error);
                    showErrorPopup("Lỗi kết nối đến server!");
                });
        }

        function showErrorPopup(message) {
            document.querySelector("#errorPopup .error-message p").innerText = message;
            document.getElementById("confirmOverlay").style.display = "none";
            document.getElementById("confirmPopup").style.display = "none";
            document.getElementById("errorOverlay").style.display = "block";
            document.getElementById("errorPopup").style.display = "block";
            setTimeout(() => {
                document.getElementById("errorOverlay").style.display = "none";
                document.getElementById("errorPopup").style.display = "none";
            }, 3000);
        }



    </script>
@endsection