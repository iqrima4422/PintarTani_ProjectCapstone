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
             <a href="#" class="nav-item nav-link active">Beranda</a>
             <a href="#team" class="nav-item nav-link">Profil</a>
             <a href="#produkpertanian" class="nav-item nav-link">Produk</a>
             <a href="#informasi" class="nav-item nav-link">Edukasi</a>
             <a href="#kontak" class="nav-item nav-link">Kontak </a>
         </div>
         <a href="{{ route('LoginPage') }}" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">Masuk<i
                 class="fa fa-arrow-right ms-3"></i></a>
     </div>
 </nav>
 <!-- Navbar End -->