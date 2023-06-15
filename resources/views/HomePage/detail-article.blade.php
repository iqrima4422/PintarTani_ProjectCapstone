@extends('HomePage.layout')
@section('content')

<!-- Detail Article Start -->
<div class="container py-5" id="detail-artikel" wow fadeIn" data-wow-delay="0.1s">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <img class="card-img-top" src="{{ asset('storage/'.$article->gambar) }}" alt="Gambar Artikel">
                <div class="card-body">
                    <h2 class="card-title text-center">{{$article->judul}}</h2>
                    <p class="card-text"><strong>Penulis:</strong> {{$article->penulis}}</p>
                    <p class="card-text"><strong>Tahun:</strong> {{$article->tahun}}</p>
                    <p class="card-text text-justify">{{$article->deskripsi}}</p>
                    <a href="{{ route('ArticlePage') }}" class="btn btn-primary">Kembali ke Daftar Artikel</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Detail Article End -->
@endsection