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
<div class="menu-item">
    <a href="{{ route('baocaodetai.index') }}">
        <img src="{{ asset('img/material-symbols_article-person-outline.png') }}" alt="Report Icon" class="sidebar-icon" />
        <span>Báo cáo đề tài</span>
    </a>
</div>
<div class="menu-item active">
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
      margin-top: 50px;
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
    
    .text-center {
      text-align: center;
    }
    
    .xu-ly-btn {
    background-color: transparent; /* Loại bỏ màu nền */
    color: #17478c; /* Màu chữ giống label */
    font-family: "Inter-SemiBold", Helvetica;
    font-weight: 600;
    font-size: 20px;
    text-decoration: underline; /* Gạch chân chữ */
    cursor: pointer;
    border: none;
    padding: 0; /* Loại bỏ padding */
    white-space: nowrap; /* Đảm bảo chữ không bị xuống dòng */
    }
  </style>

  <h1 class="page-title">Lời mời hướng dẫn</h1>

  @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
  @endif
  
  @if(Session::has('warning'))
    <div class="alert alert-warning">
        {{ Session::get('warning') }}
    </div>
  @endif
  
  @if(Session::has('error'))
    <div class="alert alert-danger">
        {{ Session::get('error') }}
    </div>
  @endif

  <table>
    <thead>
      <tr>
        <th>Tên sinh viên</th>
        <th>Tên đề tài</th>
        <th>Trạng thái</th>
        <th>Thời gian gửi</th>
        <th>Xét duyệt</th>
      </tr>
    </thead>
    <tbody>
      @forelse($loimois as $loimoi)
        <tr>
          <td>{{ $loimoi->SinhVien->ten_sv ?? 'N/A' }}</td>
          <td>{{ $loimoi->DeTai->ten_de_tai ?? 'N/A' }}</td>
          <td>{{ $loimoi->trang_thai ?? 'Chưa duyệt' }}</td>
          <td>
            @if ($loimoi->created_at->diffInDays(now()) >= 1)
                {{ $loimoi->created_at->format('d/m/Y') }}
            @else
                {{ $loimoi->created_at->diffForHumans() }}
            @endif
          </td>
          <td class="text-center">
          <a type="button" data-bs-toggle="modal" data-bs-target="#xacnhanModal{{ $loimoi->id }}" class="xu-ly-btn">Xử lý</a>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="5" class="text-center">Không có lời mời hướng dẫn nào.</td>
        </tr>
      @endforelse
    </tbody>
  </table>
  @foreach($loimois as $loimoi)
    <div class="modal fade" id="xacnhanModal{{ $loimoi->id }}" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" style="max-width: 700px;">
          <div class="modal-content" style="background-color: #d9eaff; padding: 30px; border-radius: 15px;">

              <!-- Header -->
              <div class="modal-header" style="border-bottom: none;">
                  <h1 class="modal-title" style="color: #17488C; font-weight: bold;">Xử lý lời mời</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                      style="color: #17488C; font-size: 22px;"></button>
              </div>

              <!-- Body -->
              <div class="modal-body">
                  <div class="container">
                      <div class="row mb-3 align-items-center">
                          <label class="col-4 text-start fw-bold" style="color: #17488C; font-size: 20px;">Tên sinh viên:</label>
                          <div class="col-8 d-flex align-items-center">
                              <span style="color: #17488C; font-size: 20px;">{{ $loimoi->SinhVien->ten_sv ?? 'N/A' }}</span>
                          </div>
                      </div>

                      <div class="row mb-3 align-items-center">
                          <label class="col-4 text-start fw-bold" style="color: #17488C; font-size: 20px;">Mã sinh viên:</label>
                          <div class="col-8">
                              <span class="form-control text-center" style="background-color: rgba(81, 131, 202, 0.6); 
                                          border-radius: 12px; color: #17488C; font-size: 20px; border: none;width:55%">
                                  {{ $loimoi->SinhVien->ma_sv ?? 'N/A' }}
                              </span>
                          </div>
                      </div>

                      <div class="row mb-3 align-items-center">
                          <label class="col-4 text-start fw-bold" style="color: #17488C; font-size: 20px;">Tên đề tài:</label>
                          <div class="col-8">
                              <span class="form-control text-center" style="background-color: rgba(81, 131, 202, 0.6);
                                          border-radius: 12px; color: #17488C; font-size: 20px; border: none;">
                                  {{ $loimoi->DeTai->ten_de_tai ?? 'N/A' }}
                              </span>
                          </div>
                      </div>

                      <div class="row mb-3 align-items-center">
                          <label class="col-4 text-start fw-bold" style="color: #17488C; font-size: 20px;">Thời gian gửi:</label>
                          <div class="col-8 d-flex align-items-center">
                              <i class="bi bi-clock" style="color: #17488C; font-size: 20px; margin-right: 8px;"></i>
                              <span style="color: #17488C; font-size: 18px; font-weight: bold;">
                                {{ $loimoi->created_at ? $loimoi->created_at->format('H:i A d/m/Y') : 'N/A' }}
                              </span>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- Footer -->
              <div class="modal-footer justify-content-end">
                <button type="button" data-bs-toggle="modal" data-bs-target="#dongy{{ $loimoi->id }}"
                    style="background-color: rgba(81, 131, 202, 0.6); color: #17488C;
                          border-radius: 22px; padding: 10px 30px; font-size: 18px; font-weight: bold;">
                    Đồng ý
                </button>

                <form action="{{ route('FormGiangVien.FormLoiMoiHuongDan.xuLy') }}" method="POST">
                    @csrf
                    <input type="hidden" name="loimoi_id" value="{{ $loimoi->id }}">
                    <button type="submit" name="action" value="reject" class="btn"data-bs-toggle="modal" data-bs-target="#tuchoi{{ $loimoi->id }}"
                        style="background-color: rgba(81, 131, 202, 0.6); color: #17488C;
                              border-radius: 22px; padding: 10px 30px; font-size: 18px; font-weight: bold;">
                        Từ chối
                    </button>
                </form>
            </div>

          </div>
      </div>
    </div>

    <div class="modal fade" id="dongy{{ $loimoi->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
            <div class="modal-content" style="background-color: #d9eaff; padding: 20px; border-radius: 10px;color:#17488C">
                <div class="modal-header" style="border-bottom: 2px solidrgb(24, 83, 165) !important;">
                    <h1 class="modal-title"><img src="{{ asset('img/Megaphone.png') }}" width="30"> Thông báo</h1>
                </div>
                <div class="modal-body text-center">
                    <h3 id="thongbaoText">Bạn có muốn xác nhận đồng ý lời mời?</h3>
                </div>
                <div class="modal-footer d-flex">
                    <form action="{{ route('FormGiangVien.FormLoiMoiHuongDan.xuLy') }}" method="POST">
                        @csrf
                        <input type="hidden" name="loimoi_id" value="{{ $loimoi->id }}">
                        <input type="hidden" name="action" value="accept">
                        <button type="submit" class="btn btn-primary flex-grow-1 mx-5 "data-bs-toggle="modal" data-bs-target="#xacnhan{{ $loimoi->id }}"
                            style="background-color: rgba(81, 131, 202, 0.6); color: #17488C;
                            border-radius: 22px; padding: 10px 30px; font-size: 20px; font-weight: bold;"
                            id="btnTaiLen">Xác nhận</button>
                    </form>
                    <button type="button" class="btn btn-secondary flex-grow-1 mx-2"
                        style="background-color: rgba(81, 131, 202, 0.6); color: #17488C;
                        border-radius: 22px; padding: 10px 30px; font-size: 20px; font-weight: bold;"
                        data-bs-dismiss="modal">Hủy</button>
                </div>
            </div>
        </div>
    </div>
  <div class="modal fade" id="xacnhan{{ $loimoi->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
        <div class="modal-content" style="background-color: #d9eaff; padding: 20px; border-radius: 10px; color: #17488C; display: flex; align-items: center;">
            
            <div class="modal-body d-flex align-items-center justify-content-center" style="gap: 15px;">
                <!-- Icon dấu tích -->
                <div style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                    <img src="{{ asset('img/Done.png') }}" width="40">
                </div>
                <!-- Nội dung thông báo -->
                <h4 style="font-size: 22px; font-weight: bold; margin: 0;">Đồng ý lời mời thành công!</h4>
            </div>
        </div>
    </div>
  </div>
  <div class="modal fade" id="tuchoi{{ $loimoi->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
        <div class="modal-content" style="background-color: #d9eaff; padding: 20px; border-radius: 10px; color: #17488C; display: flex; align-items: center;">
            
            <div class="modal-body d-flex align-items-center justify-content-center" style="gap: 15px;">
                <!-- Icon dấu tích -->
                <div style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                    <img src="{{ asset('img/Done.png') }}" width="40">
                </div>
                <!-- Nội dung thông báo -->
                <h4 style="font-size: 22px; font-weight: bold; margin: 0;">Từ chối lời mời thành công!</h4>
            </div>
        </div>
    </div>
  </div>
  @endforeach
@endsection
