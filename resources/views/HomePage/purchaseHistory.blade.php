@extends('HomePage.layout')
@section('content')

<div class="container-xxl py-5" id="informasi">
    <div class="container">
        <div class="table-responsive">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h1>Laporan Transaksi</h1>
                    </div>
                    <div class="col-sm-7"></div>
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
                        <td>{{$p->transaksi->id}}</td>
                        <td>{{$p->transaksi->products->product}}</td>
                        <td>{{$p->transaksi->products->harga}}</td>
                        <td>{{$p->transaksi->qty}}</td>
                        <td>{{$p->transaksi->Tanggal_beli}}</td>
                        <td>{{$p->total_bayar}}</td>
                        <td>{{$p->transaksi->region->alamat_cod}}</td>
                        <td>{{$p->transaksi->note}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="pagination justify-content-center">
                {{$payment->links()}}
            </div>
        </div>
    </div>
</div>


@endsection