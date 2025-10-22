    @extends('layouts.app')

    @section('sidebar')
    <div class="menu-item active">
        <a href="{{ route('FormSinhVien.student.index') }}">
            <img src="{{ asset('img/Commercial.png') }}" alt="News Icon" class="sidebar-icon" />
            <span>Tin tức</span>
        </a>
    </div>
    <div class="menu-item">
        <a href="{{ route('FormSinhVien.detai.index') }}">
            <img src="{{ asset('img/Saddle Stitched Booklet.png') }}" alt="Research Icon" class="sidebar-icon" />
            <span>Đề tài nghiên cứu</span>
        </a>
    </div>
    <div class="menu-item">
        <a href="{{ route('FormSinhVien.searchgv.index') }}">
            <img src="{{ asset('img/Vector.png') }}" alt="Register Icon" class="sidebar-icon" />
            <span>Tìm kiếm giảng viên</span>
        </a>
    </div>
    <div class="menu-item">
        <a href="{{ route('FormSinhVien.loimoi.index') }}">
            <img src="{{ asset('img/School Director.png') }}" alt="Invitation Icon" class="sidebar-icon" />
            <span>Lời mời hướng dẫn</span>
        </a>
    </div>
    @endsection

    @section('content')
    <h2 class="page-title">Tin tức</h2>


    @foreach ($students as $item)
    <div class="news-section" >
        <div class="news-item">
            <div class="col-md-11">
                <div class="card-body" style="color:  #225293;">
                    <h5 class="card-title news-text-color">{{ $item->tieu_de }}</h5>
                    <p class="card-text news-text-color">
                        <small>{{ date('d/m/Y', strtotime($item->ngay_dang)) }}</small>
                    </p>
                    <p class="card-text news-text-color">{{ Str::limit($item->noi_dung, 150) }}</p>
                    <div class="news-link d-flex justify-content-end">
                        <img src="{{ asset('img/Chevron Right.png') }}" alt="Arrow" />
                        <a href="{{ route('FormSinhVien.student.show', ['ma_tin_tuc' => $item->ma_tin_tuc]) }}">Xem chi
                            tiết tin tức</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="divider"></div>
    @endforeach


    @endsection
