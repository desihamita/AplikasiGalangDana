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
            <div class="card p-4 border text-center">
                <h1 class="display-4 font-weight-bold">Galang Dana</h1>
                <p class="lead text-capitalize mt-3">Untuk hal yang anda perjuangkan demi kemanusiaan</p>
                <a href="" class="btn btn-primary btn-lg rounded w-50 m-auto">Galang Dana Sekarang</a>
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

                @for ($i = 0; $i < 3; $i++)
                <div class="col-lg-4 col-md-6">
                    <div class="card mt-4">
                        <img src="https://via.placeholder.com/286x180/555" class="card-img-top" alt="...">
                        <div class="card-body p-2">
                            <div class="d-flex justify-content-between text-dark">
                                <p class="mb-0">Terkumpul: <strong>1jt</strong></p>
                                <p class="mb-0">Goal: <strong>10jt</strong></p>
                            </div>
                        </div>
                        <div class="card-body p-2 border-top">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-footer bg-light p-2">
                            <a href="" class="btn btn-primary d-block rounded">
                                <i class="fas fa-donate mr-2"></i>
                                Donasi Sekarang
                            </a>
                        </div>
                    </div>
                </div>
                @endfor
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
                    <a href="" class="btn btn-primary btn-lg rounded mb-auto">Galang Dana Sekarang</a>
                </div>
            </div>
        </div>
    </div>
    {{-- footer --}}
    <div class="footer bg-dark">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-3 text-white-80">
                    <div class="footer-logo mb-4">
                        <img src="{{ asset('/img/logoYI2.png') }}" alt=""  style="width:170px">
                    </div>
                    <p>
                        Jl. Hj Bona no.67, RT.02 / RW.08, <br>
                        Limo,Depok,Jawa Barat 16515
                    </p>
                    <p class="mb-1"><i class="fas fa-phone-alt mr-2"></i>0813-3059-4032</p>
                    <p class="mb-1"><i class="fas fa-envelope mr-2"></i>pedyouth@gmail.com</p>
                    <p class="mb-1"><i class="fas fa-globe mr-2"></i>www.youtpehIndonesia.com</p>
                </div>
                <div class="col-lg-3 text-white-80">
                    <h5 class="mb-lg-4 mb-2">Mari Berbagi</h5>
                    <p class="mb-lg-3 mb-1">
                        <a href="" class="text-white-80 text-decoration-none">Galang Dana</a><br>
                        <small class="text-muted">{{ tanggal_indonesia(now()) }}</small>
                    </p>
                    <p class="mb-lg-3 mb-1">
                        <a href="" class="text-white-80 text-decoration-none">Donasi</a><br> 
                        <small class="text-muted">{{ tanggal_indonesia(now()) }}</small>
                    </p>
                </div>
                <div class="col-lg-3 text-white-80">
                    <h5 class="mb-lg-4 mb-1">Bantuan</h5>
                    <p class="mb-lg-3 mb-1">
                        <a href="" class="text-white-80 text-decoration-none">Galang Dana</a><br>
                    </p>
                    <p class="mb-lg-3 mb-1">
                        <a href="" class="text-white-80 text-decoration-none">Syarat dan Ketentuan</a><br>
                    </p>
                    <p class="mb-lg-3 mb-1">
                        <a href="" class="text-white-80 text-decoration-none">Kebijakan dan Privasi</a><br>
                    </p>
                </div>
                <div class="col-lg-3 text-white-80">
                    <h5 class="mb-lg-4 mb-2">Newsletter</h5>
                    <form action="" class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Masukan Email">
                        <div class="input-group append">
                            <button class="btn btn-primary px-3"><i class="fas fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
