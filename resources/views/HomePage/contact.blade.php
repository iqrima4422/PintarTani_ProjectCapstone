@extends('HomePage.layout')
@section('content')

<!-- Breadcrumb Section Begin -->
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Kontak Kami</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="route('HomePage')">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kontak Kami</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="bi bi-telephone"></span>
                    <h4>Telepon</h4>
                    <p>+62 865 8998 0110</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="bi bi-geo-alt"></span>
                    <h4>Alamat</h4>
                    <p>Desa Tadukan Raga, Kec. STM Hilir, Kabupaten Deli Serdang</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="bi bi-clock"></span>
                    <h4>Jam Operasional</h4>
                    <p>8:00 - 18:00 WIB</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="bi bi-envelope-open"></span>
                    <h4>Email</h4>
                    <p>pintartani@gmail.com<< /p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

<!-- Map Begin -->
<div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
    <!-- <div class="position-relative rounded overflow-hidden h-100"> -->
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63720.30721648649!2d98.71892752115617!3d3.466271156035849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031394e3bdb1389%3A0x3f574ee55e74602c!2sTandukan%20Raga%2C%20Kec.%20Sinembah%20Tj.%20Muda%20Hilir%2C%20Kabupaten%20Deli%20Serdang%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1685510419131!5m2!1sid!2sid"
        width="1515" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade" tabindex="0"></iframe>
</div>

<!-- Map End -->

<!-- Contact Form End -->
@endsection