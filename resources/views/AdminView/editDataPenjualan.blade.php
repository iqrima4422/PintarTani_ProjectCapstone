@extends('AdminView.layout')
@section('content')
    <div class="container mt-4">
        <div class="container" style="text-transform: capitalize">
            <div class="row">
                <div class="col-md-12 mt-3">
                    <h3>Form Edit Data Penjualan</h3>
                <form method="post" enctype="multipart/form-data" action="{{ route('updateDataPenjualan', [$dataPenjualan->id]) }}" id="myForm" >
                @csrf
                <div class="form-group">
                <label for="nama">User</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old( 'nama', $dataPenjualan->users->name) }}" disabled>
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="form-group">
                    <label for="product">Nama Barang</label>
                    <input type="text" name="product" class="form-control @error('product') is-invalid @enderror" value="{{ old( 'product', $dataPenjualan->products->product)}}" disabled >
                    @error('produk')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="harga">Harga Satuan</label>
                    <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" value="{{ old( 'harga', $dataPenjualan->products->harga)}}" disabled >
                    @error('harga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="qty">Jumlah Item</label>
                    <input type="text" name="qty" class="form-control @error('qty') is-invalid @enderror" value="{{ old( 'qty', $dataPenjualan->qty)}}" disabled >
                    @error('jumlahItem')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal Transaksi</label>
                    <input type="text" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old( 'tanggal', $dataPenjualan->created_at)}}" disabled >
                    @error('tanggal')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select id="status" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old( 'status', $dataPenjualan->status)}}" required>
                        <option value = "Pending">Pending</option>
                        <option value = "Process">Process</option>
                        <option value = "Done">Done</option>
                    </select>
                </div>
                <div class="form-group float-right">
                    <button class="btn btn-lg btn-primary" type="submit">Submit</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
