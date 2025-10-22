{{-- DÙNG CHO VĂN PHÒNG KHOA VÀ PHÒNG ĐẠO TẠO --}}


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trường Đại Học Thủy Lợi</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rasa:wght@400;500;700&display=swap');

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

        .user-info span {
            color: #E7F5FF;
            font-size: 32px;
            font-family: Rasa;
            font-weight: 500;
            word-wrap: break-word;
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
            text-decoration: none;
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
            font-size: 32px;
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

        button img {
            width: 80px;
            height: 59px;
            margin-left: 20px;
        }

        .divider {
            height: 1px;
            background-color: #cccccc;
            margin: 25px 0;
        }

        button a {
            backgroud-color: white;
            font-size: 24px;
            font-weight: 500;
            height: 59px;

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
    </style>
</head>

<body>
    <div class="page-wrapper">
        <!-- Header -->
        <div class="header">
            <img src="{{ asset('anhheader/Logo-Thuy_Loi.png ')}}" alt="Logo Thủy Lợi" class="logo" />
            <a class="school-name">TRƯỜNG ĐẠI HỌC THỦY LỢI</a>
            <div class="user-info">
                <img src="{{ asset('anhheader/Test Account.png')}}" alt="User Icon" class="user-icon" />
                <span class="user-name">{{ optional(Auth::user()->vanphongkhoa)->ten_nv ?? 'Chưa có tên' }}</span>

                <div class="dropdown">
                    <button class="dropdown-button">
                        <img src="{{ asset('anhheader/Chevron Down.png') }}" alt="Dropdown" class="dropdown-icon" />
                    </button>
                    <div class="dropdown-content">
                        <img src="{{ asset('anhheader/User.png') }}" alt="Profile"
                            style="display: block; margin: auto;">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                style="background: none; border: none; cursor: pointer; display: flex; align-items: center; gap: 30px;">
                                <img src="{{ asset('anhheader/Move Up.png') }}" alt="Logout" class="menu-icon" />
                                <a class="logout" ">Đăng
                                    xuất</a>
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <!-- Content container (sidebar + main content) -->
        <div class=" content-container">
                                    <!-- Sidebar -->
                                    <div class="sidebar">
                                        @yield('sidebar')
                                    </div>

                                    <!-- Main Content -->
                                    <div class="main-content">
                                        @yield('content')
                                    </div>
                    </div>
                </div>
</body>

</html>