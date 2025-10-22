@extends('layouts.app1')

@section('sidebar')
<div class="menu-item ">
    <a href="{{ route('tintuc.index') }}">
        <img src="{{ asset('img/Commercial.png') }}" alt="News Icon" class="sidebar-icon" />
        <span>Tin tức</span>
    </a>
</div>
<div class="menu-item ">
    <a href="{{ route('detainghiencuu.index') }}">
        <img src="{{ asset('img/Saddle Stitched Booklet.png') }}" alt="Research Icon" class="sidebar-icon" />
        <span>Đề tài nghiên cứu</span>
    </a>
</div>
<div class="menu-item active">
    <a href="{{ route('dangkynghiencuu.index') }}">
        <img src="{{ asset('img/Vector.png') }}" alt="Register Icon" class="sidebar-icon" />
        <span>Đăng ký nghiên cứu</span>
    </a>
</div>
<div class="menu-item">
    <a href="{{ route('baocaodetai.index') }}">
        <img src="{{ asset('img/material-symbols_article-person-outline.png') }}" alt="Report Icon"
            class="sidebar-icon" />
        <span>Báo cáo đề tài</span>
    </a>
</div>
<div class="menu-item">
    <a href="{{ route('loimoihuongdan.index') }}">
        <img src="{{ asset('img/School Director.png') }}" alt="Invitation Icon" class="sidebar-icon" />
        <span>Lời mời hướng dẫn</span>
    </a>
</div>
@endsection

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f9ff;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

h1 {
    color: #1a5086;
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 20px;
}

.button-group {
    display: flex;
    gap: 20px;
    margin-bottom: 25px;
}

.button {
    background-color: #5083c9;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 15px 25px;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    text-transform: uppercase;
    text-align: center;
    min-width: 180px;
    line-height: 1.4;
}

table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-top: 20px;
}

th {
    background-color: #4a75af;
    color: white;
    text-align: center;
    padding: 12px 15px;
    font-weight: 500;
    border: 1px solid white;
}

td {
    color: white;
    padding: 12px 15px;
    border: 1px solid white;
    background: rgba(81, 131, 202, 0.60);
    text-align: center;

}

.tool-widget {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: white;
    border-radius: 5px;
    padding: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.tool-widget p {
    margin: 5px 0;
    font-size: 14px;
    color: #333;
}
</style>
<!-- Thông báo thành công -->
@if(session('success'))
<div id="overlay-success"
    style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; background: rgba(0, 0, 0, 0.5); z-index: 999;">
</div>
<div id="success-alert" class="alert alert-success mt-3"
    style="background-color: #f0f8ff; border: 1px solid #4682b4; border-radius: 10px; padding: 15px; display: flex; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1000; max-width: 90%; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
    <div style="color: #4682b4; margin-right: 20px; display: flex; justify-content: center; align-items: center;">
        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20 6L9 17l-5-5"></path>
        </svg>
    </div>
    <div style="color: #255293; font-size: 40px; font-weight: 500; text-align: center; margin-left: 20px;">
        {{ session('success') }}
    </div>
</div>
<script>
// Làm hiệu ứng mờ biến mất sau 3 giây
setTimeout(function() {
    var alert = document.getElementById('success-alert');
    var overlay = document.getElementById('overlay-success');
    var opacity = 1;
    var timer = setInterval(function() {
        if (opacity <= 0.1) {
            clearInterval(timer);
            alert.style.display = 'none';
            overlay.style.display = 'none';
        }
        alert.style.opacity = opacity;
        overlay.style.opacity = opacity;
        opacity -= 0.1;
    }, 100);
}, 100);
</script>
@endif


<div class="container">
    <h1>Đăng ký nghiên cứu</h1>

    <div class="button-group">
        <button class="button" type="button" data-bs-toggle="modal" data-bs-target="#dangkydinhhuongnghiencuu">Đăng ký
            định hướng<br>nghiên cứu</button>
        <button class="button" type="button" data-bs-toggle="modal" data-bs-target="#dangkydetaidukien">Đăng ký đề
            tài<br>dự kiến</button>
        <form action="{{ route('dangkynghiencuu.show') }}" method="GET" style="display: inline;">
            <button type="submit" class="button">Nộp danh sách<br>đề tài</button>
        </form>
    </div>

    <table>
        <thead>
            <tr>
                <th>Tên GV</th>
                <th>Mã GV</th>
                <th>Lĩnh vực nghiên cứu</th>
                <th>SL SV Hướng dẫn</th>
            </tr>
        </thead>
        <tbody>
            @foreach($giangviens as $gv)
            <tr>
                <td>{{ $gv->ten_gv }}</td>
                <td>{{ $gv->ma_gv }}</td>
                <td>{{ $gv->linh_vuc_nc }}</td>
                <td>{{ $gv->so_sv_huong_dan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

</div>

<div class="modal fade" id="dangkydinhhuongnghiencuu" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 800px;">
        <div class="modal-content" style="background-color: #d9eaff; padding: 30px; border-radius: 15px; border: none;">

            <!-- Header -->
            <div class="modal-header">
                <h5 class="modal-title fw-bold" style="color: #17488C;">Đăng ký định hướng nghiên cứu năm học</h5>
                <div class="text-end" style="color: #17488C;">
                    <span class="me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#17488C"
                            class="bi bi-calendar3" viewBox="0 0 16 16">
                            <path
                                d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                            <path
                                d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg>
                    </span>
                    2024-2025
                </div>
            </div>

            <div class="modal-body" style="color: #17488C; font-size: 16px; line-height: 2;">
                <div class="rounded p-3 mb-3" style="background-color: #95b9e6;">
                    <form id="researchForm" action="{{ route('giangvien.dangky-dinhhuong') }}" method="POST">
                        @csrf

                        <div>
                            <p>
                                <textarea name="research_orientation" class="form-control" rows="5"
                                    style="background-color: transparent; border: none; color: #17488C; font-size: 16px;">{{ old('research_orientation') }}</textarea>
                            </p>

                        </div>

                    </form>

                </div>
                <div id="researchErrorMsg" class="text-danger"
                    style="display: none; margin-top: -10px; font-size: 20px;">
                    Thiếu thông tin định hướng nghiên cứu!
                </div>
            </div>

            <!-- Footer -->
            <div class="modal-footer d-flex justify-content-end">
                <button type="button" class="btn fw-bold" id="btnSubmit"
                    style="background-color: #799DCB; color: #17488C; border-radius: 10px; padding: 8px 20px;">
                    Đăng ký
                </button>
                <button type="button" class="btn fw-bold" id="btnCancel" data-bs-dismiss="modal"
                    style="background-color: #799DCB; color: #17488C; border-radius: 10px; padding: 8px 20px;">
                    Hủy
                </button>
            </div>

            <script>
            document.getElementById('btnSubmit').addEventListener('click', function() {
                // Thêm xác thực phía client
                const researchField = document.querySelector('textarea[name="research_orientation"]');
                const errorMsg = document.getElementById('researchErrorMsg');

                if (!researchField.value.trim()) {
                    // Hiển thị thông báo lỗi ngay dưới ô nhập
                    errorMsg.style.display = 'block';
                    return;
                } else {
                    // Ẩn thông báo lỗi nếu có
                    errorMsg.style.display = 'none';
                    // Submit form
                    document.getElementById('researchForm').submit();
                }
            });

            // Thêm sự kiện để ẩn thông báo lỗi khi người dùng bắt đầu nhập
            document.querySelector('textarea[name="research_orientation"]').addEventListener('input', function() {
                if (this.value.trim()) {
                    document.getElementById('researchErrorMsg').style.display = 'none';
                }
            });

            // Thêm sự kiện để ẩn thông báo lỗi khi bấm nút hủy
            document.getElementById('btnCancel').addEventListener('click', function() {
                document.getElementById('researchErrorMsg').style.display = 'none';
                // Tùy chọn: có thể reset giá trị trong textarea
                document.querySelector('textarea[name="research_orientation"]').value = '';
            });
            </script>
        </div>
    </div>
</div>

<div class="modal fade" id="dangkydetaidukien" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 800px;">
        <div class="modal-content" style="background-color: #f0f8ff; padding: 30px; border-radius: 15px; border: none;">

            <!-- Header -->
            <div class="modal-header" style="border-bottom: none; padding-bottom: 0;">
                <h4 class="modal-title fw-bold" style="color: #17488C;">Đăng ký đề tài dự kiến</h4>
            </div>

            <!-- Body -->
            <div class="modal-body">
                <form id="formDangKyDeTai" action="{{ route('dangkydetaidukien.store') }}" method="POST">
                    @csrf
                    <div class="row mb-3 align-items-start">
                        <label for="tenDeTai" class="col-sm-3 col-form-label fw-bold" style="color: #17488C;">Tên đề
                            tài:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tenDeTai" name="tenDeTai" value=""
                                style="background-color: #95b9e6; border: none; border-radius: 10px; color: #17488C; padding: 10px;">
                        </div>
                    </div>

                    <div class="row mb-3 align-items-start">
                        <label for="moTa" class="col-sm-3 col-form-label fw-bold" style="color: #17488C;">Mô tả đề
                            tài:</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="moTa" name="moTa" rows="5"
                                style="background-color: #95b9e6; border: none; border-radius: 10px; color: #17488C; padding: 10px;"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3 align-items-center">
                        <label for="linhVuc" class="col-sm-3 col-form-label fw-bold" style="color: #17488C;">Lĩnh vực
                            nghiên cứu:</label>
                        <div class="col-sm-9">
                            <select class="form-select" id="linhVuc" name="linhVuc"
                                style="background-color: #95b9e6; border: none; border-radius: 10px; color: #17488C; padding: 10px;">
                                <option value="" selected>Chọn lĩnh vực...</option>
                                <option value="Công nghệ thông tin">Công nghệ thông tin</option>
                                <option value="Khoa học dữ liệu">Khoa học dữ liệu</option>
                                <option value="Trí tuệ nhân tạo">Trí tuệ nhân tạo</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3 align-items-center">
                        <label for="soLuongSV" class="col-sm-3 col-form-label fw-bold" style="color: #17488C;">Số lượng
                            sinh viên:</label>
                        <div class="col-sm-9">
                            <select class="form-select" id="soLuongSV" name="soLuongSV"
                                style="background-color: #95b9e6; border: none; border-radius: 10px; color: #17488C; width: 80px; padding: 10px;">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5" selected>5</option>
                            </select>
                        </div>
                        
                    </div>
                    <div id="ErrorMsg" class="text-danger"
                            style="display: none; margin-top: -10px; font-size: 20px;">
                            Thiếu thông tin đề tài!
                        </div>
                    <div class="modal-footer d-flex flex-column" style="border-top: none;">
                        <div id="formErrorMessage" class="text-danger mb-2 align-self-start"
                            style="display: none; font-size: 20px; margin-left: 25%; width: 75%;"></div>
                        <div class="d-flex align-self-end">
                            <button type="button" id="btnDangKy" class="btn me-2"
                                style="background-color: #95b9e6; color: #17488C; font-weight: bold; border-radius: 10px; padding: 8px 25px; font-size: 16px;">
                                Đăng ký
                            </button>
                            <button type="button" id="btnHuy" class="btn" data-bs-dismiss="modal"
                                style="background-color: #95b9e6; color: #17488C; font-weight: bold; border-radius: 10px; padding: 8px 25px; font-size: 16px;">
                                Hủy
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Lấy các phần tử form
    const form = document.getElementById('formDangKyDeTai');
    const tenDeTai = document.getElementById('tenDeTai');
    const moTa = document.getElementById('moTa');
    const linhVuc = document.getElementById('linhVuc');
    const errorMsg = document.getElementById('ErrorMsg');
    const btnHuy = document.getElementById('btnHuy');

    // Lấy các nút
    const btnDangKy = document.getElementById('btnDangKy');

    // Hàm kiểm tra và hiển thị lỗi
    function validateForm() {
        // Ẩn thông báo lỗi trước đó
        errorMsg.style.display = 'none';

        // Kiểm tra tất cả các trường
        if (!tenDeTai.value.trim() || 
            !moTa.value.trim() || 
            linhVuc.value === "" || 
            linhVuc.value === "Chọn lĩnh vực...") {
            
            // Hiển thị thông báo lỗi chung
            errorMsg.style.display = 'block';
            return false;
        }

        return true;
    }

    // Sự kiện khi nhấn nút Đăng ký
    btnDangKy.addEventListener('click', function() {
        if (!validateForm()) {
            return;
        }
        
        // Nếu validate thành công thì submit form
        form.submit();
    });

    // Sự kiện khi nhấn nút Hủy - ẩn thông báo lỗi
    btnHuy.addEventListener('click', function() {
        errorMsg.style.display = 'none';
    });

    // Xóa thông báo lỗi khi người dùng nhập liệu
    [tenDeTai, moTa, linhVuc].forEach(field => {
        field.addEventListener('input', function() {
            errorMsg.style.display = 'none';
        });
    });
});
</script>


@endsection
