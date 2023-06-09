@extends('PageFirst.layout')
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
                            <h4>Ekonomi Ramah Lingkungan</h4>
                            <span>Ekonomi berkelanjutan dan penurunan risiko kerusakan lingkungan</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                    <div class="d-flex">
                        <div class="ps-3">
                            <h4>Tata Kelola Kolaboratif</h4>
                            <span>Edukasi teknik pertanian yang ramah lingkungan dan berkelanjutan</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                    <div class="d-flex">
                        <div class="ps-3">
                            <h4>Potensi Bisnis Tinggi</h4>
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
<div class="container-xxl py-5" id="tentang">
    <div class="container">
        <div class="row g-5 align-items-end">
            <div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                <video width="300" height="590" controls>
                    <source src="img3/about.mp4" type="video/mp4">
                </video>
            </div>
            <div class="col-lg-6 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                <h1 class="display-1 text-primary mb-0">Desa <br> Tadukan Raga</h1>
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
<div class="container-xxl py-5" id="produk">
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

<!-- Team Start -->
<div class="container-xxl py-5" id="team">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-bold text-primary">Tim Kami</p>
            <h1 class="display-5 mb-5">Anggota Tim yang Berdedikasi & Berpengalaman</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded">
                    <img class="img-fluid" src="img3/team-1.jpg" alt="">
                    <div class="team-text">
                        <h4 class="mb-0">Iqri Mannisa' Buchori</h4>
                        <p class="text-primary">Frontend Developer</p>
                        <div class="team-social d-flex">
                            <a class="btn btn-square rounded-circle me-2"
                                href="https://www.linkedin.com/in/iqri-mannisa-buchori-451b531bb/"><i
                                    class="fab fa-linkedin"></i></a>
                            <a class="btn btn-square rounded-circle me-2" href="https://instagram.com/iqrimabcr_/"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item rounded">
                    <img class="img-fluid" src="img3/team-2.jpg" alt="">
                    <div class="team-text">
                        <h4 class="mb-0">Yoga Rahmahadi</h4>
                        <p class="text-primary">Backend Developer</p>
                        <div class="team-social d-flex">
                            <a class="btn btn-square rounded-circle me-2"
                                href="https://www.linkedin.com/in/yoga-rahmahadi/"><i class="fab fa-linkedin"></i></a>
                            <a class="btn btn-square rounded-circle me-2" href="https://www.instagram.com/yoga.r_/"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item rounded">
                    <img class="img-fluid" src="img3/team-3.jpg" alt="">
                    <div class="team-text">
                        <h4 class="mb-0">Achmad Syarif Arifiansyah</h4>
                        <p class="text-primary">Backend Developer</p>
                        <div class="team-social d-flex">
                            <a class="btn btn-square rounded-circle me-2"
                                href="https://www.linkedin.com/in/achmad-syarif-arifiansyah-b45361166/"><i
                                    class="fab fa-linkedin"></i></a>
                            <a class="btn btn-square rounded-circle me-2"
                                href="https://instagram.com/syarifian02?igshid=MzNlNGNkZWQ4Mg=="><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item rounded">
                    <img class="img-fluid" src="img3/team-4.jpg" alt="">
                    <div class="team-text">
                        <h4 class="mb-0">Muhammad Rizqy Akbar</h4>
                        <p class="text-primary">Frontend Developer</p>
                        <div class="team-social d-flex">
                            <a class="btn btn-square rounded-circle me-2"
                                href="https://www.linkedin.com/in/muhammad-rizqy-akbar-1580b8234/"><i
                                    class="fab fa-linkedin"></i></a>
                            <a class="btn btn-square rounded-circle me-2"
                                href="https://instagram.com/rizzqy.akbar?igshid=ZGUzMzM3NWJiOQ=="><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

@endsection
