@extends('layouts.front')

@section('title', 'Konfirmasi Pembayaran')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h5 class="text-center">Konfirmasi Pembayaran</h5>
                <div class="detail text-center mt-3 mt-lg-4">
                    <p>ID Transaksi #9767586</p>
                </div>
                <form action="" method="POST" class="mt-3 mt-lg-4">
                    @csrf
                    <div class="form-group">
                        <label for="name">Atas Nama (Pengirim) <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nominal">Jumlah Nominal Transfer <span class="text-danger">*</span></label>
                        <input type="text" name="nominal" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="bank">Bank <span class="text-danger">*</span></label>
                        <select name="bank" id="bank_id" class="form-control">
                            <option disabled selected></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="path_image">Upload Bukti Pembayaran <span class="text-danger">*</span></label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="path_image" name="path_image">
                            <label class="custom-file-label" for="path_image">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="note">Keterangan</label>
                        <textarea name="note" id="note" rows="4" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">
                            <i class="fas fa-paper-plane"></i>
                            Kirim Pesan 
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
