<!DOCTYPE html>
<html lang="vi">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Rasa:wght@400;700&display=swap" rel="stylesheet">
    <title>Đăng nhập</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: "Inter", sans-serif;
            background: #e7f5ff;
        }

        .login {
            background: #e7f5ff;
            width: 1440px;
            height: 1020px;
            position: relative;
            overflow: hidden;
        }

        .image {
            width: 733px;
            height: 100%;
            position: absolute;
            object-fit: cover;
        }

        .logo-1 {
            width: 706px;
            height: 118px;
            position: absolute;
            left: 700px;
            top: 26px;
            object-fit: cover;
        }

        .ng-nh-p {
            color: #255293;
            font-size: 64px;
            font-weight: 700;
            position: absolute;
            left: 884px;
            top: 234px;
            width: 370px;
        }

        .input-container {
            position: absolute;
            left: 760px;
            width: 672px;
        }

        .input-box {
            background: rgba(24, 99, 152, 0.2);
            border-radius: 24px;
            width: 100%;
            height: 77px;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            padding: 0 20px;
        }

        .input-box input {
            width: 100%;
            border: none;
            background: transparent;
            font-size: 24px;
            outline: none;
            color: #255293;
        }

        .input-box input::placeholder {
            color: white;
            opacity: 0.7;
        }

        .login-button {
            background: #255293;
            color: white;
            font-size: 40px;
            font-weight: 500;
            border-radius: 24px;
            width: 100%;
            height: 77px;
            border: none;
            cursor: pointer;
            transition: 0.3s;
        }

        .login-button:hover {
            background: #1a3c72;
        }

        .forgot-password {
            color: #255293;
            font-size: 24px;
            position: absolute;
            left: 1248px;
            top: 748px;
            text-decoration: none;
        }

        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            width: 810px;
            height: 307px;
            background-color: #e7f5ff;
            font-family: Rasa;
            font-weight: 500;
            font-size: 40px;
            line-height: 100%;
            letter-spacing: 0%;

        }

        .popup.active {
            display: block;
        }

        .popup .close-btn {
            background: #255293;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <div class="login">
        <img src="{{ asset('img/dangnhap.png') }}" alt="Background" class="image">
        <img src="{{ asset('img/logo 1.png') }}" alt="Logo" class="logo-1">

        <div class="ng-nh-p">Đăng nhập</div>
        @if ($errors->any())
            <!-- Overlay bao quanh popup -->
            <div id="popup-overlay"
                class="position-fixed top-0 start-0 w-100 h-45 bg-dark bg-opacity-50 d-flex align-items-center justify-content-center"
                style="z-index: 1050;" onclick="this.classList.add('d-none')">
                <!-- Popup chính -->
                <div class="popup active row p-4 rounded shadow-lg"
                    style="background-color: #e7f5ff!important;; z-index: 1051;" onclick="event.stopPropagation()">
                    <!-- HEADER -->
                    <div class="modal-header border-bottom p-0" style="border-bottom: 2px solid #225293 !important;">
                        <h3 class="mb-0 d-flex align-items-center"
                            style="font-weight: 500;font-size: 40px;line-height: 100%;
                                                                            letter-spacing: 0%;font-family: 'Rasa', serif; color: #225293;">
                            <img src="{{ asset('img/Megaphone.png') }}" width="45" height="73" class="me-3"> Thông báo
                        </h3>
                    </div>

                    <!-- BODY -->
                    <div class="modal-body text-start d-flex align-items-start justify-content-start mt-4">
                        <img src="{{ asset('images/Cancel.png') }}" width="90" class="me-3">
                        <span class="fw"
                            style="font-weight: 500;font-size: 40px;line-height: 100%;
                                                                            letter-spacing: 0%;font-family: 'Rasa', serif; color: #225293;">
                            {{ $errors->first() }}
                        </span>
                    </div>
                </div>
            </div>



        @endif

        <form action="{{ route('login.process') }}" method="POST">
            @csrf

            <div class="input-container" style="top: 345px;">
                <div class="input-box">
                    <input type="email" name="email" placeholder="Tài Khoản">
                </div>
            </div>

            <div class="input-container" style="top: 491px;">
                <div class="input-box">
                    <input type="password" name="password" placeholder="Mật Khẩu">
                </div>
            </div>

            <div class="input-container" style="top: 637px;">
                <button type="submit" class="login-button">Đăng nhập</button>
            </div>
        </form>

        <a href="#" class="forgot-password">Quên mật khẩu?</a>

    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let popup = document.querySelector('.popup');
            let overlay = document.getElementById('popup-overlay');

            if (popup && popup.classList.contains('active')) {
                // Sau 2 giây thì ẩn popup
                setTimeout(function () {
                    popup.classList.remove('active');
                    overlay.classList.add('d-none');
                }, 2000);
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>