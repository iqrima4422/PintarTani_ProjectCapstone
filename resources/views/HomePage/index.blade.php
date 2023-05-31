@extends('HomePage.layout')
@section('content')
<!-- Carousel Start -->
<div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img3/corousel-2.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <h1 class="display-1 text-white mb-5 animated slideInDown">Berkolaborasi Dengan
                                    Pemerintahan Desa
                                </h1>
                                <a href="{{ route('LoginPage') }}" class="btn btn-primary py-sm-3 px-sm-4">Telusuri
                                    Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img3/corousel-1.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <h1 class="display-1 text-white mb-5 animated slideInDown">Hasil Panen Yang Berkualitas
                                </h1>
                                <a href="{{ route('LoginPage') }}" class="btn btn-primary py-sm-3 px-sm-4">Telusuri
                                    Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img3/corousel-3.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <h1 class="display-1 text-white mb-5 animated slideInDown">Kerjasama Nyata Dengan
                                    Masyarakat Dan Pemuda Desa</h1>
                                <a href="{{ route('LoginPage') }}" class="btn btn-primary py-sm-3 px-sm-4">Telusuri
                                    Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


<!-- Top Feature Start -->
<div class="container-fluid top-feature py-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                    <div class="d-flex">
                        <div class="ps-3">
                            <h4>Green Economy</h4>
                            <span>Ekonomi berkelanjutan dan penurunan risiko kerusakan lingkungan</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                    <div class="d-flex">
                        <div class="ps-3">
                            <h4>Collaborative Governance</h4>
                            <span>Edukasi teknik pertanian yang ramah lingkungan dan berkelanjutan</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                    <div class="d-flex">
                        <div class="ps-3">
                            <h4>Scalable Business</h4>
                            <span>Model bisnis yang memungkinkan tumbuh berkembang secara eksponensial</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Feature End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-end">
            <div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                <video width="300" height="590" controls>
                    <source src="img3/about.mp4" type="video/mp4">
                </video>
            </div>
            <div class="col-lg-6 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                <h1 class="display-1 text-primary mb-0"> Desa <br> Tadukan Raga</h1>
                <h1 class="display-5 mb-4">Potensi Besar Di Desa Terpencil</h1>
                <p class="mb-4">Dengan Luas lahan pertanian <strong>760 Ha</strong> dan lahan persawahan seluas
                    <strong>240 Ha</strong>. Melalui potensi lahan yang tak bisa dianggap sebelah mata membuktikan
                    adanya potensi aspek sosial dan ekonomi yang berguna untuk meningkatkan kesejahteraan serta
                    mengatasi ketimpangan sosial masyarakat di Desa Tadukan Raga.
                </p>
                <a class="btn btn-primary py-3 px-4" href="{{ route('LoginPage') }}">Telusuri Lebih Lanjut</a>
            </div>
            <div class="col-lg-3 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row g-5">
                    <div class="col-12 col-sm-6 col-lg-12">
                        <div class="border-start ps-4">
                            <i class="fa fa-award fa-3x text-primary mb-3"></i>
                            <h4 class="mb-3">Kesuburan Tanah</h4>
                            <span>Potensi pertanian dan persawahan yang luar biasa</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-12">
                        <div class="border-start ps-4">
                            <i class="fa fa-users fa-3x text-primary mb-3"></i>
                            <h4 class="mb-3">Kolaborasi Epik</h4>
                            <span>Sebagai kotalisator kolaborasi pemerintahan, masyarakat desa, dan teknologi</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Facts Start -->
<div class="container-fluid facts my-5 py-5" data-parallax="scroll" data-image-src="img3/carousel-1.jpg">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-4 text-white" data-toggle="counter-up">5861</h1>
                <span class="fs-5 fw-semi-bold text-light">Penduduk</span>
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <h1 class="display-4 text-white" data-toggle="counter-up">600</h1>
                <span class="fs-5 fw-semi-bold text-light">Petani</span>
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <h1 class="display-4 text-white" data-toggle="counter-up">125</h1>
                <span class="fs-5 fw-semi-bold text-light">Pedagang</span>
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <h1 class="display-4 text-white" data-toggle="counter-up">2381</h1>
                <span class="fs-5 fw-semi-bold text-light">Pemuda</span>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->


<!-- Features Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="fs-5 fw-bold text-primary">Kenapa pilih kami !</p>
                <h1 class="display-5 mb-4">Beberapa Alasan Yang Menguatkan</h1>
                <p class="mb-4">Membeli produk pertanian dari desa mendukung perekonomian lokal, memberikan kehidupan
                    berkelanjutan bagi petani, serta menyediakan makanan segar dan berkualitas.</p>
                <a class="btn btn-primary py-3 px-4" href="{{ route('LoginPage') }}">Telusuri Lebih Lanjut</a>
            </div>
            <div class="col-lg-6">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6">
                        <div class="row g-4">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                <div class="text-center rounded py-5 px-4"
                                    style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                    <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                        style="width: 90px; height: 90px;">
                                        <i class="fa fa-check fa-3x text-primary"></i>
                                    </div>
                                    <h4 class="mb-0">100% Produk Desa</h4>
                                </div>
                            </div>
                            <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                <div class="text-center rounded py-5 px-4"
                                    style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                    <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                        style="width: 90px; height: 90px;">
                                        <i class="fa fa-users fa-3x text-primary"></i>
                                    </div>
                                    <h4 class="mb-0">Pemberdayaan Masyarakat</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                        <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 90px; height: 90px;">
                                <i class="fa fa-tools fa-3x text-primary"></i>
                            </div>
                            <h4 class="mb-0">Pengelolaan Panen Terstrutur</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->

<!-- Projects Start -->
<div class="container-xxl py-5" id="produkpertanian">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-bold text-primary">Hasil Panen Unggulan</p>
            <h1 class="display-7 mb-4">Beberapa Produk Pertanian Desa Taduka Raga</h1>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-12 text-center">
                <ul class="list-inline rounded mb-5" id="portfolio-flters">
                    <li class="mx-2 active" data-filter="*">All</li>
                    <li class="mx-2" data-filter=".first">Tanaman Umbi</li>
                    <li class="mx-2" data-filter=".second">Tanaman Biji</li>
                </ul>
            </div>
        </div>
        <div class="row g-4 portfolio-container">
            <div class="col-lg-3 col-md-4 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="img/product/ubi-jalar.jpg" alt="">
                    <div class="portfolio-text">
                        <h4 class="text-white mb-4">Ubi Kayu</h4>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2" href="img/product/ubi-jalar.jpg.jpg"
                                data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="img/product/Singkong.jpg" alt="">
                    <div class="portfolio-text">
                        <h4 class="text-white mb-4">Singkong</h4>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2" href="img/product/Singkong.jpg"
                                data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="img/product/padi.jpg" alt="">
                    <div class="portfolio-text">
                        <h4 class="text-white mb-4">Padi</h4>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2" href="img/product/padi.jpg"
                                data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="img/product/jagung.jpg" alt="">
                    <div class="portfolio-text">
                        <h4 class="text-white mb-4">Garden Maintenance</h4>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2" href="img/product/jagung.jpg"
                                data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="img3/service-5.jpg" alt="">
                    <div class="portfolio-text">
                        <h4 class="text-white mb-4">Green Technology</h4>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2" href="img3/service-5.jpg"
                                data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="img3/service-6.jpg" alt="">
                    <div class="portfolio-text">
                        <h4 class="text-white mb-4">Urban Gardening</h4>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2" href="img3/service-6.jpg"
                                data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Projects End -->

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