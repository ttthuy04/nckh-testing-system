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
<div class="menu-item ">
    <a href="{{ route('dangkynghiencuu.index') }}">
        <img src="{{ asset('img/Vector.png') }}" alt="Register Icon" class="sidebar-icon" />
        <span>Đăng ký nghiên cứu</span>
    </a>
</div>
<div class="menu-item active">
    <a href="{{ route('baocaodetai.index') }}">
        <img src="{{ asset('img/material-symbols_article-person-outline.png') }}" alt="Report Icon" class="sidebar-icon" />
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
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap');
    
    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #e7f5ff;
    }
    
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }
    
    .page-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }
    
    .page-title {
      font-size: 24px;
      color: #1a5086;
      font-weight: bold;
      margin: 0;
    }
    
    table {
      width: 100%;
      border-collapse: collapse;
      border-spacing: 0;
      margin-top: 50px
    }
    
    th {
      background-color: #4a75af;
      color: white;
      text-align: left;
      padding: 12px 15px;
      font-weight: 500;
      border: 1px solid white;
    }
    
    td {
      padding: 12px 15px;
      border: 1px solid white;
      background-color: #8CB1DF;
      color: white;
      font-weight: normal;
    }
    
    tr.empty-row td {
      height: 50px;
      background-color: #8CB1DF;
    }
    
    .text-center {
      text-align: center;
    }
    .xem-bao-cao {
    text-decoration: underline; /* Gạch chân */
    color: inherit; /* Giữ nguyên màu chữ mặc định */
}

.xem-bao-cao:hover {
    text-decoration: none; /* Khi hover thì bỏ gạch chân */
}
  </style>
  @if(session('message'))
    <div class="alert alert-warning">
        {{ session('message') }}
    </div>
@endif
  <h1 class="page-title">Báo cáo đề tài</h1>

<table>
  <thead>
    <tr>
      <th>Mã báo cáo</th>
      <th>Tên đề tài</th>
      <th>Tiêu đề</th>
      <th>Hoạt động</th>
      <th>Trạng thái</th>
    </tr>
  </thead>
  <tbody>
    @if(isset($baocaos) && count($baocaos) > 0)
      @foreach($baocaos as $baocao)
      <tr>
        <td>{{ $baocao->ma_bc }}</td>
        <td>{{ $baocao->DeTai->ten_de_tai ?? 'Không có tên đề tài' }}</td>
        <td>{{ $baocao->tieu_de }}</td>
        <td class="text-center">
    <a type="button" data-bs-toggle="modal" data-bs-target="#xembaocao{{ $baocao->ma_bc }}" class="xem-bao-cao">Xem báo cáo</a>
</td>
        <td class="text-center">
        @if($baocao->trang_thai == 'Chờ duyệt')
    <a type="button" data-bs-toggle="modal" data-bs-target="#duyet{{ $baocao->ma_bc }}" class="trang-thai-btn text-white">Chưa duyệt</a>
@elseif($baocao->trang_thai == 'Được duyệt')
    <a type="button" data-bs-toggle="modal" data-bs-target="#duyet{{ $baocao->ma_bc }}" class="trang-thai-btn text-white">Đã duyệt</a>
@elseif($baocao->trang_thai == 'Bị từ chối')
    <a type="button" data-bs-toggle="modal" data-bs-target="#duyet{{ $baocao->ma_bc }}" class="trang-thai-btn text-white">Từ chối</a>
          @else
            <span>{{ $baocao->trang_thai }}</span>
          @endif
        </td>
      </tr>
      @endforeach
    @else
      <tr>
        <td colspan="5" class="text-center">Không có báo cáo nào</td>
      </tr>
    @endif
    
    @for($i = count($baocaos ?? []); $i < 5; $i++)
      <tr class="empty-row">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    @endfor
  </tbody>
</table>

@if(isset($baocaos) && count($baocaos) > 0)
  @foreach($baocaos as $baocao)
  <!-- Modal xem báo cáo -->
  <div class="modal fade" id="xembaocao{{ $baocao->ma_bc }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 800px;">
        <div class="modal-content" style="background-color: #d9eaff; padding: 30px; border-radius: 15px;">

            <!-- Header -->
            <div class="modal-header" style="border-bottom: none;">
                <h5 class="modal-title fw-bold" style="color: #17488C;">Thông tin chi tiết của đề tài</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Body -->
            <div class="modal-body" style="color: #17488C; font-size: 16px; line-height: 1.6;">
                <p><strong>Mã báo cáo:</strong> {{ $baocao->ma_bc }}</p>
                <p><strong>Tiêu đề:</strong> {{ $baocao->tieu_de }}</p>
                <p><strong>Nội dung:</strong></p>
                <p style="text-align: justify; padding-left: 10px;">
                    {{ $baocao->noi_dung }}
                </p>

                <hr style="border: 1px dashed #17488C; margin: 15px 0;">

                <p><strong>Tên đề tài:</strong> {{ $baocao->DeTai->ten_de_tai ?? 'Không có tên đề tài' }}</p>
                <p><strong>Người tạo:</strong> {{ $baocao->nguoi_tao }}</p>
                <p><strong>Ngày tạo:</strong> {{ $baocao->created_at ? $baocao->created_at->format('d/m/Y') : 'N/A' }}</p>
                <p><strong>Trạng thái:</strong> {{ $baocao->trang_thai }}</p>
                <p><strong>Đường dẫn tệp:</strong> <a href="{{ $baocao->duong_dan_tep }}" target="_blank" style="color: #17488C; text-decoration: underline;">{{ $baocao->duong_dan_tep }}</a></p>

                <!-- Nhận xét -->
                <p class="fw-bold mt-3">Nhận xét:</p>
                <button type="button" class="btn w-100 text-start" 
                    data-bs-toggle="modal" data-bs-target="#modalNhanXet{{ $baocao->ma_bc }}"
                    style="background-color: rgba(81, 131, 202, 0.6); color: #17488C; font-weight: bold;
                    border-radius: 22px; padding: 10px 30px; font-size: 18px;">
                    Nhập văn bản (Không yêu cầu bắt buộc)
                </button>
            </div>
        </div>
    </div>
  </div>

  <!-- Modal duyệt -->
  <div class="modal fade" id="duyet{{ $baocao->ma_bc }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
        <div class="modal-content" style="background-color: #d9eaff; padding: 20px; border-radius: 10px;color:#17488C">
            <div class="modal-header" style="border-bottom: 2px solidrgb(24, 83, 165) !important;">
                <h1 class="modal-title"><img src="{{ asset('img/Megaphone.png') }}" width="30"> Thông báo</h1>
            </div>
            <div class="modal-body text-center">
                <h3 id="thongbaoText">Bạn chắc chắn muốn duyệt báo cáo?</h3>
            </div>
            <div class="modal-footer d-flex">
                <form action="{{ route('FormGiangVien.FormBaoCaoNghienCuu.xuLy') }}" method="POST">
                    @csrf
                    <input type="hidden" name="baocao_id" value="{{ $baocao->ma_bc }}">
                    <input type="hidden" name="action" value="accept">
                    <button type="submit" class="btn btn-primary flex-grow-1 mx-5"data-bs-toggle="modal" data-bs-target="#xacnhan{{ $baocao->ma_bc }}"
                        style="background-color: rgba(81, 131, 202, 0.6); color: #17488C;
                        border-radius: 22px; padding: 10px 30px; font-size: 20px; font-weight: bold;">
                        Xác nhận
                    </button>
                    <button type="submit" name="action" value="reject" class="btn"data-bs-toggle="modal" data-bs-target="#tuchoi{{ $baocao->ma_bc }}"
                        style="background-color: rgba(81, 131, 202, 0.6); color: #17488C;
                              border-radius: 22px; padding: 10px 30px; font-size: 18px; font-weight: bold;">
                        Từ chối
                    </button>
                </form>
            </div>
        </div>
    </div>
  </div>
  
 <!-- Modal nhận xét -->
<div class="modal fade" id="modalNhanXet{{ $baocao->ma_bc }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 700px;">
        <div class="modal-content" style="background-color: #e3f0ff; padding: 20px; border-radius: 15px; border: none;">
            
            <!-- Header -->
            <div class="modal-header" style="border-bottom: none;">
                <h4 class="modal-title fw-bold" style="color: #17488C;">Nhận xét</h4>
            </div>

            <!-- Body -->
            <div class="modal-body">

                    <textarea id="noi_dung{{ $baocao->ma_bc }}" name="noi_dung" class="form-control" placeholder="Nhập văn bản (Không yêu cầu bắt buộc)" 
    style="background-color: #799DCB; border-radius: 10px; border: none; 
    color:rgb(236, 237, 239); padding: 15px; font-size: 16px; height: 200px;">{{ optional($baocao->NhanXetBaoCao)->noi_dung}}</textarea>
            </div>
            <!-- Footer -->
            <div class="modal-footer d-flex justify-content-end">
            <form action="{{ route('FormGiangVien.FormBaoCaoNghienCuu.nhanXet') }}" method="POST">
                    @csrf
                    <input type="hidden" name="ma_bc" value="{{ $baocao->ma_bc }}">
                
                <button type="submit" class="btn" data-bs-toggle="modal" data-bs-target="#submit{{ $baocao->ma_bc }}"
                    style="background-color: #799DCB; color: #17488C; font-weight: bold;
                    border-radius: 15px; padding: 8px 25px; font-size: 16px;">
                    Gửi
                </button>
              </form>
                <button type="button" class="btn" data-bs-dismiss="modal"
                    style="background-color: #799DCB; color: #17488C; font-weight: bold;
                    border-radius: 15px; padding: 8px 25px; font-size: 16px;">
                    Quay lại
                </button>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="submit{{ $baocao->ma_bc }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
        <div class="modal-content" style="background-color: #d9eaff; padding: 20px; border-radius: 10px; color: #17488C; display: flex; align-items: center;">
            
            <div class="modal-body d-flex align-items-center justify-content-center" style="gap: 15px;">
                <!-- Icon dấu tích -->
                <div style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                    <img src="{{ asset('img/Done.png') }}" width="40">
                </div>
                <!-- Nội dung thông báo -->
                <h4 style="font-size: 22px; font-weight: bold; margin: 0;">Nhận xét đã được lưu thành công!</h4>
            </div>
        </div>
    </div>
  </div>


  <div class="modal fade" id="xacnhan{{ $baocao->ma_bc }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
        <div class="modal-content" style="background-color: #d9eaff; padding: 20px; border-radius: 10px; color: #17488C; display: flex; align-items: center;">
            
            <div class="modal-body d-flex align-items-center justify-content-center" style="gap: 15px;">
                <!-- Icon dấu tích -->
                <div style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                    <img src="{{ asset('img/Done.png') }}" width="40">
                </div>
                <!-- Nội dung thông báo -->
                <h4 style="font-size: 22px; font-weight: bold; margin: 0;">Duyệt báo cáo thành công!</h4>
            </div>
        </div>
    </div>
  </div>
  <div class="modal fade" id="tuchoi{{ $baocao->ma_bc }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
        <div class="modal-content" style="background-color: #d9eaff; padding: 20px; border-radius: 10px; color: #17488C; display: flex; align-items: center;">
            
            <div class="modal-body d-flex align-items-center justify-content-center" style="gap: 15px;">
                <!-- Icon dấu tích -->
                <div style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                    <img src="{{ asset('img/Done.png') }}" width="40">
                </div>
                <!-- Nội dung thông báo -->
                <h4 style="font-size: 22px; font-weight: bold; margin: 0;">Từ chối báo cáo thành công!</h4>
            </div>
        </div>
    </div>
  </div>

  @endforeach
@endif

@endsection
