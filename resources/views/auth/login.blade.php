@extends('layouts.guest')

@section('title', 'Login')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image">

            </div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <a href="{{ url('/') }}" class="text-center">
                                    <img src="{{ asset('/img/logoYI2.png') }}" alt="" class="w-53 mb-4">
                                </a>
                                <h4 class="login-heading mb-4 text-center">Selamat Datang kembali!</h4>

                                {{-- form --}}
                                <form action="{{ route('login') }}" method="post">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="email">Email</label>
                                        <input type="emai" name="email" id="email" class="form-control @error('email') is-invalid @enderror">

                                        @error('email')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">

                                        @error('password')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group d-flex justify-content-between align-items-center mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="" id="" class="small mt-1 text-muted">
                                            <label for="customcheck1" form="custom-control-label">Ingat saya?</label>
                                        </div>
                                        <a href="" class="small mt-1 text-muted">Lupa Password?</a>
                                    </div>

                                    <div class="d-grid">
                                        <button class="btn btn-lg btn-primary btn-login mb-2">
                                            <i class="fas fa-sign-in-alt"></i> Masuk
                                        </button>
                                    </div>

                                    <div class="text-center mt-3">
                                        <div class="text-muted">Jika belu punya akun silahkan register 
                                            <a href="{{ route('register') }}" class="text-muted">disini</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
    