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
    <div class="menu-item active">
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
    <div class="menu-item">
        <a href="{{ route('vanphongkhoa.truyvanthongtin') }}">
            <img src="{{ asset('images/mdi_court-hammer.png') }}" alt="Invitation Icon" class="sidebar-icon" />
            <span>Truy vấn thông tin</span>
        </a>
    </div>
@endsection

@section('content')
    <style>
        .grid-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 30px;
            padding: 20px;
            margin-left: 100px;
        }

        .row {
            display: flex;
            justify-content: center;
            gap: 30px;
            width: 100%;
        }

        .custom-button {
            width: 334.45px;
            height: 175px;
            border-radius: 10px;
            background-color: #5183CA;
            color: #E7F5FF;
            font-family: Rasa;
            font-weight: 500;
            font-size: 36px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            box-shadow: none;
            padding: 10px;
            margin-right: 143px;
            margin-top: 50px;

        }

        .wide {
            width: 320px;
            margin-top: 100px;
        }

        /* Responsive */
        @media screen and (max-width: 768px) {
            .row {
                flex-direction: column;
                align-items: center;
            }

            .wide {
                width: 320px;
            }
        }
    </style>
    <div class="flex-grow p-6">
        <div class="flex justify-between items-center mb-6">
            <p style="color: #17478c; font-size: 48px;font-weight: 500; padding-left:50px;">Phản biện & Bảo vệ</p>
        </div>
        <hr style="height: 2px;background-color: #17478c; border: none;margin-top:16px; width: 120%; margin-left:-20px;" />

        <!-- Container chứa button -->
        <div class="grid-container">
            <!-- Hàng trên với 2 button -->
            <div class="row">
                <form action="{{ route('vanphongkhoa.chonhoidong') }}" method="GET">
                    <button class="custom-button">Chia hội đồng phản biện</button>
                </form>
                <form action="{{ route('vanphongkhoa.ghepdoidetaihoidong') }}" method="GET">
                    <button class="custom-button">Ghép đôi đề tài - hội đồng</button>
                </form>
            </div>

            <!-- Hàng dưới với 1 button dài -->
            <div class="row">
                <form action="{{ route('vanphongkhoa.capnhatlichtrinhbaove') }}" method="GET">
                    <button class="custom-button wide">Cập nhật lịch trình bảo vệ đề tài</button>
                </form>
            </div>
        </div>

    </div>

@endsection