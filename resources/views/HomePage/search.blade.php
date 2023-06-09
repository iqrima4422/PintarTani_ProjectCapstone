@extends('HomePage.layout')
@section('content')



<div class="row mb-2">
    <div class="col-md-0 mb-2">
        <button class="btn btn-primary" onclick="history.back()"><i class="bi bi-arrow-left"></i> </button>
    </div>
    <div class="col-md-4 mb-2">
        <form action="{{ route('SearchProduct') }}" method="GET">
            <div class="input-group">
                <input type="search" name="cari" class="form-control rounded" id="searchproduct"
                    placeholder="Cari Barang Disini" aria-label="Search" aria-describedby="search-addon"
                    value="{{old('cari')}}" />
                <button type="submit" class="btn btn-outline-primary ml-2">Cari</button>
            </div>
        </form>
    </div>
</div>



<div class="col-lg-12 col-md-13">
    <div class="row">
        @foreach ($barang as $g)
        <div class="col-lg-3 col-md-5 col-sm-5 mix dapur mandi instan">
            <div class="featured__item">
                <img class="img-fluid" src="{{'storage/'.$g->gambar}}">
                <div class="featured__item__text">
                    <div class="product__discount__item__text">
                        <span>{{$g ->kategori}}</span>
                        <h6><a href="#">{{$g ->product}}</a></h6>
                        <span>{{$g ->merk}}</span>
                        <h5>{{$g ->harga}}</h5>
                    </div>
                    <p class="btn-holder"><a href=" {{ route('AddCart', $g->id) }}"
                            class="btn btn-warning btn-block text-center" role="button">Masukkan Keranjang</a> </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection