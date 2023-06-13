@php
use Illuminate\Support\Str;
@endphp

@extends('HomePage.layout')
@section('content')
<!-- Content Search Section Begin-->

<!-- Page Header Start -->
<div class="container-fluid page-header2 py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Artikel </h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Artikel</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Education Service Start -->
<div class="container-xxl py-5" id="informasi">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-5 mb-5">Layanan Edukasi</h1>
        </div>
        <div class="row g-4">
            @foreach ($articles as $art)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded d-flex h-100">
                    <div class="service-text rounded p-5">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <img class="img-fluid" src="img3/icon/icon-5.png" alt="Icon">
                        </div>
                        <h4 class="mb-3">{{$art ->judul}}</h4>
                        <p class="mb-4">{{Str::limit($art->deskripsi, 150)}}</p>
                        <a class="btn btn-sm" href="{{route('DetailArticle', $art->id)}}"><i
                                class="fa fa-plus text-primary me-2"></i>Lanjut Baca</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Education Service End -->

@endsection