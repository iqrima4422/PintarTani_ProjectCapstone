@extends('HomePage.layout')
@section('content')
<!-- Content Search Section Begin-->

<!-- Page Header Start -->
<div class="container-fluid page-header2 py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Artikel </h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Artikel</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Education Service Start -->
<div class="container-xxl py-5" id="informasi">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-5 mb-5">Layanan Edukasi</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded d-flex h-100">
                    <div class="service-text rounded p-5">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <img class="img-fluid" src="img3/icon/icon-3.png" alt="Icon">
                        </div>
                        <h4 class="mb-3">Landscaping</h4>
                        <p class="mb-4">Seni merancang dan mengatur elemen-elemen dalam lingkungan luar, seperti taman,
                            halaman, atau area publik.</p>
                        <a class="btn btn-sm" href="{{ route('LoginPage') }}"><i
                                class="fa fa-plus text-primary me-2"></i>Lanjut Baca</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded d-flex h-100">
                    <div class="service-text rounded p-5">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <img class="img-fluid" src="img3/icon/icon-6.png" alt="Icon">
                        </div>
                        <h4 class="mb-3">Agroforestri</h4>
                        <p class="mb-4">Menggabungkan pohon atau tanaman kehutanan dengan tanaman pertanian untuk
                            meningkatkan produktivitas, meningkatkan kesuburan tanah, dan menyediakan layanan ekosistem.
                        </p>
                        <a class="btn btn-sm" href="{{ route('LoginPage') }}"><i
                                class="fa fa-plus text-primary me-2"></i>Lanjut Baca</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded d-flex h-100">
                    <div class="service-text rounded p-5">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <img class="img-fluid" src="img3/icon/icon-5.png" alt="Icon">
                        </div>
                        <h4 class="mb-3">Irrigation & Drainage</h4>
                        <p class="mb-4">Menggunakan teknik irigasi yang efisien seperti irigasi tetes atau irigasi
                            berbasis kebutuhan untuk mengurangi penggunaan air yang berlebihan.</p>
                        <a class="btn btn-sm" href="{{ route('LoginPage') }}"><i
                                class="fa fa-plus text-primary me-2"></i>Lanjut Baca</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Education Service End -->

@endsection