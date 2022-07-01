@extends('layouts.front')

@section('title', 'Darurat! Peduli Korban Gempa Banten')

@push('css')
<style>
    @media (max-width:575.89px) {
        .text-lg {
            font-size: 18px;
        }
    }
    .daftar-donasi.nav-pills .nav-link.active, 
    .daftar-donasi.nav-pills .show>.nav-link {
        background: transparent;
        color: var(--dark);
        border-bottom: 3px solid var(--blue);
        border-radius: 0;
      }
</style>
@endpush

@section('content')
    {{-- banner --}}
    <div class="banner bg-charity2">
        <div class="container">
            <h2 class="fa-2x text-white">Darurat! Peduli Korban Gempa Banten</h2>
        </div>
    </div>
    {{-- donation detail --}}
    <div class="tentang-kami bg-white ">
        <div class="container py-5">
            <div class="row justify-content-between">
                <div class="col-lg-7">
                    <div class="d-flex align-items-center">
                        <div class="img rounded-circle" style="width:60px; overflow:hidden;">
                            <img src="{{ asset('AdminLTE/dist/img/user1-128x128.jpg')}}" alt="" class="w-100">
                        </div>
                        <div class="ml-3">
                            <strong class="d-block">Username</strong>
                            <small class="text-muted">01 Juli 2022</small>
                        </div>
                    </div>
                    <div class="thumbnail rounded mt-4" style="overflow: hidden;">
                        <img src="https://via.placeholder.com/286x180" alt="" class="w-100">
                    </div>
                    <div class="body mt-4">
                        <h5>Creatin Something New</h5>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti, autem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, laboriosam.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore velit quisquam odit laudantium. Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt!</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint quia itaque ex iure!</p>

                        <h5>It's time to build your new project</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente vero ipsam sit veritatis consequuntur doloremque aliquam consectetur reprehenderit facere. Quod!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus dolorum facere accusamus necessitatibus temporibus!</p>

                        <div class="kategori border-top pt-3">
                            <a href="" class="badge badge-primary p-2 rounded-pill">Korban Banjir</a>
                        </div>
                        <hr class="d-lg-none d-block">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0 shadow-0">
                        <h1 class="font-weight-bold">Rp. {{ format_uang(300000) }}</h1>
                        <p class="font-weight-bold">Tekumpul dari Rp. {{ format_uang('1000000') }}</p>
                        <div class="progress" style="height: .3rem;">
                            <div class="progress-bar" role="progressbar" style="width: 7%" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between mt-1">
                            <p>tercapai 7%</p>
                            <p>3 bulan lagi</p>
                        </div>
                        <div class="donasi mt-2 mb-4">
                            <a href="{{ url('/donation/1/create') }}" class="btn btn-primary btn-lg btn-block">Donasi Sekarang</a>
                        </div>

                        <h3 class="font-weight-bold">Donatur (3)</h3>

                        <ul class="nav nav-pills mb-3 daftar-donasi" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="pills-waktu-tab" data-toggle="pill" href="#pills-waktu" role="tab"
                                    aria-controls="pills-waktu" aria-selected="true">Waktu</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-jumlah-tab" data-toggle="pill" href="#pills-jumlah" role="tab"
                                    aria-controls="pills-jumlah" aria-selected="false">Jumlah</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-waktu" role="tabpanel" aria-labelledby="pills-waktu-tab">
                              @for ($i = 0; $i < 3; $i++)
                                  <div @if ($i > 0) class="mt-1" @endif>
                                    <p class="font-weight-bold mb-0">User</p>
                                    <p class="font-weight-bold mb-0">Rp. {{ format_uang(100000)}}</p>
                                    <p class="text-muted mb-0">{{ tanggal_indonesia(date('Y-m-d H:i:s')) }}</p>
                                  </div>
                              @endfor
                            </div>
                            <div class="tab-pane fade" id="pills-jumlah" role="tabpanel" aria-labelledby="pills-jumlah-tab">
                                jumlah
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
