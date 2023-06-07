@extends('HomePage.layout')
@section('content')
<!-- Content Search Section Begin-->
<div class="row mb-2">
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


<!-- Main content -->
<div class="filter__item">
    <div class="row">
        <div class="col-lg-4 col-md-5">
            <div class="filter__sort">
                <form action="{{ route('Sorting') }}" method="get">
                    <span>Sortir berdasarkan</span>
                    <select name="sorting" class="form-control">
                        <!-- <option value="id">Id</option> -->
                        <option value="product">Nama Produk</option>
                        <option value="kategori">Kategori</option>
                    </select>
                    <button type="submit" class="site-btn">Sortir</button>
                </form>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="filter__found">
                <h6><span>{{$total}}</span> Produk ditemukan </h6>
            </div>
        </div>
    </div>
</div>
<div class="row">
    @foreach ($galeri as $g)
    <div class="col-lg-3 col-md-4 col-sm-6">
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

<div class="container">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <!-- @yield('content') -->
</div>
</div>
</section>
@endsection