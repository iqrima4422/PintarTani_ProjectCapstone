@extends('HomePage.layout')
@section('content')

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Laporan Transaksi Saya</h2>
                    </div>
                    <div class="col-sm-7">
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Kode Transaksi</th>
                        <th>Nama Barang</th>
                        <th>Harga Satuan</th>
                        <th>Quantity</th>
                        <th>Tanggal Beli</th>
                        <th>Total</th>
                        <th>Alamat COD</th>
                        <th>Note</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($payment as $p)
                    <tr>
                        <td> {{$p->transaksi->id}}</td>
                        @if($p->transaksi->products != null)
                        <td> {{$p->transaksi->products->product}}</td>
                        <td> {{$p->transaksi->products->harga}}</td>
                        @elseif($p->transaksi->diskon != null)
                        <td> {{$p->transaksi->diskon->product}}</td>
                        <td> {{$p->transaksi->diskon->harga}}</td>
                        @endif
                        <td> {{$p->transaksi->qty}}</td>
                        <td> {{$p->transaksi->Tanggal_beli}}</td>
                        <td> {{$p->total_bayar}}</td>
                        <td> {{$p->transaksi->region->alamat_cod}}</td>
                        <td> {{$p->transaksi->note}}</td>

                    </tr>
                    @endforeach
                    {{$payment->links()}}
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection