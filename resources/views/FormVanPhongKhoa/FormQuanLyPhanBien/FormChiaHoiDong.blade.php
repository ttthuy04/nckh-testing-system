@extends('layouts.layout2')

@section('sidebar')
    <div class="menu-item ">
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
    <div class="menu-item active">
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
    <div class="menu-item">
        <a href="{{ route('vanphongkhoa.truyvanthongtin') }}">
            <img src="{{ asset('images/mdi_court-hammer.png') }}" alt="Invitation Icon" class="sidebar-icon" />
            <span>Truy vấn thông tin</span>
        </a>
    </div>
@endsection
@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            background-color: #e7f5ff;
        }

        .page-wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            width: 100%;
        }

        /* Header styles */
        .header {
            background-color: #245292;
            height: 80px;
            display: flex;
            align-items: center;
            padding: 0 20px;
            width: 100%;
        }

        .logo {
            width: 60px;
            height: auto;
            margin-right: 20px;
        }

        .school-name {
            color: #e7f5ff;
            font-size: 28px;
            font-weight: 500;
        }

        .user-info {
            margin-left: auto;
            display: flex;
            align-items: center;
            color: #e7f5ff;
            position: relative;
        }

        .user-icon {
            width: 40px;
            height: auto;
            margin-right: 5px;
        }

        .user-name {
            font-size: 18px;
            font-weight: 700;
            margin-right: 15px;
        }

        /* Dropdown styles - updated */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-button {
            background-color: transparent;
            border: none;
            cursor: pointer;
            padding: 8px;
            display: flex;
            align-items: center;
        }

        .dropdown-icon {
            width: 20px;
            height: 20px;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            top: 100%;
            background-color: #ffffff;
            min-width: 250px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 100;
            border-radius: 4px;
        }

        .dropdown-content a {
            color: #333;
            padding: 12px 16px;
            text-decoration: none;
            display: flex;
            align-items: center;
            border-bottom: 1px solid #eee;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Menu icon styles */
        .menu-icon {
            display: inline-block;
            width: 20px;
            height: 20px;
            margin-right: 12px;
            background-size: contain;
            background-repeat: no-repeat;
            text-align: center;
        }

        .profile-icon {
            background-image: url('img/profile-icon.png');
        }

        .key-icon {
            background-image: url('img/key-icon.png');
        }

        .logout-icon {
            background-image: url('img/logout-icon.png');
        }

        /* Main content container */
        .content-container {
            display: flex;
            flex: 1;
        }

        /* Sidebar styles */
        .sidebar {
            width: 250px;
            background-color: rgba(36, 82, 146, 0.87);
            flex-shrink: 0;
        }

        .menu-item {
            height: 60px;
            border: 1px solid #17478c;
            display: flex;
            align-items: center;
            padding-left: 15px;
            color: #e7f5ff;
            font-size: 20px;
            font-weight: 500;
        }

        .menu-item.active {
            background-color: #5083c9;
        }

        .menu-item.normal {
            background-color: rgba(36, 82, 146, 0.87);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Rasa', serif;
        }

        body {
            background-color: #e7f5ff;
        }

        .page-wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            width: 100%;
        }

        .sidebar {
            background-color: #4267B2;
            color: white;
            width: 100%;
            max-width: 500px;
        }

        .menu-item {
            padding: 0;
            background-color: #255293DE;
        }

        .menu-item a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: white;
            width: 100%;
            padding: 20px 15px;
        }

        .menu-item:hover {
            background-color: #365899;
            cursor: pointer;
        }

        .menu-item.active {
            background: rgba(80.75, 131.22, 201.88, 0.60);
        }

        .icon-container {
            width: 36px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 15px;
        }

        .sidebar-icon {
            width: 40px;
            height: 40px;
            filter: brightness(0) invert(1);
        }

        span {
            color: #E7F5FF;
            font-size: 32px;
            font-family: Rasa;
            font-weight: 500;
            word-wrap: break-word
        }

        /* Header styles */
        .header {
            background-color: #255293;
            height: 80px;
            display: flex;
            align-items: center;
            padding: 0 20px;
            width: 100%;
            border-bottom: 2px solid #82b0f1;
        }

        .logo {
            width: 60px;
            height: auto;
            margin-right: 20px;
        }

        .school-name {
            color: #e7f5ff;
            font-size: 28px;
            font-weight: 500;
        }

        .user-info {
            margin-left: auto;
            display: flex;
            align-items: center;
            color: #e7f5ff;
            position: relative;
        }

        .user-icon {
            width: 40px;
            height: auto;
            margin-right: 5px;
        }

        .user-name {
            font-size: 18px;
            font-weight: 700;
            margin-right: 15px;
        }

        /* Dropdown styles - updated */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-button {
            background-color: transparent;
            border: none;
            cursor: pointer;
            padding: 8px;
            display: flex;
            align-items: center;
        }

        .dropdown-button img {
            width: 20px;
            height: 60px;
        }

        .dropdown-icon {
            width: 20px;
            height: 20px;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            margin-right: -20px;
            top: 100%;
            background-color: rgba(36, 82, 147, 0.95);
            min-width: 250px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            border-radius: 0 0 10px 10px;
            border: 1px solid #17488C;
            z-index: 100;
        }

        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: flex;
            align-items: center;
            font-size: 14px;
        }

        .dropdown-content a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Menu icon styles */
        .menu-icon {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }

        /* Main content container */
        .content-container {
            display: flex;
            flex: 1;
        }

        /* Sidebar styles */
        .sidebar {
            width: 250px;
            background-color: rgba(36, 82, 146, 0.87);
            flex-shrink: 0;
        }

        .menu-item {
            height: 60px;
            border: 1px solid #02367f;
            display: flex;
            align-items: center;
            padding-left: 15px;
            color: #e7f5ff;
            font-size: 20px;
            font-weight: 500;
        }

        .menu-item.active {
            background-color: #5083c9;
        }

        .menu-item.normal {
            background-color: rgba(36, 82, 146, 0.87);
        }

        .sidebar-icon {
            width: 24px;
            height: 24px;
            margin-right: 15px;
        }

        /* Main content styles */
        .main-content {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
        }

        .page-title {
            color: #17478c;
            font-size: 28px;
            font-weight: 500;
            margin-bottom: 20px;
        }

        .news-section {
            margin-bottom: 30px;
        }

        .news-item {
            display: flex;
            margin-bottom: 20px;
        }

        .news-image {
            width: 180px;
            height: 120px;
            object-fit: cover;
            margin-right: 20px;
            flex-shrink: 0;
        }

        .news-content {
            flex: 1;
        }

        .news-title {
            color: #245292;
            font-size: 22px;
            font-weight: 500;
            margin-bottom: 10px;
            line-height: 1.2;
        }

        .news-date {
            color: #245292;
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .news-excerpt {
            color: #17478c;
            font-size: 14px;
            line-height: 1.4;
            margin-bottom: 10px;
        }

        .news-link {
            color: #245292;
            font-size: 16px;
            font-weight: 500;
            text-decoration: none;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .news-link img {
            width: 16px;
            height: 16px;
            margin-right: 8px;
        }

        .divider {
            height: 1px;
            background-color: #cccccc;
            margin: 25px 0;
        }

        a.text-link {
            color: #17478c;
            text-decoration: underline;
        }

        /* Media queries for laptop screens */
        @media screen and (min-width: 1024px) {
            .header {
                height: 90px;
            }

            .logo {
                width: 75px;
            }

            .school-name {
                color: #E7F5FF;
                font-size: 40px;
                font-family: Rasa;
                font-weight: 500;
                word-wrap: break-word;
            }

            .user-name {
                font-size: 20px;
            }

            .sidebar {
                width: 300px;
            }

            .menu-item {
                height: 75px;
                font-size: 24px;
            }

            .sidebar-icon {
                width: 30px;
                height: 30px;
            }

            .page-title {
                font-size: 32px;
            }

            .news-image {
                width: 220px;
                height: 140px;
            }

            .news-title {
                font-size: 26px;
            }

            .news-date {
                font-size: 18px;
            }

            .news-excerpt {
                font-size: 16px;
            }

            .news-link {
                font-size: 18px;
            }
        }

        /* Media queries for larger screens */
        @media screen and (min-width: 1440px) {
            .header {
                height: 109px;
            }

            .logo {
                width: 104px;
            }

            .school-name {
                font-size: 40px;
            }

            .user-icon {
                width: 55px;
            }

            .user-name {
                font-size: 24px;
            }

            .sidebar {
                width: 400px;
            }

            .menu-item {
                height: 95px;
                font-size: 32px;
                padding-left: 20px;
            }

            .sidebar-icon {
                width: 40px;
                height: 40px;
                margin-right: 22px;
            }

            .news-image {
                width: 261px;
                height: 147px;
                margin-right: 30px;
            }

            .news-title {
                font-size: 32px;
            }

            .news-date {
                font-size: 24px;
            }

            .news-excerpt {
                font-size: 20px;
            }

            .news-link {
                font-size: 24px;
            }

            .news-link img {
                width: 21px;
                height: 20px;
            }

            .dropdown-content {
                min-width: 300px;
            }

            .dropdown-content a {
                padding: 16px 20px;
                font-size: 20px;
            }

            .menu-icon {
                width: 24px;
                height: 24px;
                margin-right: 16px;
            }
        }

        .sidebar-icon {
            width: 24px;
            height: 24px;
            margin-right: 15px;
        }

        /* Main content styles */
        .main-content {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
        }

        .page-title {
            color: #17478c;
            font-size: 28px;
            font-weight: 500;
            margin-bottom: 20px;
        }

        .news-section {
            margin-bottom: 30px;
        }

        .news-item {
            display: flex;
            margin-bottom: 20px;
        }

        .news-image {
            width: 180px;
            height: 120px;
            object-fit: cover;
            margin-right: 20px;
            flex-shrink: 0;
        }

        .news-content {
            flex: 1;
        }

        .news-title {
            color: #245292;
            font-size: 22px;
            font-weight: 500;
            margin-bottom: 10px;
            line-height: 1.2;
        }

        .news-date {
            color: #245292;
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .news-excerpt {
            color: #17478c;
            font-size: 14px;
            line-height: 1.4;
            margin-bottom: 10px;
        }

        .news-link {
            color: #245292;
            font-size: 16px;
            font-weight: 500;
            text-decoration: none;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .news-link img {
            width: 16px;
            height: 16px;
            margin-right: 8px;
        }

        .divider {
            height: 1px;
            background-color: #cccccc;
            margin: 25px 0;
        }

        a.text-link {
            color: #17478c;
            text-decoration: underline;
        }

        /* Media queries for laptop screens */
        @media screen and (min-width: 1024px) {
            .header {
                height: 90px;
            }

            .logo {
                width: 75px;
            }

            .school-name {
                font-size: 32px;
            }

            .user-name {
                font-size: 20px;
            }

            .sidebar {
                width: 300px;
            }

            .menu-item {
                height: 75px;
                font-size: 24px;
            }

            .sidebar-icon {
                width: 30px;
                height: 30px;
            }

            .page-title {
                font-size: 32px;
            }

            .news-image {
                width: 220px;
                height: 140px;
            }

            .news-title {
                font-size: 26px;
            }

            .news-date {
                font-size: 18px;
            }

            .news-excerpt {
                font-size: 16px;
            }

            .news-link {
                font-size: 18px;
            }
        }

        /* Media queries for larger screens */
        @media screen and (min-width: 1440px) {
            .header {
                height: 109px;
            }

            .logo {
                width: 104px;
            }

            .school-name {
                font-size: 40px;
            }

            .user-icon {
                width: 55px;
            }

            .user-name {
                font-size: 24px;
            }

            .sidebar {
                width: 354px;
            }

            .menu-item {
                height: 95px;
                font-size: 32px;
                padding-left: 20px;
            }

            .sidebar-icon {
                width: 40px;
                height: 40px;
                margin-right: 22px;
            }

            .news-image {
                width: 261px;
                height: 147px;
                margin-right: 30px;
            }

            .news-title {
                font-size: 32px;
            }

            .news-date {
                font-size: 24px;
            }

            .news-excerpt {
                font-size: 20px;
            }

            .news-link {
                font-size: 24px;
            }

            .news-link img {
                width: 21px;
                height: 20px;
            }

            .dropdown-content {
                min-width: 300px;
            }

            .dropdown-content a {
                padding: 16px 20px;
                font-size: 20px;
            }

            .menu-icon {
                width: 24px;
                height: 24px;
                margin-right: 16px;
            }

        }

        /* Toàn bộ giao diện */
        .flex-1 {
            background-color: #E7F5FF;
            min-height: 100vh;
            padding: 20px;
        }

        /* Tiêu đề */
        h1 {
            color: #17488C;
        }

        h2 {
            color: #17488C;
            margin-top: 40px;
        }

        /* Chọn số lượng hội đồng */
        select {
            padding: 10px;
            border: 2px solid #1E3A8A;
            border-radius: 8px;
            font-size: 16px;
            background-color: rgba(81, 131, 202, 0.60);
            cursor: pointer;
            transition: 0.3s ease-in-out;
        }

        select:hover {
            border-color: #2563EB;
        }

        /* Bảng danh sách giảng viên */
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #EFF6FF;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Header bảng */
        thead tr {
            background-color: rgba(37, 82, 147, 0.87);
            color: white;
        }

        /* Ô trong bảng */
        th,
        td {
            padding: 12px;
            border: 1px solid #A7C7E7;
            text-align: center;
            background-color: rgba(81, 131, 202, 0.60);
        }

        /* Hiệu ứng hover trên từng dòng */
        tbody tr:hover {
            background-color: #BFDBFE;
            transition: 0.3s;
        }

        /* Checkbox */
        input[type="checkbox"] {
            width: 20px;
            height: 20px;
            accent-color: #1E3A8A;
            cursor: pointer;
        }

        /* Nút Tiếp theo */
        button {
            background-color: #2563EB;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 8px;
            transition: 0.3s ease-in-out;
        }

        button:hover {
            background-color: #1D4ED8;
            transform: scale(1.05);
        }

        /* Link trong nút */
        button a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            display: block;
            text-align: center;
        }

        .flex.justify-end {
            display: flex;
            justify-content: flex-end;
            margin-top: 40px;
        }

        /* Tổng thể */
        .flex-1 {
            font-family: 'Arial', sans-serif;
        }

        /* Tiêu đề */
        h1 {
            color: #1e3a8a;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
            font-size: 100px;
        }

        /* Container của hội đồng */
        .bg-blue-300 {
            /* background: linear-gradient(135deg, #3b82f6, #1e3a8a); */
            border-radius: 10px;
            padding: 20px;
            color: white;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            background-color: #255293;
        }

        .bg-blue-300:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        /* Select box */
        select {
            background-color: rgba(255, 255, 255, 0.2);
            border: 2px solid white;
            padding: 10px;
            color: white;
            font-weight: bold;
            border-radius: 6px;
            transition: all 0.3s ease-in-out;
            outline: none;
        }

        select:hover {
            background-color: rgba(255, 255, 255, 0.4);
        }

        select:focus {
            outline: 3px solid #93c5fd;
            background-color: #93c5fd;
            color: black;
        }

        /* Ảnh nhóm */
        img {
            border-radius: 10px;
            transition: transform 0.3s ease-in-out, filter 0.3s ease-in-out;
        }

        img:hover {
            transform: scale(1.1);
            filter: brightness(1.2);
        }

        /* Nút lưu */
        button {
            background-color: #1e40af;
            padding: 12px 24px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            transition: background-color 0.3s ease-in-out, transform 0.2s;
            cursor: pointer;
            box-shadow: 2px 4px 8px rgba(0, 0, 0, 0.2);
        }

        button:hover {
            background-color: #2563eb;
            transform: scale(1.05);
            box-shadow: 3px 5px 10px rgba(0, 0, 0, 0.3);
        }

        button:focus {
            outline: 3px solid #93c5fd;
        }

        .popup-container {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 862px;
            height: 930px;
            background: #e7f5ff;
            border: 2px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            overflow: auto;
            border-radius: 10px;
            /* color: #5183ca; */
            font-weight: bolder;
            color: #255293;
            font-size: 20px;
            font-family: "Rasa", sans-serif;
            font-weight: 500;
            word-wrap: break-word;
            line-height: 1.1;
        }


        /* Nội dung có thể cuộn */
        .popup-content {
            height: 100%;
            overflow-y: auto;
            padding-left: 70px;
            padding-top: 20px;

            /* Điều chỉnh khoảng cách giữa các dòng */
            font-size: 14px;
            font-weight: bolder;
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

        .confirm-popup .popup-header {
            font-size: 40px;
            font-weight: bold;
            color: #255293;
            font-weight: 500;
            word-wrap: break-word
        }

        .confirm-popup .popup-content {
            font-size: 40px;
            color: #255293;
            font-weight: 500;
            word-wrap: break-word
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
            padding: 10px 10px;
            border: none;
            border-radius: 10px;
            cursor: pointer;

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

        .megaphone {
            width: 30px;
            /* Kích thước icon */
            height: 50px;
            margin-right: 10px;
            margin-left: 20px;
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
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function updateMembers(selectElement, membersContainerId, otherSelectId, otherMembersContainerId) {
            const membersContainer = document.getElementById(membersContainerId);
            const otherSelect = document.getElementById(otherSelectId);
            const otherMembersContainer = document.getElementById(otherMembersContainerId);

            membersContainer.innerHTML = '';
            otherMembersContainer.innerHTML = '';

            const members = {
                'Hội đồng 1': ['Phạm Tuấn Anh', 'Nguyễn Văn A'],
                'Hội đồng 2': ['Trần Thị B', 'Lê Thị C']
            };

            const selectedCouncil = selectElement.value;
            const otherCouncil = selectedCouncil === 'Hội đồng 1' ? 'Hội đồng 2' : 'Hội đồng 1';

            if (members[selectedCouncil]) {
                members[selectedCouncil].forEach(member => {
                    const memberDiv = document.createElement('div');
                    memberDiv.className = 'bg-blue-200 p-2 mb-2 rounded';
                    memberDiv.textContent = member;
                    membersContainer.appendChild(memberDiv);
                });
            }

            if (members[otherCouncil]) {
                members[otherCouncil].forEach(member => {
                    const memberDiv = document.createElement('div');
                    memberDiv.className = 'bg-blue-200 p-2 mb-2 rounded';
                    memberDiv.textContent = member;
                    otherMembersContainer.appendChild(memberDiv);
                });
            }

            otherSelect.value = otherCouncil;
        }
    </script>
    <!-- Content container (sidebar + main content) -->
    <div class="content-container">
        <!-- Sidebar -->
        <div class="flex-1 p-6">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-xl font-bold">Hội đồng sau khi chọn</h1>
            </div>
            <div class="flex space-x-4">
                <!-- Hội đồng 1 -->
                <div class="bg-blue-300 p-4 rounded w-1/2">
                    <div class="flex justify-between items-center mb-4">
                        <select id="select1" class="bg-blue-300 text-white p-2 rounded"
                            onchange="updateMembers(this, 'members1', 'select2', 'members2')">
                            <option value="">Chọn hội đồng</option>
                            <option value="Hội đồng 1">Hội đồng 1</option>
                            <option value="Hội đồng 2">Hội đồng 2</option>
                        </select>
                    </div>
                    <img src="{{asset('images/People (2).png')}}" class="mx-auto mb-4" height="100" src="images/People.png"
                        width="100" />
                    <div id="members1"></div>
                </div>
                <!-- Hội đồng 2 -->
                <div class="bg-blue-300 p-4 rounded w-1/2">
                    <div class="flex justify-between items-center mb-4">
                        <select id="select2" class="bg-blue-300 text-white p-2 rounded" disabled>
                            <option value="Hội đồng 1">Hội đồng 1</option>
                            <option value="Hội đồng 2">Hội đồng 2</option>
                        </select>
                    </div>
                    <img src="{{asset('images/People (2).png')}}" class="mx-auto mb-4" height="100" src="images/People.png"
                        width="100" />
                    <div id="members2"></div>
                </div>
            </div>
            <div class="flex justify-end mt-6">
                <button class="bg-blue-500 text-white px-4 py-2 rounded" onclick="showConfirmPopup2()">Lưu</button>
            </div>
        </div>
    </div>
    <!-- Popup xác nhận -->
    <div class="popup-overlay" id="confirmOverlay2" style="display: none;"></div>
    <div class="confirm-popup" id="confirmPopup2" style="display: none;">
        <div class="popup-header">
            <img class="megaphone" src="{{ asset('images/Megaphone.png') }}" alt="Thông báo">
            <span>Thông báo</span>
        </div>

        <hr style="border: 1px solid #255293; width: 100%; margin: 0;">

        <div class="popup-content">
            <p style="margin-left: -100px;">Bạn chắc chắn muốn lưu hội đồng?</p>
            <button class="confirm-btn" style="margin-right: 20px;" onclick="exportReport2()">Xác nhận</button>
            <button class="cancel-btn" onclick="closeConfirmPopup2()">Hủy</button>
        </div>
    </div>

    <!-- Popup thông báo thành công -->
    <div class="popup-overlay" id="successOverlay2" style="display: none;"></div>
    <div class="popup-container success-popup" id="successPopup2" style="display: none;">
        <div style="display: flex; align-items: center; justify-content: center; gap: 15px;">
            <img class="done" src="{{ asset('images/Done.png') }}" alt="Xuất báo cáo thành công!">
            <p>Chia hội đồng phản biện thành công!</p>
        </div>

    </div>




    <script>
        function openPopup() {
            document.getElementById("popup").style.display = "block";
        }

        function closePopup() {
            document.getElementById("popup").style.display = "none";
        }

        function showConfirmPopup() {
            document.getElementById("popup").style.display = "none";
            document.getElementById("confirmOverlay").style.display = "flex";
            document.getElementById("confirmPopup").style.display = "block";
        }

        function closeConfirmPopup() {
            document.getElementById("confirmOverlay").style.display = "none";
            document.getElementById("confirmPopup").style.display = "none";
            document.getElementById("popup").style.display = "block";
        }

        function exportReport() {
            document.getElementById("confirmOverlay").style.display = "none";
            document.getElementById("confirmPopup").style.display = "none";
            document.getElementById("successOverlay").style.display = "flex";
            document.getElementById("successPopup").style.display = "block";

            // Tự động đóng sau 2 giây
            setTimeout(() => {
                document.getElementById("successOverlay").style.display = "none";
                document.getElementById("successPopup").style.display = "none";
            }, 2000);
        }

        function showConfirmPopup2() {
            document.getElementById("confirmOverlay2").style.display = "flex";
            document.getElementById("confirmPopup2").style.display = "block";
        }

        function closeConfirmPopup2() {
            document.getElementById("confirmOverlay2").style.display = "none";
            document.getElementById("confirmPopup2").style.display = "none";
        }

        function exportReport2() {
            document.getElementById("confirmOverlay2").style.display = "none";
            document.getElementById("confirmPopup2").style.display = "none";
            document.getElementById("successOverlay2").style.display = "flex";
            document.getElementById("successPopup2").style.display = "block";

            // Tự động đóng sau 2 giây và chuyển hướng về trang 'vanphongkhoa.phanbienvabaove'
            setTimeout(() => {
                document.getElementById("successOverlay2").style.display = "none";
                document.getElementById("successPopup2").style.display = "none";

                // Chuyển hướng đến trang mới
                window.location.href = "{{ route('vanphongkhoa.phanbienvabaove') }}";
            }, 2000);
        }

    </script>
@endsection
