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
    <div class="menu-item">
        <a href="{{ route('vanphongkhoa.capnhatketqua') }}">
            <img src="{{ asset('images/New Document.png') }}" alt="Report Icon" class="sidebar-icon" />
            <span>Cập nhật kết quả <br />trình bày bảo vệ</span>
        </a>
    </div>
    <div class="menu-item active">
        <a href="{{ route('vanphongkhoa.truyvanthongtin') }}">
            <img src="{{ asset('images/mdi_court-hammer.png') }}" alt="Invitation Icon" class="sidebar-icon" />
            <span>Truy vấn thông tin</span>
        </a>
    </div>
@endsection

@section('content')
    <style>
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
            left: 558px;
            top: 679px;
        }

        .xuatbaocao {
            color: #e7f5ff;
            text-align: center;
            font-family: "Rasa-Medium", sans-serif;
            font-size: 36px;
            font-weight: 500;
            position: absolute;
            left: 589px;
            top: 681px;
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
            left: 1006px;
            top: 679px;
        }

        .xuatdanhsach {
            color: #e7f5ff;

            text-align: center;
            font-family: "Rasa-Medium", sans-serif;
            font-size: 36px;
            font-weight: 500;
            position: absolute;
            left: 1050px;
            top: 683px;
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
            width: 100%;
            /* Chiếm 90% chiều rộng màn hình */
            max-width: 862px;
            /* Giữ nguyên kích thước tối đa */
            height: 95%;
            /* Chiếm 80% chiều cao màn hình */
            max-height: 887px;
            /* Giữ nguyên kích thước tối đa */
            background: #e7f5ff;
            border: 2px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            overflow: auto;
            border-radius: 10px;
            color: #255293;
            font-size: 16px;
            font-family: "Rasa", sans-serif;
            font-weight: 500;
            word-wrap: break-word;

        }




        /* Nội dung có thể cuộn */
        .popup-content {
            height: 100%;
            overflow-y: auto;
            padding-left: 60px;
            padding-top: 40px;
            padding-bottom: 100px;
            /* Điều chỉnh khoảng cách giữa các dòng */
            font-family: 'Rasa', serif;
            font-weight: 500;
            font-size: 20px;
            line-height: 100%;
            letter-spacing: 0%;

            line-height: 1.2;
        }

        .de-tai-trang-thai {
            list-style: none;
            /* Bỏ dấu chấm đầu dòng */
            padding: 0;
            margin: 0;
        }

        ul li {
            margin-left: 60px;
        }

        .indent-text {
            margin-left: 15px;
            /* Thụt vào 10px */
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
            position: fixed;
            bottom: 20px;
            left: 80%;
            transform: translateX(-50%);
            background-color: #5183CA99;
            color: #255293;
            font-size: 32px;
            font-family: "Rasa", sans-serif;
            font-weight: 500;

            border: none;
            border-radius: 10px;
            cursor: pointer;
            width: 326px;
            height: 68px;
            text-align: center;
            z-index: 1010;
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
            height: 308px;
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
            width: 985px;
            height: 584px;
            background: #e7f5ff;
            border: 2px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 1001;
            border-radius: 10px;
            text-align: center;

        }

        .confirm-popup .popup-header {
            font-size: 40px;
            color: #255293;
            font-weight: 500;
            word-wrap: break-word;
        }

        .confirm-popup .popup-content {
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
            margin-top: 60px;
        }

        .confirm-popup .confirm-btn {
            margin-left: -80px;

        }


        .confirm-popup .confirm-btn:hover,
        .confirm-popup .cancel-btn:hover {
            background-color: #1d417a;
        }

        .confirm-popup2 .popup-header {
            font-size: 40px;
            color: #255293;
            font-weight: 500;
            word-wrap: break-word;
        }

        .confirm-popup2 .popup-content {
            font-size: 40px;
            color: #255293;
            font-weight: 500;
            word-wrap: break-word;
        }

        .confirm-popup2 .confirm-btn,
        .confirm-popup2 .cancel-btn {
            background-color: #5183CA99;
            color: #255293;
            font-size: 36px;
            width: 200px;
            height: 90px;
            font-family: Rasa;
            font-weight: 500;
            word-wrap: break-word;
            padding: 10px 10px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 500;
            word-wrap: break-word;
            /* margin-top: 40px; */
        }

        .confirm-popup2 .confirm-btn:hover,
        .confirm-popup2 .cancel-btn:hover {
            background-color: #1d417a;
        }

        .popup-header {
            display: flex;
            align-items: center;
            /* Canh giữa theo chiều dọc */
            font-size: 40px;
            color: #255293;
            padding: 10px;
        }

        .confirm-popup2 .popup-header {
            display: flex;
            align-items: center;
            padding-bottom: 50px;
            padding-left: 50px;
            font-size: 40px;
            color: #255293;
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

        .success-popup2 {
            width: 778px;
            height: 242px;
            background: white;
            padding: 20px 20px 0px;
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
            padding-right: 70px;
            padding-left: 20px;
            justify-content: center;
        }

        .success-popup2 p {
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

        .popup-divider {
            border: 1px solid #255293;
            width: 100%;
            margin: 10px 0;
        }

        /* Container cho radio button */
        .radio-container {
            display: flex;
            align-items: center;
            margin: 10px 0;
            margin-bottom: 30px;
            cursor: pointer;
        }

        /* Ẩn radio mặc định */
        .radio-container input {
            display: none;
        }

        /* Tạo vòng tròn radio */
        .radio-custom {
            width: 30px;
            height: 30px;
            background: #5183CA99;
            border-radius: 50%;
            display: inline-block;
            position: relative;
            margin-right: 70px;
            margin-left: 20px;
        }

        /* Khi được chọn, tô màu */
        .radio-container input:checked+.radio-custom {
            background-color: #255293;
        }

        /* Nút xác nhận & hủy */
        .popup-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 0px;
        }

        .custom-table {
            padding-top: 100px;
            /* Màu nền bảng */
            color: white;
            /* Màu chữ */
            text-align: center;
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
            height: 50px;
            font-family: 'Rasa', serif;
            font-weight: 600;
            font-size: 16px;
            line-height: 100%;
            letter-spacing: 0%;

        }


        .custom-table th:nth-child(1) {
            width: 10%;
        }

        /* Mã đề tài */
        .custom-table th:nth-child(2) {
            width: 25%;
        }

        /* Tên đề tài */
        .custom-table th:nth-child(3) {
            width: 10%;
        }

        /* Ngày đăng ký */
        .custom-table th:nth-child(4) {
            width: 10%;
        }

        /* Trạng thái */
        .custom-table th:nth-child(5) {
            width: 15%;
        }

        /* Giảng viên */
        .custom-table th:nth-child(6) {
            width: 10%;
        }

        /* Số sinh viên */
        .custom-table th:nth-child(7) {
            width: 10%;
        }

        /* Kết quả cấp trường */
        .custom-table th:nth-child(8) {
            width: 10%;
        }

        .tablethongke td {
            text-align: center;
        }

        .tablethongke th {
            font-family: 'Rasa', serif;
            font-weight: 500;
            font-size: 20px;
            line-height: 100%;
            letter-spacing: 0%;

        }
    </style>
    <div class="container mt-4">
        <table class="table table-bordered custom-table responsive-table">
            <thead>
                <tr>
                    <th>Mã đề tài</th>
                    <th>Tên đề tài</th>
                    <th>Ngày đăng ký</th>
                    <th>Trạng thái</th>
                    <th>Giảng viên</th>
                    <th>Số sinh viên</th>
                    <th>Kết quả cấp trường</th>
                    <th>Kết quả cấp khoa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deTaiList as $deTai)
                    <tr>
                        <td>{{ $deTai->ma_de_tai }}</td>
                        <td>{{ $deTai->ten_de_tai }}</td>
                        <td>{{ \Carbon\Carbon::parse($deTai->ngay_dang_ky)->format('d/m/Y') }}</td>
                        <td>{{ $deTai->trang_thai }}</td>
                        <td>{{ $deTai->ma_gv }}</td>
                        <td>{{ $deTai->so_luong_sv }}</td>
                        <td>{{ $deTai->ket_qua_truong ?? 'Chưa có' }}</td>
                        <td>{{ $deTai->ket_qua_khoa ?? 'Chưa có' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="group-13">
        <div class="rectangle-40"></div>
        <button class="xuatbaocao" id="openPopupButton" onclick="openPopup()"
            style="border: none; background: transparent; cursor: pointer; color: white; font-size: 36px; font-weight: 500;">
            Xuất báo cáo thống kê
        </button>
    </div>
    <div class="group-12">
        <div class="rectangle-402"></div>
        <button class="xuatdanhsach" onclick="showConfirmPopup2()"
            style="border: none; background: transparent; cursor: pointer; color: white; font-size: 36px; font-weight: 500; padding-top:20px;">Xuất
            danh sách
        </button>
    </div>
    <div class="truy-v-n-th-ng-tin2">Truy vấn thông tin</div>
    @include('FormVanPhongKhoa.FormQuanLyTruyVan.FormXuatBaoCaoThongKe')
    </div>
    <!-- Popup xác nhận -->
    <div class="popup-overlay" id="confirmOverlay" style="display: none;"></div>
    <div class="confirm-popup" id="confirmPopup" style="display: none;">
        <div class="popup-header">
            <img class="megaphone" src="{{ asset('images/Megaphone.png') }}" alt="Thông báo">
            <span>Thông báo</span>
        </div>

        <hr style="border: 1px solid #255293; width: 100%; margin: 0;">

        <div class="popup-content">
            <p style="margin-left: -100px;">Bạn có chắc chắn xuất báo cáo không?</p>
            <button class="confirm-btn" style="margin-right: 20px;" onclick="exportReport()">Xác nhận</button>
            <button class="cancel-btn" onclick="closeConfirmPopup()">Hủy</button>
        </div>
    </div>

    <!-- Popup thông báo thành công -->
    <!-- Popup thông báo thành công -->
    <div class="popup-overlay" id="successOverlay" style="display: none;"></div>
    <div class="popup-container success-popup" id="successPopup" style="display: none;">
        <div style="display: flex; gap: 15px;">
            <img class="done" src="{{ asset('images/Done.png') }}" alt="Xuất báo cáo thành công!">
            <p>Xuất báo cáo thành công</p>
        </div>

    </div>

    <!-- Overlay mờ nền khi popup xuất hiện -->
    <div class="popup-overlay" id="popupOverlay" style="display: none;"></div>

    <!-- Popup chính -->
    <div class="confirm-popup2" id="popupRadio" style="display: none;">
        <div class="popup-header">
            <span>Xuất danh sách đề tài</span>
        </div>

        <hr class="popup-divider">

        <!-- Nội dung popup -->
        <div class="popup-content">
            <label class="radio-container">
                <input type="radio" name="topic" value="chinhthuc">
                <span class="radio-custom"></span>
                Đề tài chính thức
            </label>

            <label class="radio-container">
                <input type="radio" name="topic" value="capkhoa">
                <span class="radio-custom"></span>
                Đề tài đã nghiên cứu cấp khoa
            </label>

            <label class="radio-container">
                <input type="radio" name="topic" value="captruong">
                <span class="radio-custom"></span>
                Đề tài đã nghiên cứu cấp trường
            </label>
            <button class="confirm-btn" style="margin-right: 50px;" onclick="exportReport2()">Đồng ý</button>
            <button class="cancel-btn" onclick="closeConfirmPopup2()">Hủy</button>
        </div>

    </div>


    <!-- Popup xác nhận -->

    <!-- Popup thông báo thành công -->
    <div class="popup-overlay" id="successOverlay2" style="display: none;"></div>
    <div class="popup-container success-popup2" id="successPopup2" style="display: none;">
        <div style="display: flex; gap: 15px;">
            <img class="done" src="{{ asset('images/Done.png') }}" alt="Xuất báo cáo thành công!">
            <p>Xuất danh sách đề tài thành công</p>
        </div>

    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.min.js"></script>
    <script>
        function openPopup() {
            document.getElementById("popup").style.display = "block";
        }

        function closePopup() {
            document.getElementById("popup").style.display = "none";
        }
        document.addEventListener("click", function (event) {
            let popup = document.getElementById("popup");
            let openButton = document.getElementById("openPopupButton"); // ID của nút mở popup

            // Nếu popup đang mở, không bấm vào popup, không bấm vào nút mở -> Đóng popup
            if (
                popup.style.display === "block" &&
                !popup.contains(event.target) &&
                event.target !== openButton
            ) {
                closePopup();
            }
        });


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
            let popupContent = document.querySelector(".popup-content").cloneNode(true);

            // Xóa nút button trong popup
            let buttons = popupContent.querySelectorAll("button");
            buttons.forEach(button => button.remove());

            // Xử lý bảng trong nội dung
            let tables = popupContent.querySelectorAll("table");
            tables.forEach(table => {
                let rows = table.querySelectorAll("tr");
                let tableText = "\n\n" + " ".repeat(50) + "\n"; // Định dạng bảng
                rows.forEach(row => {
                    let cells = row.querySelectorAll("th, td");
                    let rowText = Array.from(cells).map(cell => cell.textContent.trim()).join(" | ");
                    tableText += rowText + "\n";
                });
                tableText += " ".repeat(50) + "\n\n";
                table.replaceWith(document.createTextNode(tableText));
            });

            // Xử lý nội dung text
            let textContent = popupContent.textContent.replace(/\n\s*\n/g, "\n\n").trim();

            let blob = new Blob([textContent], { type: "text/plain" });
            let link = document.createElement("a");
            link.href = URL.createObjectURL(blob);
            link.download = "BaoCaoThongKe.txt";
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);

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
            document.getElementById("popupOverlay").style.display = "block";
            document.getElementById("popupRadio").style.display = "block";
        }

        function closeConfirmPopup2() {
            document.getElementById("popupOverlay").style.display = "none";
            document.getElementById("popupRadio").style.display = "none";

        }
        function getSelectedTopic() {
            let selected = document.querySelector('input[name="topic"]:checked');
            return selected ? selected.value : null;
        }

        function getFilteredData(filterType) {
            let rows = document.querySelectorAll(".custom-table tbody tr");
            let filteredData = [];
            let headers = "";

            if (filterType === "chinhthuc") {
                headers = "Mã đề tài\tTên đề tài\tNgày đăng ký\tTrạng thái\tGiảng viên\tSố sinh viên\tKết quả cấp trường\tKết quả cấp khoa\n";
            } else if (filterType === "capkhoa") {
                headers = "Mã đề tài\tTên đề tài\tNgày đăng ký\tTrạng thái\tGiảng viên\tSố sinh viên\tKết quả cấp khoa\n";
            } else if (filterType === "capkhoa") {
                headers = "Mã đề tài\tTên đề tài\tNgày đăng ký\tTrạng thái\tGiảng viên\tSố sinh viên\tKết quả cấp trường\n";
            }

            rows.forEach(row => {
                let columns = row.getElementsByTagName("td");

                let maDeTai = columns[0].innerText.trim(); // Mã đề tài
                let tenDeTai = columns[1].innerText.trim(); // Tên đề tài
                let ngayDangKy = columns[2].innerText.trim(); // Ngày đăng ký
                let trangThai = columns[3].innerText.trim(); // Trạng thái
                let giangVien = columns[4].innerText.trim(); // Giảng viên
                let soSinhVien = columns[5].innerText.trim(); // Số sinh viên
                let ketQuaTruong = columns[6].innerText.trim(); // Kết quả cấp trường
                let ketQuaKhoa = columns[7].innerText.trim(); // Kết quả cấp khoa

                if (filterType === "chinhthuc") {
                    filteredData.push(`${maDeTai}\t${tenDeTai}\t${ngayDangKy}\t${trangThai}\t${giangVien}\t${soSinhVien}\t${ketQuaTruong}\t${ketQuaKhoa}`);
                } else if (filterType === "capkhoa" && ketQuaKhoa !== "Chưa có") {
                    filteredData.push(`${maDeTai}\t${tenDeTai}\t${ngayDangKy}\t${trangThai}\t${giangVien}\t${soSinhVien}\t${ketQuaKhoa}`);
                } else if (filterType === "captruong" && ketQuaTruong !== "Chưa có") {
                    filteredData.push(`${maDeTai}\t${tenDeTai}\t${ngayDangKy}\t${trangThai}\t${giangVien}\t${soSinhVien}\t${ketQuaTruong}`);
                }
            });

            return { headers, filteredData };
        }

        function exportReport2() {
            let filterType = getSelectedTopic();
            if (!filterType) {
                alert("Vui lòng chọn một loại đề tài để xuất!");
                return;
            }

            let { headers, filteredData } = getFilteredData(filterType);
            if (filteredData.length === 0) {
                alert("Không có dữ liệu phù hợp!");
                return;
            }

            // Dòng đầu tiên mặc định
            let title = "Danh sách đề tài:\n";

            // Kết hợp nội dung file
            let textContent = title + headers + filteredData.join("\n");

            let blob = new Blob([textContent], { type: "text/plain" });

            let link = document.createElement("a");
            link.href = URL.createObjectURL(blob);
            link.download = `DanhSachDeTai_${filterType}.txt`;
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);

            // Ẩn popup chọn radio
            document.getElementById("popupOverlay").style.display = "none";
            document.getElementById("popupRadio").style.display = "none";

            // Hiển thị popup thành công
            document.getElementById("successOverlay2").style.display = "flex";
            document.getElementById("successPopup2").style.display = "block";

            // Tự động đóng sau 2 giây
            setTimeout(() => {
                document.getElementById("successOverlay2").style.display = "none";
                document.getElementById("successPopup2").style.display = "none";
            }, 2000);
        }


    </script>

@endsection