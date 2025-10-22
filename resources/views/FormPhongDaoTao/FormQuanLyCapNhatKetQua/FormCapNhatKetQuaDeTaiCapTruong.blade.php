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
    <div class="menu-item">
        <a href="{{ route('phongdaotao.phanbienvabaove')}}">
            <img src="{{ asset('images/carbon_result.png') }}" alt="Register Icon" class="sidebar-icon" />
            <span>Phản biện & bảo vệ</span>
        </a>
    </div>
    <div class="menu-item active">
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
            width: 1380px;
            height: 481.62px;
            position: absolute;
            left: 420px;
            top: 307.94px;
            overflow: hidden;
        }

        .md-01 {
            color: #e7f5ff;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 20px;
            font-weight: 600;
            position: absolute;
            left: 40px;
            top: 19px;
        }

        .nghi-n-c-u-v-s-ti-n-h-a-c-a-virus-trong-t-ng-lai {
            color: #e7f5ff;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 20px;
            font-weight: 600;
            position: absolute;
            left: 300px;
            top: 18px;
        }

        .md-02 {
            color: #e7f5ff;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 20px;
            font-weight: 600;
            position: absolute;
            left: 40px;
            top: 100px;
        }

        .md-04 {
            color: #e7f5ff;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 20px;
            font-weight: 600;
            position: absolute;
            left: 40px;
            top: 236px;
        }

        .md-03 {
            color: #e7f5ff;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 20px;
            font-weight: 600;
            position: absolute;
            left: 40px;
            top: 170px;
        }

        .ng-d-ng-tr-tu-nh-n-t-o-trong-nh-n-di-n-khu-n-m-t {
            color: #e7f5ff;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 20px;
            font-weight: 600;
            position: absolute;
            left: 300px;
            top: 90px;
        }

        .ph-t-tri-n-thu-t-to-n-h-c-m-y-d-o-n-gi-c-phi-u {
            color: #e7f5ff;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 20px;
            font-weight: 600;
            position: absolute;
            left: 300px;
            top: 160px;
        }

        .t-i-u-h-a-hi-u-su-t-m-ng-b-ng-thu-t-to-n-h-c-s-u {
            color: #e7f5ff;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 20px;
            font-weight: 600;
            position: absolute;
            left: 300px;
            top: 230.06px;
        }

        .rectangle-38 {
            background: rgba(37, 82, 147, 0.87);
            width: 1380px;
            height: 64.15px;
            position: absolute;
            left: 420px;
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
            left: 560px;
            top: 242.86px;
            transform-origin: 0 0;
            transform: rotate(90deg) scale(1, 1);
        }

        .madetai {
            color: #E7F5FF;
            font-size: 24px;
            font-family: Inter;
            font-weight: 600;
            word-wrap: break-word;
            position: absolute;
            left: 440px;
            top: 263px;
            width: 107.23px;
            height: 30.14px;
        }

        .tendetai {
            color: #E7F5FF;
            font-size: 24px;
            font-family: Inter;
            font-weight: 600;
            word-wrap: break-word;
            position: absolute;
            left: 900px;
            top: 263.31px;
            width: 200.32px;
            height: 30.14px;
        }

        .ketqua {
            color: #E7F5FF;
            font-size: 24px;
            font-family: Inter;
            font-weight: 600;
            word-wrap: break-word;
            position: absolute;
            left: 1600px;
            top: 260.53px;
            width: 200px;
            height: 29.67px;
        }

        .line-9 {
            margin-top: -1px;
            border-style: solid;
            border-color: #ffffff;
            border-width: 1px 0 0 0;
            width: 549.77px;
            height: 0px;
            position: absolute;
            left: 1500px;
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
            width: 332px;
            height: 58px;
            position: static;
        }

        .rectangle-40 {
            background: #5183CA99;
            border-radius: 10px;
            width: 332px;
            height: 58px;
            position: absolute;
            left: 1000px;
            top: 700px;
        }

        .group-14 {
            width: 103px;
            height: 37px;
            position: static;
        }

        .rectangle-41 {
            background: #5183CA99;
            border-radius: 10px;
            width: 103px;
            height: 37px;
            position: absolute;
            left: 550px;
            top: 700px;
        }

        .btn-save {
            text-align: center;
            font-family: "Rasa";
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 550px;
            top: 700px;
            width: 103px;
            height: 37px;
        }

        .xuatbaocao {
            color: #e7f5ff;
            text-align: center;
            font-family: "Rasa-Medium", sans-serif;
            font-size: 36px;
            font-weight: 500;
            position: absolute;
            left: 639px;
            top: 881px;
            width: 297.05px;
            height: 56.25px;
        }

        .group-12 {
            width: 345px;
            height: 92px;
            position: static;
        }

        .rectangle-402 {
            background: #5183ca;
            border-radius: 10px;
            width: 345px;
            height: 92px;
            position: absolute;
            left: 1056px;
            top: 879px;
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
            font-size: 64px;
            font-family: Rasa;
            font-weight: 500;
            word-wrap: break-word;
            position: absolute;
            left: 460px;
            top: 136px;
        }

        .popup-container {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            z-index: 1000;
            border-radius: 8px;
            width: 300px;
        }

        .popup-content {
            display: flex;
            flex-direction: column;

            margin-left: 70px;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size: 20px;
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

        .confirm-popup .popup-header {
            font-size: 40px;
            font-weight: bold;
            color: #255293;
            font-weight: 500;
            word-wrap: break-word;
            margin-left: 20px;
        }

        .confirm-popup .popup-content {
            font-size: 40px;
            color: #255293;
            font-weight: 500;
            word-wrap: break-word;
            margin-top: 10px;
        }

        .confirm-popup .confirm-btn,
        .confirm-popup .cancel-btn {
            background-color: #5183CA99;
            color: #255293;
            font-size: 36px;
            width: 200px;
            font-family: Rasa;
            font-weight: 500;
            word-wrap: break-word;
            padding: 5px 30px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-weight: 500;
            word-wrap: break-word;
            margin-top: 20px;
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
            padding: 10px 0 10px;
        }

        .popup-header2 {
            display: flex;
            align-items: center;
            /* Canh giữa theo chiều dọc */
            color: #17488C;
            font-family: Inter;
            font-weight: 500;
            font-size: 32px;
            line-height: 100%;
            letter-spacing: 0%;

            padding: 30px 40px 10px;
        }

        .popup-header img {
            padding-right: 10px;
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


        }

        .success-popup img {
            padding-top: 50px;
            display: flex;
            padding-right: 100px;
            padding-left: 20px;
            justify-content: center;
        }

        .success-popup p {
            padding-top: 70px;
            align-items: center;
            justify-content: center;
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

        .error-message p {
            padding-left: 60px;
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
            font-size: 20px;
            line-height: 100%;
            letter-spacing: 0%;

        }

        .custom-table td {
            background: rgba(81, 131, 202, 0.6);
            color: white;
            text-align: center;
            max-height: 100px;
            height: 67px;
            font-family: 'Rasa', serif;
            font-weight: 600;
            font-size: 20px;
            line-height: 100%;
            letter-spacing: 0%;

        }


        .custom-table th:nth-child(1) {
            width: 20%;
        }

        /* Mã đề tài */
        .custom-table th:nth-child(2) {
            width: 60%;
        }

        /* Tên đề tài */
        .custom-table th:nth-child(3) {
            width: 20%;
        }

        .chon-popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 715px;
            height: 875px;
            height: 95%;
            background: #e7f5ff;
            border: 2px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 1001;
            border-radius: 10px;
            text-align: center;

        }

        .custom-table2 {
            padding-top: 50px;
            width: 80%;
            /* Điều chỉnh độ rộng bảng */
            max-width: 1000px;
            /* Giới hạn chiều rộng tối đa */
            margin: auto;
            /* Căn giữa theo chiều ngang */
            text-align: center;
            /* Căn giữa nội dung */
        }

        .custom-table2 th {
            background-color: #255293DE;
            color: white;
            text-align: center;
            height: 64.15px;
            font-family: 'Rasa', serif;
            font-weight: 600;
            font-size: 20px;
            line-height: 100%;
            letter-spacing: 0%;

        }

        .custom-table2 td {
            background: rgba(81, 131, 202, 0.6);
            color: white;
            text-align: center;
            max-height: 100px;
            height: 67px;
            font-family: 'Rasa', serif;
            font-weight: 600;
            font-size: 20px;
            line-height: 100%;
            letter-spacing: 0%;

        }


        .custom-table2 th:nth-child(1) {
            width: 15%;
        }

        /* Mã đề tài */
        .custom-table2 th:nth-child(2) {
            width: 50%;
        }

        /* Tên đề tài */
        .custom-table2 th:nth-child(3) {
            width: 20%;
        }

        .custom-table2 th:nth-child(4) {
            width: 15%;
        }

        .confirm-popup .button-group {
            display: flex;
            justify-content: center;
            gap: 50px;
        }

        .luachon {
            text-align: center;
            font-family: "Rasa";
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 1020px;
            top: 700px;
            width: 297.05px;
            height: 56.25px;
        }
    </style>

    <div class="container mt-4">
        <table class="table table-bordered custom-table responsive-table">
            <thead>
                <tr>
                    <th>Mã đề tài</th>
                    <th>Tên đề tài</th>
                    <th>Kết quả</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deTaiList as $deTai)
                    <tr>
                        <td>{{ $deTai->ma_de_tai }}</td>
                        <td>{{ $deTai->ten_de_tai }}</td>
                        <td onclick="openPopup({{ $deTai->ma_de_tai }}, '{{ $deTai->ket_qua_truong ?? 'Không có giải' }}')"
                            style="cursor: pointer; color: white;">
                            {{ $deTai->ket_qua_truong ?? 'Không có giải' }}
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    <div class="group-13">
        <div class="rectangle-40"></div>
        <button class="luachon"
            style="border: none;background: transparent; cursor: pointer; color: #255293DE; font-size: 24px; font-weight: 600;">
            Lựa chọn đề tài cấp trường
        </button>
    </div>

    <div class="popup-overlay" id="chonOverlay" style="display: none;"></div>
    <div class="chon-popup" id="chonPopup" style="display: none;">
        <div class="popup-header2">
            <p>Lựa chọn đề tài cấp trường</p>
        </div>
        <table class="table table-bordered custom-table2 responsive-table">
            <thead>
                <tr>
                    <th>Mã đề tài</th>
                    <th>Tên đề tài</th>
                    <th>Kết quả</th>
                    <th>Chọn</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deTaiList as $deTai)
                    @if ($deTai->ket_qua_khoa === 'Giải Nhất')
                        <tr>
                            <td>{{ $deTai->ma_de_tai }}</td>
                            <td>{{ $deTai->ten_de_tai }}</td>
                            <td onclick="openPopup({{ $deTai->ma_de_tai }}, '{{ $deTai->ket_qua_khoa }}')" style="cursor: pointer;">
                                {{ $deTai->ket_qua_khoa }}
                            </td>
                            <td>
                                <input type="checkbox" name="de_tai_chon[]" value="{{ $deTai->ma_de_tai }}">
                            </td>
                        </tr>
                    @endif
                @endforeach

            </tbody>
        </table>
        <!-- Nút xác nhận -->
        <div class="group-14">
            <div class="rectangle-41"></div>
            <button class="btn-save" onclick="Luu()" style=" border: none;background: transparent; cursor: pointer; color: #255293DE;
                                                                font-size: 24px; font-weight: 600;">
                Lưu
            </button>
        </div>
    </div>
    </div>
    <div class="truy-v-n-th-ng-tin2">Cập nhật kết quả đề tài cấp trường</div>



    <div class="popup-overlay" id="confirmOverlay" style="display: none;"></div>
    <div class="confirm-popup" id="confirmPopup" style="display: none;">
        <div class="popup-header" style="padding-left: 40px;">
            <span>Cập nhật kết quả</span>
        </div>

        <hr style="border: 1px solid #255293; width: 100%; margin: 0;">

        <div class="popup-content">
            <div style="display: flex; align-items: center; margin: 20px 0;">
                <label for="result"
                    style="margin-right: 10px; color: #17488C; font-size: 40px; font-family: Rasa; font-weight: 500;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                word-wrap: break-word;">Kết
                    quả:</label>
                <input type="text" id="scoreInput"
                    style="width: 455px; height: 52px;font-size:32px;color:#255293; border-radius: 20px; border: none; padding: 0 10px;margin-left:20px; background: #5183CA99;">
            </div>
            <button class="confirm-btn" style="margin-left: 260px; margin-top:50px;"
                onclick="validateScore()"">Xác nhận</button>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!-- Popup thông báo thành công -->
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <div class="
                popup-overlay" id="successOverlay" style="display: none;">
        </div>
        <div class="popup-container success-popup" id="successPopup" style="display: none;">
            <div style="display: flex; gap: 15px;">
                <img class="done" src="{{ asset('images/Done.png') }}" alt="Cập nhật thành công!">
                <p>Cập nhật kết quả thành công</p>
            </div>
        </div>

        {{-- pop lỗi --}}
        <div class="popup-overlay" id="errorOverlay" style="display: none;"></div>
        <div class="confirm-popup" id="errorPopup" style="display: none;">
            <div class="popup-header">
                <img class="megaphone" src="{{ asset('images/Megaphone.png') }}" alt="Thông báo">
                <span>Thông báo</span>
            </div>

            <hr style="border: 1px solid #255293; width: 100%; margin: 0;">

            <div class="error-message">
                <img class="cancel" src="{{ asset('images/Cancel.png') }}">
                <p>Kết quả không được bỏ trống</p>
            </div>
        </div>
        <div class="popup-overlay" id="confirmOverlay2" style="display: none;"></div>
        <div class="confirm-popup" id="confirmPopup2" style="display: none;">
            <div class="popup-header">
                <img class="megaphone" src="{{ asset('images/Megaphone.png') }}" alt="Thông báo">
                <span>Thông báo</span>
            </div>

            <hr style="border: 1px solid #255293; width: 100%; margin: 0;">

            <div class="popup-content">
                <p style="margin-left: -100px;">Bạn có chắc chắn muốn lưu những đề tài<br>này không?</p>
                <div class="button-group">
                    <button class="confirm-btn" onclick="exportluu()">Xác nhận</button>
                    <button class="cancel-btn" onclick="closeConfirm2Popup()">Hủy</button>
                </div>
            </div>
        </div>


        <div class="popup-overlay" id="successOverlay2" style="display: none;"></div>
        <div class="popup-container success-popup" id="successPopup2" style="display: none;">
            <div style="display: flex; gap: 15px;">
                <img class="done" src="{{ asset('images/Done.png') }}" alt="Lựa chọn đề tài cấp trường thành công!">
                <p>Lựa chọn đề tài cấp trường<br>thành công!</p>
            </div>

        </div>
        <script>
            let selectedMaDeTai = null;

            function openPopup(maDeTai, ketQuaKhoa) {
                selectedMaDeTai = maDeTai;
                document.getElementById('scoreInput').value = (ketQuaKhoa === 'Chưa có') ? '' : ketQuaKhoa;
                document.getElementById('confirmOverlay').style.display = 'block';
                document.getElementById('confirmPopup').style.display = 'block';
            }



            function closePopup() {
                document.getElementById('confirmOverlay').style.display = 'none';
                document.getElementById('confirmPopup').style.display = 'none';
            }

            function validateScore() {
                let newScore = document.getElementById('scoreInput').value.trim().toLowerCase(); // Chuyển về chữ thường

                // Danh sách kết quả hợp lệ
                let validResults = {
                    // Giải Nhất
                    "giải nhất": "Giải Nhất",
                    "Giai nhat": "Giải Nhất",
                    "GIẢI NHẤT": "Giải Nhất",
                    "giẢi NhẤt": "Giải Nhất",
                    "GiẢI NHẤT": "Giải Nhất",
                    "gIảI nHấT": "Giải Nhất",

                    // Giải Nhì
                    "giải nhì": "Giải Nhì",
                    "Giai nhi": "Giải Nhì",
                    "GIẢI NHÌ": "Giải Nhì",
                    "giẢi NhÌ": "Giải Nhì",
                    "GiẢI NHÌ": "Giải Nhì",
                    "gIảI nHì": "Giải Nhì",

                    // Giải Ba
                    "giải ba": "Giải Ba",
                    "Giai ba": "Giải Ba",
                    "GIẢI BA": "Giải Ba",
                    "giẢi Ba": "Giải Ba",
                    "GiẢI BA": "Giải Ba",
                    "gIảI bA": "Giải Ba",

                    // Không có giải (giữ nguyên)
                    "không có giải": "Không có giải",
                    "KHÔNG CÓ GIẢI": "Không có giải",
                    "Không có Giải": "Không có giải",
                    "khÔng Có GiẢi": "Không có giải"
                };


                // Chuẩn hóa dữ liệu nhập
                if (validResults.hasOwnProperty(newScore)) {
                    newScore = validResults[newScore];
                } else {
                    showErrorPopup("Kết quả không hợp lệ. Vui lòng nhập: Giải Nhất, Giải Nhì, Giải Ba hoặc Không có giải.");
                    return;
                }

                console.log("Dữ liệu gửi đi:", { ma_de_tai: selectedMaDeTai, ket_qua_truong: newScore });

                fetch('/cap-nhat-ket-qua-truong', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ ma_de_tai: selectedMaDeTai, ket_qua_truong: newScore })
                })
                    .then(response => response.json())
                    .then(data => {
                        console.log("Phản hồi từ server:", data);
                        if (data.success) {
                            closePopup();
                            showSuccessPopup();
                        } else {
                            showErrorPopup(data.error);
                        }
                    })
                    .catch(error => console.error('Lỗi khi gửi request:', error));
            }

            function showErrorPopup(message = "Lỗi! Vui lòng nhập đúng dữ liệu.") {
                document.querySelector(".error-message p").textContent = message;
                document.getElementById('errorOverlay').style.display = 'block';
                document.getElementById('errorPopup').style.display = 'block';

                setTimeout(() => {
                    document.getElementById('errorOverlay').style.display = 'none';
                    document.getElementById('errorPopup').style.display = 'none';
                }, 2000);
            }


            function showSuccessPopup() {
                document.getElementById('successOverlay').style.display = 'block';
                document.getElementById('successPopup').style.display = 'block';

                setTimeout(() => {
                    document.getElementById('successOverlay').style.display = 'none';
                    document.getElementById('successPopup').style.display = 'none';
                    location.reload();
                }, 2000);
            }

            function showErrorPopup() {
                document.getElementById('errorOverlay').style.display = 'block';
                document.getElementById('errorPopup').style.display = 'block';

                setTimeout(() => {
                    document.getElementById('errorOverlay').style.display = 'none';
                    document.getElementById('errorPopup').style.display = 'none';
                }, 2000);
            }
            // Đóng popup khi click ra ngoài
            document.getElementById("confirmOverlay").addEventListener("click", function (event) {
                if (event.target === this) {
                    closePopup();
                }
            });
            document.getElementById("chonOverlay").addEventListener("click", function (event) {
                if (event.target === this) {
                    document.getElementById('chonOverlay').style.display = 'none';
                    document.getElementById('chonPopup').style.display = 'none';
                }
            });
            let selectedDeTai = [];

            function Luu() {
                selectedDeTai = [];

                // Lấy danh sách checkbox đã chọn
                document.querySelectorAll('input[type="checkbox"]:checked').forEach((checkbox) => {
                    selectedDeTai.push(checkbox.value);
                });

                if (selectedDeTai.length === 0) {
                    alert("Vui lòng chọn ít nhất một đề tài!");
                    return;
                }
                document.getElementById('chonOverlay').style.display = 'none';
                document.getElementById('chonPopup').style.display = 'none';
                // Hiển thị popup xác nhận
                document.getElementById("confirmOverlay2").style.display = "block";
                document.getElementById("confirmPopup2").style.display = "block";
            }

            function closeConfirm2Popup() {
                document.getElementById("confirmOverlay2").style.display = "none";
                document.getElementById("confirmPopup2").style.display = "none";
            }

            function exportluu() {
                closeConfirm2Popup(); // Đóng popup xác nhận trước khi gửi yêu cầu

                fetch("{{ route('phongdaotao.luuDeTaiCapTruong') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({ deTaiIds: selectedDeTai })
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Hiển thị popup thành công
                            document.getElementById("successOverlay2").style.display = "block";
                            document.getElementById("successPopup2").style.display = "block";

                            setTimeout(() => {
                                location.reload(); // Reload trang sau 2 giây
                            }, 2000);
                        } else {
                            alert("Đã xảy ra lỗi khi cập nhật!");
                        }
                    })
                    .catch(error => console.error("Lỗi:", error));
            }
            document.addEventListener("DOMContentLoaded", function () {
                // Lấy các phần tử
                const openPopupBtn = document.querySelector(".luachon");
                const closePopupBtn = document.querySelector(".close-btn");
                const popup = document.getElementById("chonPopup");
                const overlay = document.getElementById("chonOverlay");

                // Mở popup khi nhấn vào nút "Lựa chọn đề tài cấp trường"
                openPopupBtn.addEventListener("click", function () {
                    popup.style.display = "block";
                    overlay.style.display = "block";
                });

                // Đóng popup khi nhấn vào nút đóng hoặc overlay
                closePopupBtn.addEventListener("click", function () {
                    popup.style.display = "none";
                    overlay.style.display = "none";
                });

                overlay.addEventListener("click", function () {
                    popup.style.display = "none";
                    overlay.style.display = "none";
                });
            });

        </script>
@endsection