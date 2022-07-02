@extends('layouts.front')

@section('title', 'Mari kita saling berbagi')

@push('css')
<style>
    /* jumbotron */
    .jumbotron {
        height: 87.5vh;
        background-image: url('{{ asset("/img/bgcharity1.jpg")}}');
        background-size: cover;
        background-repeat: no-repeat;
        border-radius: 0;
    }
    .jumbotron .bg-white-50:hover {
        background: rgba(255, 255, 255, .15);
    }
    @media (max-width:575.98px) {
        .jumbotron .btn-rounded {
            width: 100% !important;
        }
        .jumbotron .display-4 {
            font-size: 42px;
        }
     }

    /* info campaign */
    @media (max-width: 575.98px) {
        .info-campaign .fo-2x.text {
            font-size: 24px;
        }
    }

    /* dana tersalurkan */
    .data-tersalurkan .card {
        border: 0;
        box-shadow: 0 1rem rgb(0, 0, 0, .1) !important;
        transition: 1s;
    }

    .data-tersalurkan .card:hover,
    .data-tersalurkan .card:focus {
        transform: translateY(-5px);
    }

    /* galang dana */
    .galang-dana2 .fa-3x {
        font-size: 32px;
    }
    .galang-dana2 h3 {
        font-size: 18px;
    }
</style>
@endpush

@section('content')
    {{-- jumbotron --}}
    <div class="jumbotron d-flex justify-content-center align-items-center mb-0">
        <div class="shadow-sm p-3 bg-white-50 rounded">
            <div class="card p-4 border text-center mb-0">
                <h1 class="display-4 font-weight-bold">Galang Dana</h1>
                <p class="lead text-capitalize mt-3">Untuk hal yang anda perjuangkan demi kemanusiaan</p>
                <a href="{{ url('/campaign') }}" class="btn btn-primary btn-lg rounded w-50 m-auto">Galang Dana Sekarang</a>
            </div>
        </div>
    </div>
    {{-- info campaign --}}
    <div class="info-campaign bg-dark">
        <div class="container text-white py-5">
            <div class="row text-center">
                <div class="col-lg-3 col-md-6">
                    <p class="icon">
                        <i class="fas fa-smile fa-4x"></i>
                    </p>
                    <p class="fa-2x font-weight-bold">4</p>
                    <p class="fa-2x text mb-0 text-uppercase">Donatur</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <p class="icon">
                        <i class="fas fa-rocket fa-4x"></i>
                    </p>
                    <p class="fa-2x font-weight-bold">4</p>
                    <p class="fa-2x text mb-0 text-uppercase">Misi Sukses</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <p class="icon">
                        <i class="fas fa-user-plus fa-4x"></i>
                    </p>
                    <p class="fa-2x font-weight-bold">4</p>
                    <p class="fa-2x text mb-0 text-uppercase">Relawan</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <p class="icon">
                        <i class="fas fa-globe fa-4x"></i>
                    </p>
                    <p class="fa-2x font-weight-bold">4</p>
                    <p class="fa-2x text mb-0 text-uppercase">Projek Berjalan</p>
                </div>
            </div>
        </div>
    </div>
    {{-- dana tersalurkan --}}
    <div class="dana-tersalurkan">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="fa-3x mb-4">DANA TERSALURKAN</h2>
                    <h4 class="font-weight-light mb-3">
                        Jika anda dapat bergabung dengan kami sekarang, <br>
                        maka semakin banyak yang terbantu
                    </h4>
                </div>

                @foreach ($campaign as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="card mt-4">
                        <div class="rounded-top" style="height:200px; overflow:hidden;">
                            @if (Storage::disk('public')->exists($item->path_image))
                                <img src="{{ Storage::disk('public')->url($item->path_image) }}" class="card-img-top" alt="...">
                            @else
                                <img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17affada31b%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17affada31b%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.1953125%22%20y%3D%2295.5265625%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" class="card-img-top" alt="...">
                            @endif
                        </div>
                        <div class="card-body p-2">
                            <div class="d-flex justify-content-between text-dark">
                                <p class="mb-0">Terkumpul: <strong>{{ format_uang($item->nominal) }}</strong></p>
                                <p class="mb-0">Goal: <strong>{{ format_uang($item->goal) }}</strong></p>
                            </div>
                        </div>
                        <div class="card-body p-2 border-top">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">{{ Str::limit($item->short_description, 100) }}</p>
                        </div>
                        <div class="card-footer p-2">
                            <a href="{{ url('/donation/'. $item->id) }}" class="btn btn-primary d-block rounded">
                                <i class="fas fa-donate mr-2"></i>
                                Donasi Sekarang
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- galang dana youthped --}}
    <div class="galang-dana2 bg-white">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="fa-3x mb-4">GALANG DANA DI YOUTHPED INDONESIA</h2>
                    <h4 class="font-weight-light mb-3">
                        Dari menolong anggota keluarga, Hingga membangun jembatan di desa, <br>
                        ribuan orang telah menggunakan youthped indonesia untuk galang dana.
                    </h4>
                    <a href="{{ url('/campaign') }}" class="btn btn-primary btn-lg rounded mb-auto">Galang Dana Sekarang</a>
                </div>
            </div>
        </div>
    </div>

@endsection

<x-toast />
