<div class="popup-container" id="popup">

    <div class="popup-content">
        <h3>BÁO CÁO THỐNG KÊ ĐỀ TÀI NGHIÊN CỨU KHOA HỌC</h3>

        <p>I. Thông tin tổng quan</p>
        <p class="indent-text">1. Tổng số đề tài đăng ký: <strong>{{ $tongDeTai }}</strong></p>

        <p class="indent-text">2. Số đề tài theo trạng thái:</p>
        <ul style="list-style-type: none;">
            <li>
                Đang chờ duyệt: <strong>{{ $deTaiChoDuyet }}</strong>&emsp;
                Được duyệt: <strong>{{ $deTaiDuocDuyet }}</strong>&emsp;
                Hoàn thành: <strong>{{ $deTaiHoanThanh }}</strong>
            </li>

        </ul>

        <p class="indent-text">3. Số lượng đề tài theo lĩnh vực nghiên cứu:</p>
        <ul>
            @foreach ($deTaiTheoLinhVuc as $linhVuc => $soLuong)
                <li>{{ $linhVuc }}: <strong>{{ $soLuong }}</strong></li>
            @endforeach
        </ul>
        <p class="indent-text">4. Số lượng đề tài theo khoa:</p>
        <ul>
            @foreach ($deTaiTheoKhoa as $khoa)
                <li>{{ $khoa->ten_khoa }}: <strong>{{ $khoa->so_luong }}</strong></li>
            @endforeach
        </ul>

        <p class="indent-text">5. Tổng số giảng viên hướng dẫn: <strong>{{ $tongGiangVien }}</strong></p>
        <p class="indent-text">6. Tổng số sinh viên tham gia: <strong>{{ $tongSinhVien }}</strong></p>

        <p>IV. Thống kê kết quả đề tài</p>
        <p class="indent-text">1. Số đề tài đạt cấp khoa: <strong>{{ $deTaiDatCapKhoa }}</strong></p>
        <p class="indent-text">2. Số đề tài đạt cấp trường: <strong>{{ $deTaiDatCapTruong }}</strong></p>
        <p class="indent-text">3. Điểm phản biện trung bình: <strong>{{ number_format($diemPhanBienTB, 2) }}</strong>
        </p>

        <p>V. Thống kê lịch trình bảo vệ</p>
        <p class="indent-text">1. Số đề tài bảo vệ trong từng đợt:</p>
        <ul>
            @foreach ($deTaiTheoDot as $dot)
                <li>Ngày {{ \Carbon\Carbon::parse($dot->ngay_bao_ve)->format('d/m/Y') }}: <strong>{{ $dot->total }}</strong>
                </li>
            @endforeach
        </ul>
        <p class="indent-text">2. Tỷ lệ báo cáo đề tài thành công:
            <strong>{{ number_format($tyLeBaoCaoThanhCong, 2) }}%</strong>
        </p>

        <p class="indent-text">3. Danh sách đề tài có lịch bảo vệ sắp tới:</p>
        @if ($deTaiSapBaoVe->isEmpty())
            <p>Không có đề tài nào sắp bảo vệ.</p>
        @else
            <table class="tablethongke">
                <thead>
                    <tr>

                        <th>
                            <p class="indent-text">4. Mã đề tài</p>
                        </th>
                        <th>Ngày bảo vệ</th>
                        <th>Giờ bảo vệ</th>
                        <th>Địa điểm</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($deTaiSapBaoVe as $lichTrinh)
                        <tr>
                            <td>{{ $lichTrinh->ma_de_tai }}</td>
                            <td>{{ \Carbon\Carbon::parse($lichTrinh->ngay_bao_ve)->format('d/m/Y') }}</td>
                            <td>{{ $lichTrinh->gio_bao_ve }}</td>
                            <td>{{ $lichTrinh->dia_diem }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <p>VI. Thống kê hội đồng phản biện</p>
        <p class="indent-text">1. Tổng số hội đồng phản biện: <strong>{{ $tongHoiDong }}</strong></p>
        <p class="indent-text">2. Tổng số giảng viên phản biện: <strong>{{ $tongGiangVienPhanBien }}</strong></p>

        <button class="export-btn" onclick="showConfirmPopup()">Xuất báo cáo thống kê</button>
    </div>

</div>