@extends('HomePage.layout')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <form action="#" method="GET">
                    <div class="input-group">
                        <input type="search" name="cari" class="form-control rounded" id="searchproduct"
                            placeholder="Cari Barang Disini" aria-label="Search" aria-describedby="search-addon"
                            value="{{old('cari')}}" />
                        <button type="submit" class="btn btn-outline-primary ml-2">Cari</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Produk</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

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
    <div class="col-lg-3 col-md-5 col-sm-5 mix dapur mandi instan">
        <div class="featured__item">
            <div class="featured__item__pic set-bg" data-setbg="{{'storage/'.$g->gambar}}"></div>
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


<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Product Unggulan</h2>
                </div>
                <div class="featured__controls">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".dapur">Bahan Dapur</li>
                        <li data-filter=".mandi">Perlengkapan Mandi</li>
                        <li data-filter=".instan">Makanan instan</li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            <div class="col-lg-3 col-md-4 col-sm-6 mix dapur">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/featured/minyak.png">

                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Minyak Goreng 2L</a></h6>
                        <h5>Rp. 28.000</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix instan ">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/featured/mie.png">

                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Mie Goreng</a></h6>
                        <h5>Rp. 2500</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix mandi">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/featured/clear.png">
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Shampoo</a></h6>
                        <h5>Rp. 25.000 </h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix dapur">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/featured/tepung.png">
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Tempung Terigu</a></h6>
                        <h5>Rp. 10.000</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix instan">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/featured/miekuah.png">
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Mie Kuah</a></h6>
                        <h5>Rp. 3000</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix dapur ">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/featured/telur.png">
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Telur 1 Kg</a></h6>
                        <h5>Rp. 24.000</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix mandi ">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/featured/peps.png">
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Pasta Gigi</a></h6>
                        <h5>Rp. 13.000</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix mandi ">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/featured/sabun.png">
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Sabun Batang</a></h6>
                        <h5>Rp. 3000</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Featured Section End -->

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