@extends('layouts.front')

@section('title', 'Tentang kami')

@push('css')
<style>
   @media (max-width:575.89px) {
    .text-lg {
        font-size: 18px;
    }
   }
</style>
@endpush

@section('content')
    {{-- banner --}}
    <div class="banner bg-charity2">
        <div class="container">
            <h2 class="fa-2x text-white">Tentang Kami</h2>
        </div>
    </div>
    {{-- tentang kami --}}
    <div class="tentang-kami bg-white ">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12 text-justify ">
                    <p>Youthped adalah komunitas sekaligus platformbagi pemuda yang memiliki motivasi besar dansemangat tinggi untuk meninggalkan rasain secure, lalu mengubahnya menjadi rasa percayadiri terhadap kemampuan yang dimilikinya dengan menggunakan ide cemerlang dan tindakan positif.Sehingga output akhir dari organisasi ini adalah memberikan sebuah edukasi kepada masyarakat, terutama para pemuda. Dan hasil yang akan diperoleh adalah sebuah karya dan dapat menginspirasi orang lain.</p>

                    <h4 class="mt-4">Kritik dan Saran</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia dolorem vel facilis iste delectus sunt? Mollitia perferendis recusandae adipisci animi?</p>
                </div>
            </div>
        </div>
    </div>
@endsection
