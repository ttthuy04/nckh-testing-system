<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Trường Đại Học Thủy Lợi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rasa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

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
        color: #E7F5FF;
        font-size: 40px;
        font-family: Rasa;
        font-weight: 500;
        word-wrap: break-word;
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

        .news-link {
            display: flex;
            justify-content: flex-end;
            /* Đảm bảo căn lề phải */
            align-items: center;
            margin-top: 10px;
            /* Thêm khoảng cách nếu cần */
            width: 100%;
            /* Đảm bảo nó chiếm toàn bộ chiều rộng */
        }

        .news-link img {
            width: 16px;
            height: 16px;
            margin-right: 8px;
            /* Khoảng cách giữa biểu tượng và chữ */
        }

        .news-link a {
            color: #245292;
            font-size: 16px;
            font-weight: 500;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .news-link a:hover {
            text-decoration: underline;
        }
    }
    </style>
</head>

<body>
    <div class="page-wrapper">
        <!-- Header -->
        <div class="header">
            <img src=" {{ asset('img/Logo-Thuy_Loi.png') }}" alt="Logo Thủy Lợi" class="logo" />
            <h1 class="school-name">TRƯỜNG ĐẠI HỌC THỦY LỢI</h1>
            <div class="user-info">
                <img src="{{ asset('img/Test Account.png') }}" alt="User Icon" class="user-icon" />
                <span class="user-name">{{ Auth::user()->sinhVien->ten_sv }}</span>
                <div class="dropdown">
                    <button class="dropdown-button">

                        <img src="{{ asset('img/Chevron Down.png') }}" alt="Dropdown" class="dropdown-icon" />
                    </button>
                    <div class="dropdown-content">
                        <img src="{{ asset('img/User.png') }}" alt="Profile" style="display: block; margin: auto;">
                        <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" id="btn-edit-profile">
                            <img src="{{ asset('img/User Male.png') }}" alt="Profile" class="menu-icon" />
                            Cập nhật thông tin cá nhân
                        </a>
                        <a class="nav-link" href="{{ route('doi-mat-khau.form') }}" data-bs-toggle="modal"
                            data-bs-target="#DoiMKModal">
                            <img src="{{ asset('img/Security Shield.png') }}" alt="Password" class="menu-icon" />
                            Đổi mật khẩu</a>

                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <img src="{{ asset('img/Move Up.png') }}" alt="Password" class="menu-icon" />
                            Đăng xuất
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content container (sidebar + main content) -->
        <div class="content-container">
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

    <div class="modal-body">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 1250px; height: 616px;">
                <div class="modal-content" style="background-color: #d9eaff; padding: 20px">
                    <form action="{{ route('profile.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                    <div
                                        style="width: 164.36px; height: 213.39px; background-color: rgba(81, 131, 202, 0.6); display: flex; justify-content: center; align-items: center; border-radius: 10px;">
                                        <img src="{{ asset('img/User02.png') }}" class="img-fluid" width="120"
                                            height="120" style="border-radius: 50%;">
                                    </div>
                                </div>

                                <div class="col-md-9">
                                    <div class="mb-2 d-flex align-items-center">
                                        <label class="form-label me-2"
                                            style="width: 130px; color: #17488C; font-size: 25px; font-family: 'Rasa', serif;">Họ
                                            và tên:</label>
                                        <input type="text" name="ten_sv" class="form-control" required
                                            style="background-color: rgba(81, 131, 202, 0.6); color: #17488C; font-size: 25px; font-family: 'Rasa', serif; border-radius: 18px; border: none; height: 49.89px;"
                                            value="{{ Auth::user()->sinhVien->ten_sv }}">
                                    </div>

                                    <div class="mb-2 row">
                                        <div class="col-md-7 d-flex align-items-center">
                                            <label class="form-label me-2"
                                                style="width: 130px; color: #17488C; font-size: 25px; font-family: 'Rasa', serif;">Mã
                                                sinh viên:</label>
                                            <input type="text" name="ma_sv" class="form-control" readonly
                                                style="background-color: rgba(81, 131, 202, 0.6); color: #17488C; font-size: 25px; font-family: 'Rasa', serif; border-radius: 18px; border: none; height: 49.89px;"
                                                value="{{ Auth::user()->sinhVien->ma_sv }}">
                                        </div>
                                        <div class="col-md-5 d-flex align-items-center">
                                            <label class="form-label me-2"
                                                style="width: 130px; color: #17488C; font-size: 25px; font-family: 'Rasa', serif;">Lớp:</label>
                                            <input type="text" name="lop" class="form-control" required
                                                style="background-color: rgba(81, 131, 202, 0.6); color: #17488C; font-size: 25px; font-family: 'Rasa', serif; border-radius: 18px; border: none; height: 49.89px;"
                                                value="{{ Auth::user()->sinhVien->lop }}">
                                        </div>
                                    </div>

                                    <div class="mb-2 row align-items-center">
                                        <div class="col-md-7 d-flex align-items-center">
                                            <label class="form-label me-2"
                                                style="width: 130px; color: #17488C; font-size: 25px; font-family: 'Rasa', serif;">Giới
                                                tính:</label>
                                            <div class="d-flex align-items-center">
                                                <input type="radio" checked class="me-2" name="gioi_tinh" value="Nam"
                                                    required
                                                    {{ Auth::user()->sinhVien->gioi_tinh == 'Nam' ? 'checked' : '' }}
                                                    style="accent-color: rgba(81, 131, 202, 0.6); height: 20px; width: 20px;">
                                                Nam
                                                <input type="radio" name="gioi_tinh" value="Nữ" required
                                                    {{ Auth::user()->sinhVien->gioi_tinh == 'Nữ' ? 'checked' : '' }}
                                                    style="accent-color: rgba(81, 131, 202, 0.6); height: 20px; width: 20px;"
                                                    class="ms-4">
                                                Nữ
                                            </div>
                                        </div>
                                        <div class="col-md-5 d-flex align-items-center">
                                            <label class="form-label me-3"
                                                style="width: 130px; color: #17488C; font-size: 25px; font-family: 'Rasa', serif;">Năm
                                                sinh:</label>
                                            <input type="number" name="nam_sinh" class="form-control" required
                                                style="background-color: #d9eaff; color: #17488C; font-size: 25px; font-family: 'Rasa', serif; border-radius: 18px; border: none; height: 49.89px;"
                                                value="{{ Auth::user()->sinhVien->nam_sinh }}">
                                        </div>
                                    </div>

                                    <div class="mb-2 d-flex align-items-center">
                                        <label class="form-label me-2"
                                            style="width: 130px; color: #17488C; font-size: 25px; font-family: 'Rasa', serif;">Mã
                                            khoa:</label>
                                        <input type="text" name="ma_khoa" class="form-control" required
                                            style="background-color: rgba(81, 131, 202, 0.6); color: #17488C; font-size: 25px; font-family: 'Rasa', serif; border-radius: 18px; border: none; height: 49.89px;"
                                            value="{{ Auth::user()->sinhVien->ma_khoa }}">
                                    </div>

                                    <div class="mb-2 d-flex align-items-center">
                                        <label class="form-label me-2"
                                            style="width: 130px; color: #17488C; font-size: 25px; font-family: 'Rasa', serif;">Email:</label>
                                        <input type="email" name="email" class="form-control" required
                                            style="background-color: rgba(81, 131, 202, 0.6); color: #17488C; font-size: 25px; font-family: 'Rasa', serif; border-radius: 18px; border: none; height: 49.89px;"
                                            value="{{ Auth::user()->sinhVien->email }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer border-0">
                            <button type="submit" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#XBTBModal"
                                style="background-color: rgba(81, 131, 202, 0.6);color: #17488C; border-radius: 18px; border: none; width: 108.56px; height: 49.89px; font-size: 32px; font-family: 'Rasa', serif;">Lưu</button>
                            <button type="button" class="btn btn-secondary"
                                style="background-color: rgba(81, 131, 202, 0.6);color: #17488C; border-radius: 18px; border: none; width: 108.56px; height: 49.89px; font-size: 32px; font-family: 'Rasa', serif;"
                                data-bs-dismiss="modal">Hủy</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="XBTBModal" data-bs-backdrop="true"  tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
        <div class="modal-content" style="background-color: #d9eaff; padding: 20px; border-radius: 10px;">
            <div class="modal-header d-flex align-items-center justify-content-between" style="color: #17488C;">
                <img src="{{ asset('images/Done.png') }}" width="50">
                <h4 class="modal-title mx-auto">Cập nhật thành công!</h4>
            </div>
        </div>
    </div>
</div>


        <div class="modal fade" id="DoiMKModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 700px;height: 652px;">
                <div class="modal-content" style="background-color: #d9eaff; padding: 20px; border-radius: 10px;">
                    <div class="modal-header border-0">
                        <img src="{{ asset('img/Security Lock.png') }}" alt="Password" class="menu-icon"
                            style="color:#17478c" />
                        <h5 class="modal-title"
                            style="color: #17488C; font-weight: bold; font-size: 25px; font-family: 'Rasa', serif;">Đổi
                            mật
                            khẩu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <hr>
                    <form method="POST" id="doiMK-form" action="{{ route('doi-mat-khau.update') }}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-3 d-flex justify-content-center align-items-center">
                                <div
                                    style="width: 164.36px; height: 213.39px; display: flex; justify-content: center; align-items: center; border-radius: 10px;">
                                    <img src="{{ asset('img/Padlock.png') }}" class="img-fluid" width="120" height="120"
                                        style="border-radius: 50%;">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="modal-body">
                                    <div class="text-center mb-3">
                                        <i class="fas fa-lock" style="font-size: 50px; color: #17488C;"></i>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Mật khẩu hiện tại</label>
                                        <input type="password" name="current_password" class="form-control"
                                            id="currentPassword"
                                            style="background-color: rgba(81, 131, 202, 0.3); border: none;border-radius: 18px; width: 443px; height: 52px; font-size: 32px; font-family: 'Rasa', serif;">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Mật khẩu mới</label>
                                        <input type="password" name="new_password" class="form-control" id="newPassword"
                                            style="background-color: rgba(81, 131, 202, 0.3); border: none;border-radius: 18px; width: 443px; height: 52px; font-size: 32px; font-family: 'Rasa', serif;">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nhập lại mật khẩu mới</label>
                                        <input type="password" name="confirm_password" class="form-control"
                                            id="confirmPassword"
                                            style="background-color: rgba(81, 131, 202, 0.3); border: none;border-radius: 18px; width: 443px; height: 52px; font-size: 32px; font-family: 'Rasa', serif;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer border-0 d-flex">
                            <div class="modal-footer border-0 d-flex">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#xacnhanDoiMKModal"
                                    style="background-color: rgba(81, 131, 202, 0.6);color: #17488C; border-radius: 18px; border: none; width: 100px; font-size: 15px; font-family: 'Rasa', serif;">
                                    Lưu
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="XNModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
                <div class="modal-content" style="background-color: #d9eaff; padding: 20px; border-radius: 10px;">
                    <div class="modal-header d-flex align-items-center justify-content-between" style="color: #17488C;">
                        <img src="{{ asset('images/Done.png') }}" width="50">
                        <h4 class="modal-title mx-auto">
                            Bạn đã đổi mật khẩu thành công!
                        </h4>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal fade" id="TBModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 700px;">
                <div class="modal-content" style="background-color: #d9eaff; padding: 20px; border-radius: 10px;">
                    <div class="modal-header d-flex align-items-center justify-content-between" style="color: #17488C;">
                        <img src="{{ asset('images/Cancel.png') }}" width="50">
                        <h4 class="modal-title mx-auto">
                            Mật khẩu mới không được trùng với mật khẩu cũ!
                        </h4>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal fade" id="TB2Modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 700px;">
                <div class="modal-content" style="background-color: #d9eaff; padding: 20px; border-radius: 10px;">
                    <div class="modal-header d-flex align-items-center justify-content-between" style="color: #17488C;">
                        <img src="{{ asset('images/Cancel.png') }}" width="50">
                        <h4 class="modal-title mx-auto">
                            Mật khẩu cũ không chính xác!
                        </h4>
                    </div>



                </div>
            </div>
        </div>
        <div class="modal fade" id="xacnhanDoiMKModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
                <div class="modal-content" style="background-color: #d9eaff; padding: 20px; border-radius: 10px;">
                    <div class="modal-header" style="border-bottom: 2px solid #225293 !important;">
                        <h4 class="modal-title">
                            <img src="{{ asset('img/Security Lock.png') }}" width="30"> Xác nhận
                        </h4>
                    </div>

                    <div class="modal-body text-center">
                        <h4 id="thongbaoText">Bạn có chắc chắn muốn đổi mật khẩu?</h4>
                    </div>

                    <div class="modal-footer d-flex">
                        <div class="d-flex justify-content-between">
                            <button type="button" id="btnXacNhanDoiMK" class="btn btn-primary flex-grow-1 mx-5"
                                style="background-color: rgba(81, 131, 202, 0.6); color: #17488C; border-radius: 18px; font-weight: bold;">
                                Xác nhận
                            </button>

                            <button type="button" class="btn btn-secondary flex-grow-1 mx-2"
                                style="background-color: rgba(81, 131, 202, 0.6); color: #17488C; border-radius: 18px;"
                                data-bs-dismiss="modal">Hủy bỏ</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const xacnhanModal = new bootstrap.Modal(document.getElementById('xacnhanDoiMKModal'));
            const XNModal = new bootstrap.Modal(document.getElementById('XNModal'));
            const doiMKModal = new bootstrap.Modal(document.getElementById('DoiMKModal'));
            const TBModal = new bootstrap.Modal(document.getElementById('TBModal'));
            const TB2Modal = new bootstrap.Modal(document.getElementById('TB2Modal'));

            document.getElementById('btnXacNhanDoiMK').addEventListener('click', async function() {
                const form = document.getElementById('doiMK-form');
                const formData = new FormData(form);

                try {
                    const response = await fetch(form.action, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector(
                                    'meta[name="csrf-token"]')
                                .content,
                            'Accept': 'application/json'
                        }
                    });

                    const result = await response.json();
                    xacnhanModal.hide();

                    if (result.success) {
                        XNModal.show();
                        setTimeout(() => {
                            XNModal.hide();
                            doiMKModal.hide();
                            form.reset();
                        }, 2000);
                    } else {
                        if (result.message === 'Mật khẩu mới không được trùng với mật khẩu cũ') {
                            TBModal.show();
                        } else {
                            TB2Modal.show();
                        }
                        setTimeout(() => {
                            TBModal.hide();
                            TB2Modal.hide();
                        }, 2000);
                    }
                } catch (error) {
                    xacnhanModal.hide();
                    TB2Modal.show();
                    setTimeout(() => {
                        TB2Modal.hide();
                    }, 2000);
                }
            });
        });
        </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</html>
