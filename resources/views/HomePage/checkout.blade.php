@extends('HomePage.layout')
@section('content')

<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <div class="row">
        </div>
        <div class="checkout__form">
            <h4>Detail Tagihan Pembayaran</h4>
            <form action="{{ route('PostCheckout') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p> Nama Pembeli<span>*</span></p>
                                    <input type="text" name="nama" placeholder="Nama Pembeli"
                                        value="{{auth()->user()->name}}">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-12">
                                <div class="checkout__input">
                                    <p>Alamat Pembeli<span>*</span></p>
                                    <input type="text" name="alamat" placeholder="Alamat" value="{{auth()->user()->alamat}}">
                                </div>
                            </div>
                        </div> -->

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="region" class="mb-0">Alamat Pengiriman Barang
                                        (COD)<span>*</span></label>
                                    <p class="mb-3 text-danger" style="font-size: 14px; font-style:italic;">Pilih alamat
                                        terdekat dari lokasi anda dan Pastikan Anda berada di wilayah Probolinggo karena
                                        kami hanya melayani pengiriman melalui COD di wilayah Probolinggo</p>
                                    <select name="region" class="">
                                        @foreach ($regions as $region)
                                        <option value="{{ $region->id }}">{{ $region->alamat_cod }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Telepon<span>*</span></p>
                                    <input type="text" name="telepon" placeholder="Telepon"
                                        value="{{auth()->user()->notelp}}">
                                    <p class="mb-3 text-danger" style="font-size: 14px; font-style:italic;">Pastikan
                                        nomer yang anda masukkan terdaftar aktif sebagai nomor WA</p>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="text" name="email" placeholder="Email"
                                        value="{{auth()->user()->email}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="checkout__input">
                                    <p>Order notes<span></span></p>
                                    <input type="text" name="notes" placeholder="Order Notes">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="checkout__order">

                            <h4>Pesanan Anda</h4>
                            <div class="checkout__order__products">Barang x Qty<span>Harga Total</span></div>
                            @if($cart != null)
                            <ul>
                                @foreach ($produk as $produk)
                                <li>{{$produk->product}} x {{$cart[$produk->id]['quantity']}}
                                    <span>{{$produk->harga * $cart[$produk->id]['quantity']}}</span>
                                </li>
                                @endforeach
                            </ul>
                            @endif

                            <div class="checkout__order__total">Total <span name="total">{{$total}}</span></div>
                            <div class="checkout__input__checkbox">

                            </div>
                            <p style="color: black;">Setiap pemesanan barang yang dibeli hanya melayani <b>pembayaran
                                    tunai</b> saat COD</p>

                            <button type="submit" class="site-btn">Pesan Sekarang</button>
                            <p class="mt-3" style="color: black;font-size:14px;">Konfimasi Pengiriman Barang akan
                                dilakukan 1 x 24 jam setelah anda berhasil melakukan pemesanan. Kami akan mengirimkan
                                pesan melalui WA.</p>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->

@endsection