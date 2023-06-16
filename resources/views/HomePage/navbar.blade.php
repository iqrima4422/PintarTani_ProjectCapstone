<!-- Spinner Start -->
<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
</div>
<!-- Spinner End -->

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="{{ route('HomePage') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h1 class="m-0">Pintar Tani</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('HomePage') }}" class="nav-item nav-link">Beranda</a>
            <a href="{{ route('GalleryPage') }}" class="nav-item nav-link">Produk</a>
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Keranjang
                </a>
                <div class="dropdown-menu  bg-light m-0">
                    <div class="dropdown-item">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-6">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span class="badge badge-pill badge-danger bg-dark">
                                    {{ count((array) session('cart')) }} Produk
                                </span>
                            </div>

                        </div>
                        <div class="col-lg-4 col-sm-4 col-4 text-right">
                            @php $total1 = 0 @endphp
                            @foreach((array) session('cart') as $id => $details)
                            @php $total1 += $details['harga'] * $details['quantity'] @endphp
                            @endforeach
                            <p>Total: <span class="">Rp. {{ $total1 }}</span></p>
                        </div>
                    </div>
                    @if(session('cart'))
                    @foreach(session('cart') as $id => $details)
                    <div class="dropdown-item">
                        <div class="row">
                            <div class="col-lg-4 col-sm-4 col-4">
                                <img src="{{ 'storage/'. $details['gambar'] }}" width="50" height="50" />
                            </div>
                            <div class="col-lg-7 col-sm-7 col-7">
                                <p>{{ $details['product'] }}</p>
                                <span class="price">Rp. {{ $details['harga'] }}</span><br>
                                <span class="count">Quantity:{{ $details['quantity'] }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    <div class="dropdown-item bg-primary btn-block">
                        <a href="{{ route('Cart') }}" class="btn-link btn-primary">Tampilkan semua</a>
                    </div>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pembelian</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{ route('PurchasePage') }}" class="dropdown-item">Riwayat Pembelian</a>
                </div>
            </div>
            <a href="{{ route('ArticlePage') }}" class="nav-item nav-link">Artikel</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Akun</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{ route('ProfilePage') }}" class="dropdown-item">Profile</a>
                    <a href="{{ route('logout') }}" class="dropdown-item">Logout</a>
                </div>
            </div>
            <a href="{{ route('ContactPage') }}" class="nav-item nav-link">Kontak</a>
        </div>
        <!-- Notifications Dropdown Menu. -->
    </div>
</nav>
<!-- Navbar End -->