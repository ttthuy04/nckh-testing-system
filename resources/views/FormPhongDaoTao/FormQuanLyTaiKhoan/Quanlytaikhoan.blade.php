@extends('layouts.PDTlayout')

@section('sidebar')
    <div class="menu-item">
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
    <div class="menu-item">
        <a href="{{ route('phongdaotao.capnhatketqua') }}">
            <img src="{{ asset('images/New Document.png') }}" alt="Report Icon" class="sidebar-icon" />
            <span>Cập nhật kết quả trình bày bảo vệ</span>
        </a>
    </div>
    <div class="menu-item ">
        <a href="{{ route('phongdaotao.truyvanthongtin') }}">
            <img src="{{ asset('images/mdi_court-hammer.png') }}" alt="Invitation Icon" class="sidebar-icon" />
            <span>Truy vấn thông tin</span>
        </a>
    </div>
    <div class="menu-item active">
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
            font-family: Rasa;
            font-weight: 500;
            font-size: 40px;
            color: #255293;
            word-wrap: break-word;
            margin-left: 20px;
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
            font-size: 36px;
            font-weight: 700;
            color: #255293;
            padding: 20px 30px 20px;
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


        .btn-warning img,
        .btn-danger img {
            width: 33px;
            /* Điều chỉnh kích thước ảnh */
            height: 32px;
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
            margin-top: 70px;
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
            margin-top: 0px;
        }

        .form-label {
            color: #17488C;
            font-size: 32px;
            font-family: Rasa;
            font-weight: 700;
            width: 300px;
            display: flex;

            padding-left: 0px;
        }



        .form-input {
            width: 640px;
            height: 51px;
            border-radius: 10px;
            /* border: 1px solid #255293; */
            border: none;
            padding-left: 10px;
            margin-bottom: 20px;
            color: white;
            background: #5183CA99;
            ffont-family: Inter;
            font-weight: 500;
            font-size: 20px;
            line-height: 100%;
            letter-spacing: 0%;

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

            color: #255293;
            padding: 5px;
        }

        .popup-header2 span {
            margin-left: 10px;
            font-family: Rasa;
            font-weight: 500;
            font-size: 40px;
            line-height: 100%;
            letter-spacing: 0%;

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
            /* Căn giữa dọc (nếu cần) */
        }

        .custom-table {
            padding-top: 120px;
            width: 100%;
            /* Điều chỉnh độ rộng bảng */
            max-width: 987px;
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
            font-family: Inter;
            font-weight: 600;
            font-size: 18px;
            line-height: 100%;
            letter-spacing: 0%;


        }

        .custom-table td {
            background: rgba(81, 131, 202, 0.6);
            color: #255293;
            text-align: center;
            max-height: 100px;
            height: 50px;
            font-family: Inter;
            font-weight: 600;
            font-size: 18px;
            line-height: 100%;
            letter-spacing: 0%;


        }


        .custom-table th:nth-child(1) {
            width: 35%;
        }

        /* Mã đề tài */
        .custom-table th:nth-child(2) {
            width: 25%;
            max-width: 40%;
        }

        /* Tên đề tài */
        .custom-table th:nth-child(3) {
            width: 25%;
        }

        /* Ngày đăng ký */
        .custom-table th:nth-child(4) {
            width: 15%;
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

        .confirm-popup .popup-content {
            font-size: 40px;
            color: #255293;
            font-weight: 500;
            word-wrap: break-word
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
            padding-right: 50px;
            padding-left: 30px;
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

        .header-container {
            display: flex;
            /* Căn h1 bên trái, button bên phải */
            justify-content: flex-end;
            /* Căn giữa theo chiều dọc */
            /* Khoảng cách với nội dung bên dưới */
        }

        .add-account-btn {
            display: flex;
            align-items: center;
            /* Căn icon và text cùng dòng */
            gap: 8px;
            background-color: #5183CA;
            /* Màu xanh */
            color: white;
            font-family: Rasa;
            font-weight: 500;
            font-size: 24px;
            line-height: 100%;
            letter-spacing: 0%;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s;
            width: 249px;
            height: 51px;
            margin-right: 20px;
            margin-top: 100px;
            margin-bottom: -100px;
        }

        .add-role-btn {
            display: flex;
            align-items: center;
            /* Căn icon và text cùng dòng */
            gap: 8px;
            background-color: #5183CA;
            /* Màu xanh */
            color: white;
            font-family: Rasa;
            font-weight: 500;
            font-size: 24px;
            line-height: 100%;
            letter-spacing: 0%;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s;
            width: 192px;
            height: 51px;
            margin-right: 20px;
            margin-top: 100px;
            margin-bottom: -100px;
        }

        .add-account-btn:hover,
        .add-role-btn:hover {
            background-color: #3A6EA5;
            /* Màu xanh đậm hơn khi hover */
        }

        .header-container img {
            width: 36px;
            height: 36px;
        }

        .news-popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #eaf4ff;

            border-radius: 10px;
            text-align: center;

        }

        .news-popup input,
        .news-popup textarea {
            width: 667px;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .button-group {
            display: flex;
            justify-content: flex-end;
            gap: 20px;
            margin-top: 20px;
            margin-right: 50px;
            position: sticky;
            bottom: 0;
            padding: 10px;
            gap: 10px;
        }

        .button-group2 {
            display: flex;
            justify-content: flex-end;
            gap: 20px;
            margin-top: 170px;
            margin-right: 70px;
            position: sticky;
            bottom: 0;
            padding: 10px;
            gap: 20px;
        }

        .news-popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 1103px;
            height: 616px;

            background: #e7f5ff;
            border: 2px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 1001;
            border-radius: 10px;
            text-align: center;

        }

        .news-popup .confirm-btn {
            background-color: #5183CA99;
            color: #17488C;
            font-size: 32px;
            width: 172px;
            height: 51px;
            font-family: Rasa;
            padding: 5px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 700;
            word-wrap: break-word;
        }

        .news-popup .cancel-btn {
            background-color: #5183CA99;
            color: #17488C;
            font-size: 32px;
            width: 123px;
            height: 51px;
            font-family: Rasa;
            font-weight: 700;
            word-wrap: break-word;
            padding: 5px 30px;
            border: none;
            border-radius: 10px;
            cursor: pointer;

        }

        .news-popup .confirm-btn:hover,
        .news-popup .cancel-btn:hover {
            background-color: #1d417a;
        }

        .news-popup .popup-content {
            font-size: 40px;
            color: #255293;
            font-weight: 500;
            word-wrap: break-word;
            margin-top: 10px;
            margin-left: 40px;
        }

        #vai_tro,
        #edit_vai_tro {
            appearance: none;
            /* Ẩn mũi tên mặc định */
            -webkit-appearance: none;
            -moz-appearance: none;

            background-color: #5183CA99;
            widght: 150px;
            height: 51px;
            /* Màu nền */
            border-radius: 10px;
            /* Bo góc */
            border: none;
            /* Xóa viền mặc định */
            padding: 8px 12px;
            /* Thêm padding để dễ nhìn */
            color: white;
            font-family: Inter;
            font-weight: 600;
            font-size: 20px;
            outline: none;
            /* Xóa đường viền khi focus */
            cursor: pointer;

            background-image: url("{{ asset('images/Expand Arrow.png') }}");
            /* Đường dẫn ảnh */
            background-repeat: no-repeat;
            background-position: right 3px center;
            /* Đặt vị trí ảnh */
            background-size: 40px;
            /* Kích thước ảnh */
            padding-right: 40px;
            /* Chừa khoảng trống cho ảnh */
        }

        option {
            color: #17488C;
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

        .error-popup {
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
            z-index: 1002;
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

        #errorOverlay {
            z-index: 1001;
        }

        .error-popup .megaphone {
            width: 45px;
            /* Kích thước icon */
            height: 73px;
            margin-right: 10px;
            margin-left: 20px;
            /* Tạo khoảng cách giữa icon và chữ */
        }

        .error-popup .cancel {
            width: 90px;
            /* Kích thước icon */
            height: 90px;

            /* Tạo khoảng cách giữa icon và chữ */
        }

        .custom-table2 {
            padding-top: 50px;
            width: 100%;
            /* Điều chỉnh độ rộng bảng */
            max-width: 637px;
            height: 600px;
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
            height: 62px;
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
            height: 62px;
            font-family: 'Rasa', serif;
            font-weight: 600;
            font-size: 20px;
            line-height: 100%;
            letter-spacing: 0%;

        }


        .custom-table2 th:nth-child(1) {
            width: 70%;
        }

        /* Mã đề tài */
        .custom-table2 th:nth-child(2) {
            width: 30%;
        }

        .vaitro-popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 736px;
            height: 763px;
            background: #e7f5ff;
            border: 2px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 1001;
            border-radius: 10px;
            text-align: center;

        }

        .vaitro-popup {
            max-width: 736px;
            /* Điều chỉnh độ rộng popup */
            max-height: 763px;
            /* Giới hạn chiều cao popup */
            overflow: hidden;
            /* Ẩn phần thừa */
            display: flex;
            flex-direction: column;
        }

        .vaitro-popup .responsive-table {
            flex-grow: 1;
            /* Chiếm phần còn lại trong popup */
            overflow-y: auto;
            /* Cuộn dọc khi nội dung quá dài */
            max-height: 550px;
            /* Giới hạn chiều cao bảng */
        }

        .vaitro-popup thead {
            position: sticky;
            top: 0;
            background-color: white;
            z-index: 2;
        }

        .vaitro-popup .confirm-btn {
            background-color: #5183CA99;
            color: #17488C;
            font-size: 32px;
            width: 172px;
            height: 51px;
            font-family: Rasa;
            padding: 5px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 700;
            word-wrap: break-word;
        }

        .vaitro-popup .cancel-btn {
            background-color: #5183CA99;
            color: #17488C;
            font-size: 32px;
            width: 123px;
            height: 51px;
            font-family: Rasa;
            font-weight: 700;
            word-wrap: break-word;
            padding: 5px 30px;
            border: none;
            border-radius: 10px;
            cursor: pointer;

        }

        .vaitro-popup .confirm-btn:hover,
        .vaitro-popup .cancel-btn:hover {
            background-color: #1d417a;
        }

        .vai-tro-select {
            appearance: none;
            /* Ẩn mũi tên mặc định */
            -webkit-appearance: none;
            -moz-appearance: none;

            background-color: #5183CA;
            widght: 145px;
            height: 36px;
            /* Màu nền */
            /* Bo góc */
            border: none;
            /* Xóa viền mặc định */
            padding: 8px 12px;
            /* Thêm padding để dễ nhìn */
            color: white;
            font-family: Inter;
            font-weight: 600;
            font-size: 18px;
            outline: none;
            /* Xóa đường viền khi focus */
            cursor: pointer;

            background-image: url("{{ asset('images/material-symbols_arrow-drop-down-rounded.png') }}");
            /* Đường dẫn ảnh */
            background-repeat: no-repeat;
            background-position: right 3px center;
            /* Đặt vị trí ảnh */
            background-size: 24px;
            /* Kích thước ảnh */
            padding-right: 40px;
        }

        .success-popup2 {
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

        .success-popup2 img {
            padding-top: 50px;
            display: flex;
            padding-left: 20px;
            justify-content: center;
        }

        .success-popup2 p {
            padding-top: 70px;
            align-items: center;
            justify-content: center;
            color: #255293;
            font-size: 39px;
            font-family: Rasa;
            font-weight: 500;
            word-wrap: break-word;
        }
    </style>
    <div>
        <div class="header-container">
            <button class="add-role-btn" onclick="openPhanPopup()">
                <img src="{{ asset('images/mdi_account-switch.png') }}" alt="" />Phân quyền</button>
            <button class="add-account-btn" onclick="openAddAcPopup()">
                <img src="{{ asset('images/material-symbols_add.png') }}" alt="" />Thêm tài khoản</button>
        </div>
        <table class="table table-bordered custom-table responsive-table text-center">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Mật khẩu</th>
                    <th>Vai trò</th>
                    <th>Tác vụ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($taiKhoans as $tk)
                    <tr>
                        {{-- <td>{{ $tk->ten_dang_nhap }}</td> <!-- Lấy tên từ các bảng khác theo email --> --}}
                        <td>{{ $tk->email }}</td>
                        <td onclick="togglePassword({{ $loop->index }}, '{{ $tk->mat_khau }}')" style="cursor: pointer;">
                            <span id="passwordDisplay_{{ $loop->index }}">••••••••••</span>
                        </td>
                        {{-- <td>{{ $tk->mat_khau }}</td> --}}
                        {{-- <td>
                            @if ($tk->vai_tro === 'Giảng viên')
                            {{ optional($tk->giangVien)->sdt ?? 'N/A' }}
                            @else
                            N/A
                            @endif
                        </td> <!-- Số điện thoại nếu là Giảng viên --> --}}
                        <td>{{ $tk->vai_tro }}</td>
                        <td style="display: flex; align-items: center; padding-left: 10px;">
                            <!-- Nút Sửa -->
                            <button class="btn btn-warning" onclick="openEditPopup('{{ $tk->email }}')"
                                style="background: none; border: none; cursor: pointer;">
                                <img class="megaphone" src="{{ asset('images/bx_edit.png') }}" alt="Chỉnh sửa">
                            </button>

                            <!-- Nút Xóa -->
                            <form action="{{ route('taikhoan.destroy', ['email' => $tk->email]) }}" method="POST"
                                style="margin: 0;">
                                @csrf
                                @method('DELETE')
                                <!-- Nút Xóa -->
                                <button type="button" class="btn btn-danger"
                                    style="background: none; border: none; cursor: pointer;"
                                    onclick="openConfirmDeletePopup('{{ $tk->email }}')">
                                    <img class="megaphone" src="{{ asset('images/iconamoon_trash-bold.png') }}" alt="Xóa">
                                </button>

                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Popup thông báo thành công -->
    <div class="popup-overlay" id="addsuccessOverlay" style="display: none;"></div>
    <div class="popup-container success-popup" id="addsuccessPopup" style="display: none;">
        <div style="display: flex; gap: 15px;">
            <img class="done" src="{{ asset('images/Done.png') }}" alt="">
            <p>Thêm tài khoản thành công</p>
        </div>
    </div>

    <!-- Form thêm tài khoản -->
    <div class="popup-overlay" id="newsOverlay" style="display: none;"></div>
    <div class="news-popup" id="newsPopup" style="display: none;">
        <div class="popup-header">
            <p>Thêm tài khoản người dùng</p>
        </div>
        <hr style="border: 1px solid #255293; width: 100%; margin: 0;">
        <div class="popup-content">
            <div class="form-group">
                <label class="form-label">Email</label>
                <input class="form-input" type="email" name="email" id="email">
            </div>

            <div class="form-group">
                <label class="form-label">Mật khẩu</label>
                <input class="form-input" type="text" name="mat_khau" id="mat_khau">
            </div>

            <div class="form-group">
                <label class="form-label">Vai trò</label>
                <select name="vai_tro" id="vai_tro">
                    <option value="Admin">Admin</option>
                    <option value="Giảng viên">Giảng viên</option>
                    <option value="Sinh viên">Sinh viên</option>
                    <option value="Nhân viên">Nhân viên</option>
                </select>
            </div>

            <div class="button-group2">
                <button type="button" class="confirm-btn" onclick="saveAccount()">Xác nhận</button>

                <button type="button" class="cancel-btn" onclick="closeAddAcPopup()">Hủy</button>
            </div>
        </div>
    </div>
    <!-- Popup chỉnh sửa tài khoản -->
    <div class="popup-overlay" id="editOverlay" style="display: none;"></div>
    <div class="news-popup" id="editPopup" style="display: none;">
        <div class="popup-header">
            <p>Chỉnh sửa tài khoản người dùng</p>
        </div>
        <hr style="border: 1px solid #255293; width: 100%; margin: 0;">
        <div class="popup-content">
            <div class="form-group">
                <label class="form-label">Email</label>
                <input class="form-input" type="email" id="edit_email">
            </div>

            <div class="form-group">
                <label class="form-label">Mật khẩu</label>
                <input class="form-input" type="text" id="edit_mat_khau" required placeholder="Mật khẩu mới">
            </div>

            <div class="form-group">
                <label class="form-label">Vai trò</label>
                <select id="edit_vai_tro">
                    <option value="Admin">Admin</option>
                    <option value="Giảng viên">Giảng viên</option>
                    <option value="Sinh viên">Sinh viên</option>
                    <option value="Nhân viên">Nhân viên</option>
                </select>
            </div>

            <div class="button-group2">
                <button type="button" class="confirm-btn" onclick="openConfirmEditPopup()">Xác nhận</button>
                <button type="button" class="cancel-btn" onclick="closeEditPopup()">Hủy</button>
            </div>
        </div>
    </div>
    <!-- Popup Phân quyền -->
    <div class="popup-overlay" id="vaitroOverlay" style="display: none;"></div>
    <div class="vaitro-popup" id="vaitroPopup" style="display: none;">
        <div class="popup-header">
            <p>Phân quyền người dùng</p>
        </div>
        <hr style="border: 1px solid #255293; width: 100%; margin: 0;">
        <div class="responsive-table">
            <table class="table table-bordered custom-table2">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Vai trò</th>
                    </tr>
                </thead>
                <tbody id="phanQuyenBody">
                    @foreach ($taiKhoans as $tk)
                        <tr>
                            <td>{{ $tk->email }}</td>
                            <td>
                                <select class="vai-tro-select" data-email="{{ $tk->email }}">
                                    <option value="Admin" {{ $tk->vai_tro == 'Admin' ? 'selected' : '' }}>Admin</option>
                                    <option value="Giảng viên" {{ $tk->vai_tro == 'Giảng viên' ? 'selected' : '' }}>Giảng viên
                                    </option>
                                    <option value="Sinh viên" {{ $tk->vai_tro == 'Sinh viên' ? 'selected' : '' }}>Sinh viên
                                    </option>
                                    <option value="Nhân viên" {{ $tk->vai_tro == 'Nhân viên' ? 'selected' : '' }}>Nhân viên
                                    </option>
                                </select>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="button-group">
            <button type="button" class="confirm-btn" onclick="openConfirmPQPopup()">Xác nhận</button>
            <button type="button" class="cancel-btn" onclick="huyPhanQuyen()">Hủy</button>
        </div>
    </div>

    <!-- Popup Thành công -->
    <div class="popup-overlay" id="successPQOverlay" style="display: none;"></div>
    <div class="popup-container success-popup2" id="successPQPopup" style="display: none;">
        <div style="display: flex;">
            <img class="done" src="{{ asset('images/Done.png') }}" alt="">
            <p>Cập nhật quyền tài khoản thành công</p>
        </div>
    </div>
    <div class="popup-overlay" id="confirmEditOverlay" style="display: none;"></div>
    <div class="confirm-popup" id="confirmEditPopup" style="display: none;">
        <div class="popup-header2">
            <img class="megaphone" src="{{ asset('images/Megaphone.png') }}" alt="Thông báo">
            <span>Thông báo</span>
        </div>

        <hr style="border: 1px solid #255293; width: 100%; margin: 0;">

        <div class="popup-content" style="padding-top: 30px;">
            <p style="font-size: 36px; ">Bạn có chắc chắn muốn sửa tài khoản này không?</p>
            <button class="confirm-btn" onclick="confirmEdit()">Xác nhận</button>
            <button class="cancel-btn" onclick="closeConfirmEditPopup()">Hủy</button>
        </div>
    </div>

    <div class="popup-overlay" id="confirmDeleteOverlay" style="display: none;"></div>
    <div class="confirm-popup" id="confirmDeletePopup" style="display: none;">
        <div class="popup-header2">
            <img class="megaphone" src="{{ asset('images/Megaphone.png') }}" alt="Thông báo">
            <span>Thông báo</span>
        </div>

        <hr style="border: 1px solid #255293; width: 100%; margin: 0;">

        <div class="popup-content" style="padding-top: 30px;">
            <p style="font-size: 36px; ">Bạn có chắc chắn muốn xóa tài khoản này không?</p>
            <button class="confirm-btn" onclick="confirmDelete()">Xác nhận</button>
            <button class="cancel-btn" onclick="closeConfirmDeletePopup()">Hủy</button>
        </div>
    </div>

    <div class="popup-overlay" id="successDeleteOverlay" style="display: none;"></div>
    <div class="popup-container success-popup" id="successDeletePopup" style="display: none;">
        <div style="display: flex; gap: 15px;">
            <img class="done" src="{{ asset('images/Done.png') }}" alt="">
            <p>Xóa tài khoản thành công</p>
        </div>
    </div>

    <div class="popup-overlay" id="successEditOverlay" style="display: none;"></div>
    <div class="popup-container success-popup" id="successEditPopup" style="display: none;">
        <div style="display: flex; gap: 15px;">
            <img class="done" src="{{ asset('images/Done.png') }}" alt="">
            <p>Sửa tài khoản thành công</p>
        </div>
    </div>

    <div class="popup-overlay" id="errorOverlay" style="display: none;"></div>
    <div class="popup-container error-popup" id="errorPopup" style="display: none;">
        <div class="popup-header2">
            <img class="megaphone" src="{{ asset('images/Megaphone.png') }}" alt="Thông báo">
            <span>Thông báo</span>
        </div>

        <hr style="border: 1px solid #255293; width: 100%; margin: 0;">

        <div class="error-message">
            <img class="cancel" src="{{ asset('images/Cancel.png') }}">
            <p>Vui lòng nhập đầy đủ thông tin!</p>
        </div>
    </div>

    <!-- Popup Xác nhận phân quyền -->
    <div class="popup-overlay" id="confirmPQOverlay" style="display: none;"></div>
    <div class="confirm-popup" id="confirmPQPopup" style="display: none;">
        <div class="popup-header2">
            <img class="megaphone" src="{{ asset('images/Megaphone.png') }}" alt="Thông báo">
            <span>Thông báo</span>
        </div>

        <hr style="border: 1px solid #255293; width: 100%; margin: 0;">

        <div class="popup-content" style="padding-top: 30px;">
            <p style="font-size: 36px;">Bạn có chắc chắn muốn cập nhật lại quyền không?</p>
            <button class="confirm-btn" onclick="confirmPhanQuyen()">Xác nhận</button>
            <button class="cancel-btn" onclick="closeConfirmPQPopup()">Hủy</button>
        </div>
    </div>

    <script>
        function saveAccount() {
            let email = document.getElementById("email").value.trim();
            let mat_khau = document.getElementById("mat_khau").value.trim();
            let vai_tro = document.getElementById("vai_tro").value;

            let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

            if (email === "" || mat_khau === "" || vai_tro === "") {
                document.getElementById('errorOverlay').style.display = 'block';
                document.getElementById('errorPopup').style.display = 'block';

                // Ẩn popup sau 2 giây
                setTimeout(() => {
                    document.getElementById('errorOverlay').style.display = 'none';
                    document.getElementById('errorPopup').style.display = 'none';
                }, 2000);

                return;
            }

            let data = {
                email: email,
                mat_khau: mat_khau,
                vai_tro: vai_tro
            };

            fetch("/taikhoan/store", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": csrfToken,
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({
                    email: email,
                    mat_khau: mat_khau,
                    vai_tro: vai_tro
                })
            })
                .then(response => response.json()) // Chuyển đổi response thành JSON
                .then(data => {
                    if (data.success) {
                        closeAddAcPopup();
                        showaddSuccessPopup();
                        setTimeout(() => location.reload(), 2000);
                    } else {
                        alert("Lỗi: " + data.message);
                    }
                })
                .catch(error => {
                    console.error("Lỗi:", error);
                    alert("Có lỗi xảy ra khi thêm tài khoản. Vui lòng thử lại.");
                });
        }

        // Hiển thị popup thêm tài khoản
        function openAddAcPopup() {
            document.getElementById("newsOverlay").style.display = "block";
            document.getElementById("newsPopup").style.display = "block";
        }

        // Ẩn popup thêm tài khoản
        function closeAddAcPopup() {
            document.getElementById("newsOverlay").style.display = "none";
            document.getElementById("newsPopup").style.display = "none";
        }

        // Hiển thị popup thông báo thành công
        function showaddSuccessPopup() {
            document.getElementById("addsuccessOverlay").style.display = "block";
            document.getElementById("addsuccessPopup").style.display = "block";
            setTimeout(() => {
                document.getElementById("addsuccessOverlay").style.display = "none";
                document.getElementById("addsuccessPopup").style.display = "none";
            }, 2000);
        }

        // Mở popup sửa tài khoản và điền dữ liệu vào form
        function openEditPopup(email) {
            console.log("Gửi yêu cầu lấy dữ liệu cho email:", email); // Debug

            fetch(`/taikhoan/${email}/edit`)
                .then(response => response.json())
                .then(data => {
                    console.log("Dữ liệu nhận được:", data); // Debug

                    // Gán dữ liệu vào input
                    document.getElementById('edit_email').value = data.email;
                    document.getElementById('edit_mat_khau').value = data.mat_khau; // Không hiển thị mật khẩu cũ
                    document.getElementById('edit_vai_tro').value = data.vai_tro; // Chắc chắn ID đúng

                    // Hiển thị popup
                    document.getElementById('editOverlay').style.display = 'block';
                    document.getElementById('editPopup').style.display = 'block';
                })
                .catch(error => console.error('Lỗi khi lấy dữ liệu tài khoản:', error));
        }


        // Đóng popup sửa tài khoản
        function closeEditPopup() {
            document.getElementById('editOverlay').style.display = 'none';
            document.getElementById('editPopup').style.display = 'none';
        }
        function showeditSuccessPopup() {
            document.getElementById("successEditOverlay").style.display = "block";
            document.getElementById("successEditPopup").style.display = "block";
            setTimeout(() => {
                document.getElementById("successEditOverlay").style.display = "none";
                document.getElementById("successEditPopup").style.display = "none";
            }, 2000);
        }
        // Mở popup xác nhận trước khi gửi yêu cầu cập nhật
        function openConfirmEditPopup() {
            closeEditPopup();
            document.getElementById("confirmEditOverlay").style.display = "block";
            document.getElementById("confirmEditPopup").style.display = "block";
        }

        // Đóng popup xác nhận
        function closeConfirmEditPopup() {
            openEditPopup(document.getElementById('edit_email').value);
            document.getElementById("confirmEditOverlay").style.display = "none";
            document.getElementById("confirmEditPopup").style.display = "none";
        }

        // Gửi yêu cầu cập nhật sau khi xác nhận
        function confirmEdit() {
            document.getElementById("confirmEditOverlay").style.display = "none";
            document.getElementById("confirmEditPopup").style.display = "none";
            updateAccount(); // Gửi yêu cầu cập nhật
        }
        // Gửi yêu cầu cập nhật tài khoản
        function updateAccount() {
            let email = document.getElementById('edit_email').value;
            let mat_khau = document.getElementById('edit_mat_khau').value;
            let vai_tro = document.getElementById('edit_vai_tro').value;


            // Kiểm tra nếu có input trống
            if (email === "" || mat_khau === "" || vai_tro === "") {
                document.getElementById('errorOverlay').style.display = 'block';
                document.getElementById('errorPopup').style.display = 'block';

                // Ẩn popup sau 2 giây
                setTimeout(() => {
                    document.getElementById('errorOverlay').style.display = 'none';
                    document.getElementById('errorPopup').style.display = 'none';
                }, 2000);

                return;
            }

            let data = {
                email: email,
                mat_khau: mat_khau,
                vai_tro: vai_tro
            };
            fetch(`/taikhoan/update`, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    email: email,
                    mat_khau: mat_khau,
                    vai_tro: vai_tro
                })
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        showeditSuccessPopup();
                        closeEditPopup();
                        setTimeout(() => location.reload(), 1000); // Reload lại trang để thấy thay đổi
                    } else {
                        alert("Lỗi khi cập nhật tài khoản!");
                    }
                })
                .catch(error => console.error("Lỗi khi gửi yêu cầu:", error));
        }



        let deleteEmail = null; // Lưu email cần xóa

        function openConfirmDeletePopup(email) {
            deleteEmail = email;
            document.getElementById("confirmDeletePopup").style.display = "block";
            document.getElementById("confirmDeleteOverlay").style.display = "block";
        }

        function closeConfirmDeletePopup() {
            document.getElementById("confirmDeletePopup").style.display = "none";
            document.getElementById("confirmDeleteOverlay").style.display = "none";
        }

        function confirmDelete() {
            if (deleteEmail) {
                let form = document.createElement("form");
                form.method = "POST";
                form.action = `/quanlytaikhoan/${deleteEmail}`; // Route xóa
                form.style.display = "none";

                let csrfToken = document.createElement("input");
                csrfToken.type = "hidden";
                csrfToken.name = "_token";
                csrfToken.value = "{{ csrf_token() }}";

                let methodInput = document.createElement("input");
                methodInput.type = "hidden";
                methodInput.name = "_method";
                methodInput.value = "DELETE";

                form.appendChild(csrfToken);
                form.appendChild(methodInput);
                document.body.appendChild(form);
                form.submit();
            }
        }

        // Kiểm tra nếu có thông báo xóa thành công từ session
        window.onload = function () {
            @if(session('delete_success'))
                showSuccessPopup();
            @endif
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            };

        function showSuccessPopup() {
            document.getElementById("successDeletePopup").style.display = "block";
            document.getElementById("successDeleteOverlay").style.display = "block";

            // Tự động ẩn sau 2 giây
            setTimeout(() => {
                document.getElementById("successDeletePopup").style.display = "none";
                document.getElementById("successDeleteOverlay").style.display = "none";
            }, 2000);
        }
        function togglePassword(index, password) {
            let passwordDisplay = document.getElementById(`passwordDisplay_${index}`);

            if (passwordDisplay.innerText === "••••••••••") {
                passwordDisplay.innerText = password; // Hiện mật khẩu thật
            } else {
                passwordDisplay.innerText = "••••••••••"; // Ẩn lại mật khẩu
            }
        }

        // Mở popup phân quyền
        function openPhanPopup() {
            document.getElementById("vaitroOverlay").style.display = "block";
            document.getElementById("vaitroPopup").style.display = "block";
        }

        // Đóng popup phân quyền
        function huyPhanQuyen() {
            document.getElementById("vaitroOverlay").style.display = "none";
            document.getElementById("vaitroPopup").style.display = "none";
        }

        // Mở popup xác nhận trước khi phân quyền
        function openConfirmPQPopup() {
            huyPhanQuyen();
            document.getElementById("confirmPQOverlay").style.display = "block";
            document.getElementById("confirmPQPopup").style.display = "block";
        }

        // Đóng popup xác nhận
        function closeConfirmPQPopup() {
            openPhanPopup();
            document.getElementById("confirmPQOverlay").style.display = "none";
            document.getElementById("confirmPQPopup").style.display = "none";
        }

        // Mở popup thành công
        function showPQSuccessPopup() {
            document.getElementById("successPQOverlay").style.display = "block";
            document.getElementById("successPQPopup").style.display = "block";

            setTimeout(() => {
                document.getElementById("successPQOverlay").style.display = "none";
                document.getElementById("successPQPopup").style.display = "none";
            }, 2000);
        }

        // Gửi yêu cầu cập nhật vai trò sau khi xác nhận
        function confirmPhanQuyen() {
            closeConfirmPQPopup(); // Đóng popup xác nhận

            let updates = [];
            document.querySelectorAll(".vai-tro-select").forEach(select => {
                let email = select.getAttribute("data-email");
                let vai_tro = select.value;
                updates.push({ email, vai_tro });
            });

            fetch("/taikhoan/phanquyen", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({ updates })
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        showPQSuccessPopup();
                        huyPhanQuyen();
                        setTimeout(() => location.reload(), 2000);
                    } else {
                        alert("Có lỗi xảy ra khi cập nhật vai trò!");
                    }
                })
                .catch(error => console.error("Lỗi khi gửi yêu cầu:", error));
        }


    </script>


@endsection