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
    <div class="menu-item">
        <a href="{{ route('vanphongkhoa.phanbienvabaove')}}">
            <img src="{{ asset('images/carbon_result.png') }}" alt="Register Icon" class="sidebar-icon" />
            <span>Phản biện & bảo vệ</span>
        </a>
    </div>
    <div class="menu-item active">
        <a href="{{ route('vanphongkhoa.capnhatketqua') }}">
            <img src="{{ asset('images/New Document.png') }}" alt="Report Icon" class="sidebar-icon" />
            <span>Cập nhật kết quả <br />trình bày bảo vệ</span>
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
            width: 345px;
            height: 92px;
            position: static;
        }

        .rectangle-40 {
            background: #5183ca;
            border-radius: 10px;
            width: 345px;
            height: 92px;
            position: absolute;
            left: 608px;
            top: 879px;
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
            word-wrap: break-word
        }

        .confirm-popup .confirm-btn,
        .confirm-popup .cancel-btn {
            background: rgba(80.75, 131.22, 201.88, 0.60);
            border-radius: 20px;
            color: #17488C;
            font-size: 36px;
            font-family: Rasa;
            font-weight: 500;
            word-wrap: break-word;
            width: 200px;
            border: none;
            cursor: pointer;

            font-weight: 500;
            word-wrap: break-word;
            margin-top: 50px;
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

        /* Ngày đăng ký */
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
                        <td onclick="openPopup({{ $deTai->ma_de_tai }}, '{{ $deTai->ket_qua_khoa ?? 'Chưa có' }}')"
                            style="cursor: pointer; color: white;">
                            {{ $deTai->ket_qua_khoa ?? 'Chưa có' }}
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <div class="truy-v-n-th-ng-tin2">Cập nhật kết quả đề tài cấp khoa</div>

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

                console.log("Dữ liệu gửi đi:", { ma_de_tai: selectedMaDeTai, ket_qua_khoa: newScore });

                fetch('/vpk/cap-nhat-ket-qua-khoa', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ ma_de_tai: selectedMaDeTai, ket_qua_khoa: newScore })
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
        </script>
@endsection