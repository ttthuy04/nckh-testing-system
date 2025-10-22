@extends('layouts.PDTlayout')

@section('sidebar')
    <div class="menu-item active">
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
    <div class="menu-item">
        <a href="{{ route('phongdaotao.quanlytaikhoan') }}">
            <img src="{{ asset('images/solar_user-linear.png') }}" alt="Invitation Icon" class="sidebar-icon" />
            <span>Quản lý tài khoản</span>
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
            color: #255293 font-family: Rasa;
            font-size: 24px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            text-decoration: underline;
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

        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: none;
        }

        .news-popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #eaf4ff;
            padding: 20px;
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
            justify-content: center;
            gap: 50px;
        }

        .success-popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #eaf4ff;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            display: none;
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

        .news-popup .confirm-btn,
        .news-popup .cancel-btn {
            background-color: #5183CA99;
            color: #17488C;
            font-size: 36px;
            width: 181.72030639648438px;
            height: 51px;
            font-family: Rasa;
            font-weight: 500;
            word-wrap: break-word;
            padding: 5px 30px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 500;
            word-wrap: break-word;


        }



        .news-popup .confirm-btn:hover,
        .news-popup .cancel-btn:hover {
            background-color: #1d417a;
        }

        .button-group {

            margin-left: 550px;
            margin-top: 50px;
            gap: 10px;
        }

        .popup-header {
            display: flex;
            align-items: center;
            /* Canh giữa theo chiều dọc */
            color: #17488C;
            font-family: Rasa;
            font-weight: 500;
            font-size: 24px;
            line-height: 100%;
            letter-spacing: 0%;
            padding: 20px;
        }

        .popup-content {

            overflow-y: auto;
            /* Điều chỉnh khoảng cách giữa các dòng */
            font-family: Rasa;
            font-weight: 700;
            font-size: 32px;
            line-height: 100%;
            letter-spacing: 0%;
            padding-left: 20px;
        }

        .popup-content3 {

            overflow-y: auto;
            /* Điều chỉnh khoảng cách giữa các dòng */
            font-family: Rasa;
            font-weight: 700;
            font-size: 32px;
            line-height: 100%;
            letter-spacing: 0%;
            padding-left: 20px;
            color: #255293;
            font-weight: 500;
            word-wrap: break-word;
            margin-top: 10px;
        }

        .news-popup .popup-content {
            font-size: 40px;
            color: #255293;
            font-weight: 500;
            word-wrap: break-word;
            margin-top: 10px;
        }

        .form-group {
            display: flex;
            align-items: top;
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

        .input-container {
            position: relative;
            width: 200px;
            height: 48.23601531982422px;
            border-radius: 10px;
            font-size: 32px;
            font-family: Rasa;
            font-weight: 700;

            display: flex;
            align-items: center;

        }

        .form-input {
            width: 667px;
            height: 51px;
            border-radius: 10px;
            /* border: 1px solid #255293; */
            border: none;
            padding-left: 10px;
            margin-bottom: 20px;
            color: #17488C;
            background: #5183CA99;
            font-size: 32px;
            font-family: Rasa;
            font-weight: 500;
        }

        .form-input3 {
            width: 667px;
            min-height: 183px;
            max-width: 100%;
            border-radius: 10px;
            border: none;
            padding: 10px;
            color: #17488C;
            background: #5183CA99;
            font-size: 32px;
            font-family: Rasa;
            font-weight: 500;
            resize: none;
            /* Không cho phép resize bằng tay */
            overflow-y: hidden;
            /* Ẩn thanh cuộn dọc */
            margin-bottom: 20px;
        }

        .form-input2 {
            width: 667px;
            min-height: 244px;
            max-width: 100%;
            border-radius: 10px;
            border: none;
            padding: 10px;
            color: #17488C;
            background: #5183CA99;
            font-size: 32px;
            font-family: Rasa;
            font-weight: 500;
            resize: none;
            /* Không cho phép resize bằng tay */
            overflow-y: hidden;
            /* Ẩn thanh cuộn dọc */
        }



        .header-container {
            display: flex;
            justify-content: space-between;
            /* Căn h1 bên trái, button bên phải */
            align-items: center;
            /* Căn giữa theo chiều dọc */
            margin-bottom: 20px;
            /* Khoảng cách với nội dung bên dưới */
        }

        .page-title {
            font-size: 40px;
            font-family: Rasa;
            font-weight: 500;
            font-size: 40px;
            line-height: 100%;
            letter-spacing: 0%;
            color: #255293;
            /* Màu xanh đậm */
            margin: 0;
            /* Loại bỏ margin mặc định */
            padding-left: 20px;
        }

        .add-news-btn {
            display: flex;
            align-items: center;
            /* Căn icon và text cùng dòng */
            gap: 8px;
            background-color: #5183CA;
            /* Màu xanh */
            color: white;
            font-family: Rasa;
            font-weight: 500;
            font-size: 32px;
            line-height: 100%;
            letter-spacing: 0%;

            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: 0.3s;
            width: 249px;
            height: 51px;
            margin-right: 50px;
        }

        .add-news-btn:hover {
            background-color: #3A6EA5;
            /* Màu xanh đậm hơn khi hover */
        }

        .header-container img {
            width: 40px;
            height: 40px;
        }

        .news-content {
            display: flex;
            justify-content: space-between;
            /* Đẩy title sang trái, action sang phải */
            align-items: center;
            /* Căn giữa theo chiều dọc */
            flex-wrap: wrap;
            /* Đảm bảo title tự xuống dòng nếu quá dài */
            gap: 10px;
            padding-left: 20px;
            /* Khoảng cách giữa title và action */
            padding-top: 30px;
            padding-bottom: 30px;
            padding-right: 20px;
            font-family: Rasa;
            font-weight: 500;
            font-size: 32px;
            line-height: 100%;
            letter-spacing: 0%;

        }

        .news-title {

            color: #255293;
            flex: 1;
            /* Để tiêu đề có thể mở rộng nhưng không lấn chiếm action */
            min-width: 200px;
            /* Đảm bảo không bị thu nhỏ quá mức */
            word-break: break-word;
            /* Cho phép xuống dòng khi quá dài */
        }

        .news-action {
            display: flex;
            gap: 15px;
            /* Khoảng cách giữa các action */
            align-items: center;
            white-space: nowrap;
            /* Ngăn các nút bị xuống dòng */
        }

        .news-action a {
            text-decoration: underline;
            color: #255293 font-weight: 600;
            transition: 0.3s;
        }

        .news-action a:hover {
            color: #3A6EA5;
            /* Màu đậm hơn khi hover */
        }

        .main-content {
            margin-left: -20px;
            margin-right: -20px;
        }

        .confirm-popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 810px;
            height: 308px;
            background: #e7f5ff;
            border: 2px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 1001;
            border-radius: 10px;
            text-align: center;

        }

        .popup-content {


            /* Điều chỉnh khoảng cách giữa các dòng */
            font-family: 'Rasa', serif;
            font-weight: 500;
            font-size: 20px;
            line-height: 100%;
            letter-spacing: 0%;

            line-height: 1.2;
        }

        .popup-content2 {

            padding-top: 40px;
            padding-left: 80px;
            /* Điều chỉnh khoảng cách giữa các dòng */
            font-family: 'Rasa', serif;
            font-weight: 500;
            font-size: 20px;
            line-height: 100%;
            letter-spacing: 0%;

            line-height: 1.2;
        }

        .popup-content3 {
            /* Điều chỉnh khoảng cách giữa các dòng */
            font-family: 'Rasa', serif;
            font-weight: 500;
            font-size: 16px;
            line-height: 100%;
            letter-spacing: 0%;

            line-height: 1.2;

        }

        .confirm-popup .popup-content {
            font-size: 40px;
            color: #255293;
            font-weight: 500;
            word-wrap: break-word;

        }

        .confirm-popup .popup-content3 {
            font-size: 40px;
            color: #255293;
            font-weight: 500;
            word-wrap: break-word;

        }

        .confirm-popup .popup-content2 {
            font-size: 40px;
            color: #255293;
            font-weight: 500;
            word-wrap: break-word;

        }

        .confirm-popup .confirm-btn,
        .confirm-popup .cancel-btn {
            background-color: #5183CA99;
            color: #255293;
            font-size: 36px;
            width: 172px;
            height: 51px;
            font-family: Rasa;
            font-weight: 500;
            word-wrap: break-word;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-weight: 500;
            word-wrap: break-word;
            margin-top: 60px;
        }

        .confirm-btn2,
        .cancel-btn2 {
            background-color: #5183CA99;
            color: #255293;
            font-size: 36px;
            width: 172px;
            height: 51px;
            font-family: Rasa;
            font-weight: 500;
            word-wrap: break-word;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-weight: 500;
            word-wrap: break-word;

        }

        .confirm-popup .confirm-btn {
            margin-left: -80px;

        }

        .confirm-popup .popup-header2 {
            display: flex;
            align-items: center;
            /* Canh giữa theo chiều dọc */
            color: #17488C;
            font-family: Rasa;
            font-weight: 500;
            font-size: 24px;
            line-height: 100%;
            letter-spacing: 0%;
            margin-left: 20px;
        }

        .popup-header2 img {
            width: 40px;
            height: 60px;
            margin-right: 10px;
        }

        .popup-header2 span {
            font-size: 40px;
            font-weight: 500;
            color: #255293;
        }

        .confirm-popup .confirm-btn:hover,
        .confirm-popup .cancel-btn:hover {
            background-color: #1d417a;
        }

        .news-popup2 {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 1044px;
            height: 785px;

            background: #e7f5ff;
            border: 2px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 1001;
            border-radius: 10px;
            text-align: center;

        }

        .form-text {
            font-family: Rasa;
            font-weight: 500;
            font-size: 32px;
            line-height: 100%;
            letter-spacing: 0%;

            color: #17488C;
            min-width: 150px;
            display: flex;
            /* Sắp xếp các phần tử con trên cùng một dòng */
            align-items: center;
            /* Căn giữa theo chiều dọc */
            gap: 8px;
        }

        .calendar-icon {
            width: 50px;
            /* Chiều rộng ảnh */
            height: 53px;
            /* Chiều cao ảnh */
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

        .popup-header3 {
            display: flex;
            height: 70px;
            align-items: center;
            /* Canh giữa theo chiều dọc */
            color: #17488C;
            font-family: Rasa;
            font-weight: 500;
            font-size: 40px;
            line-height: 100%;
            letter-spacing: 0%;
            margin-left: 20px;
        }
    </style>
    <div class="main-content">
        <div class="header-container">
            <h1 class="page-title">Tin tức</h1>
            <button class="add-news-btn" onclick="openAddNewsPopup()">
                <img src="{{ asset('images/material-symbols_add.png') }}" alt="" />Thêm tin tức</button>
        </div>

        <hr style="border: 1px solid #255293; width: 100%; margin: 0;">

        @foreach ($vpk as $item)

            <div class="news-content">
                <h3 class="news-title">{{ $item->tieu_de }}</h3>
                <div class="news-action">
                    <a href="{{ route('phongdaotao.chitiettintuc', ['ma_tin_tuc' => $item->ma_tin_tuc]) }}" class="news-link">
                        <img src="{{ asset('images/Chevron Right.png') }}" alt="Arrow" />
                        Xem chi tiết tin tức
                    </a>
                    <a class="news-link" onclick="confirmDeleteNews({{ $item->ma_tin_tuc }})">Xóa</a>
                    <a class="news-link"
                        onclick="openEditNewsPopup('{{ $item->ma_tin_tuc }}', '{{ $item->ngay_dang }}', '{{ $item->nguoi_dang }}', '{{ $item->tieu_de }}', '{{ $item->noi_dung }}')">Sửa</a>
                </div>
            </div>

            <hr style="border: 1px solid #255293; width: 100%; margin: 0;">
        @endforeach
    </div>

    <!-- Popup nhập tin tức -->
    <div class="popup-overlay" id="newsOverlay" style="display: none;"></div>
    <div class="news-popup" id="newsPopup" style="display: none;">
        <div class="popup-header">
            <h2>Thêm tin tức</h2>
        </div>
        <div class="popup-content">
            <!-- Ngày và giờ bảo vệ -->
            <div class="form-group">
                <label class="form-label">Tên tin tức:</label>

                <input type="text" id="newsTitle" class="form-input">

            </div>

            <div class="form-group">
                <label class="form-label">Nội dung tin tức:</label>
                <textarea id="newsContent" class="form-input2"></textarea>
            </div>
            {{-- <div class="form-group">
                <label class="form-label">Tải lên tệp đính kèm:</label>
                <input type="file" id="newsFile" class="form-input">
            </div> --}}
        </div>

        <div class="button-group">
            <button class="confirm-btn" onclick="saveNews()">Đồng ý</button>
            <button class="cancel-btn" onclick="closeAddNewsPopup()">Hủy</button>
        </div>
    </div>

    <!-- Popup thông báo thành công -->
    <div class="popup-overlay" id="successOverlay" style="display: none;"></div>
    <div class="popup-container success-popup" id="successPopup" style="display: none;">
        <div style="display: flex; gap: 15px;">
            <img class="done" src="{{ asset('images/Done.png') }}" alt="">
            <p>Thêm tin tức thành công</p>
        </div>
    </div>

    <!-- Overlay chỉnh sửa tin tức -->
    <div class="popup-overlay" id="editNewsOverlay" style="display: none;"></div>
    <div class="news-popup2" id="editNewsPopup" style="display: none;">
        <div class="popup-header">
            <h2>Chỉnh sửa tin tức</h2>
        </div>
        <div class="popup-content3">
            <input type="hidden" id="editNewsId">

            <div class="form-group">
                <label class="form-label">Mã tin tức:</label>
                <input type="text" id="editMaTinTuc" class="form-input" readonly>
            </div>

            <!-- Tiêu đề -->
            <div class="form-group">
                <label class="form-label">Tên tin tức:</label>
                <input type="text" id="editNewsTitle" class="form-input">
            </div>

            <!-- Nội dung -->
            <div class="form-group">
                <label class="form-label">Nội dung tin tức:</label>
                <textarea id="editNewsContent" class="form-input3"></textarea>
            </div>
            <!-- Ngày đăng (Chỉ hiển thị) -->
            <div class="form-group">
                <label class="form-label">Ngày đăng:</label>
                <p id="editNgayDang" class="form-text">
                    <img src="{{ asset('images/Calendar.png') }}" class="calendar-icon" />
                </p>
            </div>

            <!-- Người đăng (Có thể sửa) -->
            <div class="form-group">
                <label class="form-label">Người đăng:</label>
                <input type="text" id="editNguoiDang" class="form-input">
            </div>
        </div>

        <div class="button-group">
            <button class="confirm-btn2" onclick="confirmEditNews()">Xác nhận</button>
            <button class="cancel-btn2" onclick="closeEditNewsPopup()">Hủy</button>
        </div>
    </div>

    <!-- Popup xác nhận sửa tin -->
    <div class="popup-overlay" id="confirmEditOverlay" style="display: none;"></div>
    <div class="confirm-popup" id="confirmEditPopup" style="display: none;">
        <div class="popup-header2">
            <img class="megaphone" src="{{ asset('images/Megaphone.png') }}" alt="Thông báo">
            <span>Thông báo</span>
        </div>

        <hr style="border: 1px solid #255293; width: 100%; margin: 0;">

        <div class="popup-content2">
            <p style="margin-left: -100px;">Bạn có muốn lưu thông tin này không?</p>
            <button class="confirm-btn" style="margin-right: 20px;" onclick="saveEditNews()">Xác nhận</button>
            <button class="cancel-btn" onclick="closeConfirmEditPopup()">Hủy</button>
        </div>
    </div>


    <!-- Popup xác nhận xóa -->
    <div class="popup-overlay" id="confirmDeleteOverlay" style="display: none;"></div>
    <div class="confirm-popup" id="confirmDeletePopup" style="display: none;">
        <div class="popup-header2">
            <img class="megaphone" src="{{ asset('images/Megaphone.png') }}" alt="Thông báo">
            <span>Thông báo</span>
        </div>

        <hr style="border: 1px solid #255293; width: 100%; margin: 0;">

        <div class="popup-content2">
            <p style="margin-left: -100px;">Bạn có chắc chắn muốn xóa tin tức này?</p>
            <button class="confirm-btn" style="margin-right: 20px;" onclick="deleteNews()">Xác nhận</button>
            <button class="cancel-btn" onclick="closeConfirmDeletePopup()">Hủy</button>
        </div>
    </div>

    <!-- Popup thông báo thành công -->
    <div class="popup-overlay" id="successEditOverlay" style="display: none;"></div>
    <div class="popup-container success-popup" id="successEditPopup" style="display: none;">
        <div style="display: flex; gap: 15px;">
            <img class="done" src="{{ asset('images/Done.png') }}" alt="">
            <p>Sửa tin tức thành công</p>
        </div>
    </div>
    <!-- Popup thông báo thành công -->
    <div class="popup-overlay" id="successDeleteOverlay" style="display: none;"></div>
    <div class="popup-container success-popup" id="successDeletePopup" style="display: none;">
        <div style="display: flex; gap: 15px;">
            <img class="done" src="{{ asset('images/Done.png') }}" alt="">
            <p>Xóa tin tức thành công</p>
        </div>
    </div>

    <!-- Popup thông báo lỗi -->
    <div class="popup-overlay" id="errorOverlay" style="display: none;"></div>
    <div class="popup-container error-popup" id="errorPopup" style="display: none;">
        <div class="popup-header3">
            <img class="megaphone" src="{{ asset('images/Megaphone.png') }}" alt="Thông báo">
            <span>Thông báo</span>
        </div>

        <hr style="border: 1px solid #255293; width: 100%; margin: 0;">

        <div class="error-message">
            <img class="cancel" src="{{ asset('images/Cancel.png') }}">
            <p id="errorMessage">Lỗi!</p>
        </div>
    </div>

    <script>
        function openAddNewsPopup() {
            document.getElementById("newsOverlay").style.display = "block";
            document.getElementById("newsPopup").style.display = "block";
        }

        function closeAddNewsPopup() {
            document.getElementById("newsOverlay").style.display = "none";
            document.getElementById("newsPopup").style.display = "none";
        }

        function saveNews() {
            let title = document.getElementById("newsTitle").value;
            let content = document.getElementById("newsContent").value;
            // let fileInput = document.getElementById("newsFile");
            // let file = fileInput.files[0];

            if (title.trim() === "" || content.trim() === "") {
                alert("Vui lòng nhập đầy đủ thông tin!");
                return;
            }

            let formData = new FormData();
            formData.append("tieu_de", title);
            formData.append("noi_dung", content);
            // 
            let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

            fetch("{{ route('tin-tuc.store') }}", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        closeAddNewsPopup();
                        document.getElementById("successOverlay").style.display = "block";
                        document.getElementById("successPopup").style.display = "block";
                        setTimeout(() => {
                            document.getElementById("successOverlay").style.display = "none";
                            document.getElementById("successPopup").style.display = "none";
                            location.reload();
                        }, 2000);
                    } else {
                        alert("Có lỗi xảy ra!");
                    }
                })
                .catch(error => console.error("Lỗi:", error));
        }
        function formatDate(ngay) {
            let parts = ngay.split("-"); // Tách chuỗi theo dấu "-"
            return `${parts[2]}/${parts[1]}/${parts[0]}`; // Đảo thứ tự thành DD/MM/YYYY
        }

        let editNewsId = null;
        let deleteNewsId = null;
        // Mở popup chỉnh sửa tin tức
        function openEditNewsPopup(maTinTuc, ngayDang, nguoiDang, title, content) {
            editNewsId = maTinTuc; // Lưu mã tin tức để cập nhật sau

            document.getElementById("editMaTinTuc").value = maTinTuc;  // Hiển thị Mã tin tức
            document.getElementById("editNgayDang").innerHTML = `
                                                                                                                                                                                                                        <img src="{{ asset('images/Calendar.png') }}" class="calendar-icon" />
                                                                                                                                                                                                                        <span>${formatDate(ngayDang)}</span>
                                                                                                                                                                                                                    `; // Cập nhật ngày đăng với icon // Hiển thị Ngày đăng
            document.getElementById("editNguoiDang").value = nguoiDang; // Hiển thị Người đăng (cho phép sửa)
            document.getElementById("editNewsTitle").value = title; // Hiển thị Tiêu đề tin
            document.getElementById("editNewsContent").value = content; // Hiển thị Nội dung tin

            document.getElementById("editNewsOverlay").style.display = "block";
            document.getElementById("editNewsPopup").style.display = "block";

        }



        // Đóng popup chỉnh sửa tin tức
        function closeEditNewsPopup() {
            document.getElementById("editNewsOverlay").style.display = "none";
            document.getElementById("editNewsPopup").style.display = "none";
        }

        // Xác nhận sửa tin tức (hiển thị popup xác nhận)
        function confirmEditNews() {
            closeEditNewsPopup();
            document.getElementById("confirmEditOverlay").style.display = "block";
            document.getElementById("confirmEditPopup").style.display = "block";
        }

        // Đóng popup xác nhận sửa
        function closeConfirmEditPopup() {
            document.getElementById("confirmEditOverlay").style.display = "none";
            document.getElementById("confirmEditPopup").style.display = "none";
        }
        function showErrorPopup(message) {
            document.getElementById("errorMessage").innerText = message;
            document.getElementById("errorOverlay").style.display = "block";
            document.getElementById("errorPopup").style.display = "block";

            setTimeout(() => {
                closeErrorPopup();
            }, 2000); // Ẩn popup sau 2 giây
        }

        // Đóng popup lỗi
        function closeErrorPopup() {
            document.getElementById("errorOverlay").style.display = "none";
            document.getElementById("errorPopup").style.display = "none";
        }

        // Gửi yêu cầu cập nhật tin tức
        function saveEditNews() {
            closeConfirmEditPopup();

            let nguoiDang = document.getElementById("editNguoiDang").value.trim();
            let updatedTitle = document.getElementById("editNewsTitle").value.trim();
            let updatedContent = document.getElementById("editNewsContent").value.trim();

            // 5.1: Kiểm tra nếu nhập thiếu thông tin
            if (!updatedTitle || !updatedContent || !nguoiDang) {
                showErrorPopup("Cần nhập đủ thông tin tin tức!");
                return;
            }

            // 5.2: Kiểm tra thông tin không hợp lệ (tiêu đề quá ngắn, nội dung chứa ký tự đặc biệt)
            if (updatedTitle.length < 5 || updatedContent.length < 5 || nguoiDang.length < 5 || !nguoiDang.includes("@")) {
                showErrorPopup("Thông tin bạn nhập không hợp lệ! Vui lòng nhập lại.");
                return;
            }
            // Gửi yêu cầu cập nhật tin tức
            fetch(`/tin-tuc/update/${editNewsId}`, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
                },
                body: JSON.stringify({
                    nguoi_dang: nguoiDang,
                    tieu_de: updatedTitle,
                    noi_dung: updatedContent
                })
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        document.getElementById("successEditOverlay").style.display = "block";
                        document.getElementById("successEditPopup").style.display = "block";

                        setTimeout(() => {
                            location.reload();
                        }, 2000);
                    } else {
                        alert("Có lỗi xảy ra!");
                    }
                })
                .catch(error => console.error("Lỗi:", error));
        }



        // Mở popup xác nhận xóa
        function confirmDeleteNews(id) {
            deleteNewsId = id;
            document.getElementById("confirmDeleteOverlay").style.display = "block";
            document.getElementById("confirmDeletePopup").style.display = "block";
        }

        // Đóng popup xác nhận xóa
        function closeConfirmDeletePopup() {
            document.getElementById("confirmDeleteOverlay").style.display = "none";
            document.getElementById("confirmDeletePopup").style.display = "none";
        }

        // Gửi yêu cầu xóa tin tức
        function deleteNews() {
            closeConfirmDeletePopup();

            fetch(`/tin-tuc/delete/${deleteNewsId}`, {
                method: "DELETE",
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                }
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        document.getElementById("successDeleteOverlay").style.display = "block";
                        document.getElementById("successDeletePopup").style.display = "block";

                        setTimeout(() => {
                            location.reload();
                        }, 2000);
                    } else {
                        alert("Có lỗi xảy ra!");
                    }
                })
                .catch(error => console.error("Lỗi:", error));
        }

    </script>

@endsection