 <!-- Spinner Start -->
 <div id="spinner"
     class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
     <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
 </div>
 <!-- Spinner End -->

 <!-- Navbar Start -->
 <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
     <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
         <h1 class="m-0">Pintar Tani</h1>
     </a>
     <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
         <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarCollapse">
         <div class="navbar-nav ms-auto p-4 p-lg-0">
             <a href="{{ route('HomePage') }}" class="nav-item nav-link">Beranda</a>
             <a href="{{ route('ProfilePage') }}" class="nav-item nav-link">Profil</a>
             <a href="{{ route('GalleryPage') }}" class="nav-item nav-link">Produk</a>
             <a href="#" class="nav-item nav-link">Artikel</a>
             <a href="{{ route('ContactPage') }}" class="nav-item nav-link">Kontak </a>
         </div>
         <!-- Notifications Dropdown Menu -->
         <div class="nav-item dropdown">
             <button type="button" class="btn btn-info" data-toggle="dropdown">
                 <i class="fa fa-shopping-cart" aria-hidden="true"></i> Keranjang <span
                     class="badge badge-pill badge-danger">{{ count((array) session('cart'))}}</span>
             </button>
             <div class="dropdown-menu bg-light m-0">
                 <div class="dropdown-item">
                     <div class="col-lg-6 col-sm-6 col-6">
                         <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span
                             class="badge badge-pill badge-danger">{{ count((array) session('cart'))}}</span>
                     </div>
                     @php $total1 = 0 @endphp
                     @foreach((array) session('cart') as $id => $details)
                     @php $total1 += $details['harga'] * $details['quantity'] @endphp
                     @endforeach

                     <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                         <p>Total: <span class="text-info">Rp. {{ $total1 }}</span></p>
                     </div>
                 </div>
                 @if(session('cart'))
                 @foreach(session('cart') as $id => $details)
                 <div class="row cart-detail">
                     <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                         <img src="{{'storage/'. $details['gambar'] }}" />
                     </div>
                     <div class="col-lg-6 col-sm-6 col-6 cart-detail-product">
                         <p>{{ $details['product'] }}</p>
                         <span class="price text-info"> ${{ $details['harga'] }}</span> <br>
                         <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                     </div>
                 </div>
                 @endforeach
                 @endif

                 <div class="row">
                     <!-- <div class="text-center checkout"> -->
                     <a href="{{ route('Cart') }}" class="btn btn-primary btn-block">Tampilkan semua</a>
                     <!-- </div> -->
                 </div>
             </div>
         </div>
         <a href="{{ route('logout') }}" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">Keluar<i
                 class="fa fa-arrow-right ms-3"></i></a>
     </div>
 </nav>
 <!-- Navbar End -->