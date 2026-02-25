@extends('layouts.main')

@section('content')

    <!-- tpm-header-area start -->
    <header class="tmp-header-area-start header-one" id="home">
        <!-- header mid area start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-header-one-wrapper">
                        <div class="header-mida-area">
                            <div class="logo-area-start">
                                <a class="logo" href="#home">
                                    <img src="{{ asset('assets/images/logo/logo-01.png') }}" alt="Biro_Jasa_Mahkota_logo">
                                </a>
                            </div>
                            <div class="mid-header-center">
                                <p><strong>Solusi Terpercaya Proses Cepat</strong></p>
                            </div>
                            <a href="#service" class="tmp-btn btn-primary">Layanan Kami</a>
                        </div>
                        <!-- tmp nav area -->
                        <div class="tmp-nav-area-one header--sticky">
                            <div class="logo-md-sm-device">
                                <a href="#home" class="logo">
                                    <img src="{{ asset('assets/images/logo/logo-01.svg') }}" alt="Biro_Jasa_Mahkota_logo">
                                </a>
                            </div>

                            <div class="header-nav main-nav-one">
                                @include('partials.menuList')
                            </div>
                            <div class="actions-area">
                                <div class="tmp-side-collups-area" id="side-collups">
                                    <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect y="14" width="20" height="2" fill="#1F1F25"></rect>
                                        <rect y="7" width="20" height="2" fill="#1F1F25"></rect>
                                        <rect width="20" height="2" fill="#1F1F25"></rect>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <!-- tmp nav area -->
                    </div>
                </div>
            </div>
        </div>
        <!-- header mid area end -->

    </header>
    <!-- tpm-header-area end -->

    @include('partials.sidebar')

    <!-- tmp banner area start -->
    <div class="tmp-banner-swiper-one-area">
        <div class="swiper mySwiper-banner-one">
            <div class="swiper-wrapper">
                <!-- single swiper area start -->
                <div class="swiper-slide">
                    <div class="tmp-banner-area bg_image-1 bg_image banner-one-height-control tmp-section-gap">
                        <div class="shape-image-banner-one">
                            <img src="{{ asset('assets/images/banner/shape/03.png') }}" alt="banner" class="three">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="banner-one-main-wrapper">
                                        <div class="inner">
                                            <span class="sub-title">Biro Jasa Mahkota</span>
                                            <h1 class="title">Solusi Terpercaya Proses Cepat</h1>
                                            <p class="disc">
                                                Kami melayani pengurusan STNK, BPKB, Balik Nama, dan Mutasi dengan proses yang cepat dan transparan untuk kenyamanan Anda.
                                            </p>

                                            <div class="button-area-banner-one">
                                                <a href="#service" class="tmp-btn btn-primary">Lihat Layanan</a>
                                                <a href="#about" class="tmp-btn btn-secondary-outline" style="margin-left: 15px; border: 2px solid #fff; color: #fff; padding: 12px 30px; border-radius: 5px; text-decoration: none; transition: 0.3s;">Tentang Kami</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single swiper area end -->
                 <div class="swiper-slide">
                    <div class="tmp-banner-area bg_image-2 bg_image banner-one-height-control tmp-section-gap">
                         <div class="shape-image-banner-one">
                              <img src="{{ asset('assets/images/banner/shape/03.png') }}" alt="banner" class="three">
                        </div>
                         <div class="container">
                             <div class="row">
                                 <div class="col-xl-6">
                                    <div class="banner-one-main-wrapper">
                                       <div class="inner">
                                            <span class="sub-title">Biro Jasa Mahkota</span>
                                            <h1 class="title">Partner Terbaik Urusan Dokumen Anda</h1>
                                            <p class="disc">
                                                Layanan profesional untuk perpanjangan dan pengurusan dokumen kendaraan bermotor tanpa ribet.
                                            </p>

                                             <div class="button-area-banner-one">
                                                <a href="#service" class="tmp-btn btn-primary">Lihat Layanan</a>
                                                <a href="#about" class="tmp-btn btn-secondary-outline" style="margin-left: 15px; border: 2px solid #fff; color: #fff; padding: 12px 30px; border-radius: 5px; text-decoration: none; transition: 0.3s;">Tentang Kami</a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

            </div>
            <div class="swiper-button-next" data-tmp-cursor="md transparent fw-bold" data-tmp-cursor-text="Next"></div>
            <div class="swiper-button-prev" data-tmp-cursor="md transparent fw-bold" data-tmp-cursor-text="Prev"></div>
        </div>
    </div>
    <!-- tmp banner area end -->

    <!-- Tpm About Area Start  -->
    <div class="about-area tmp-section-gap about-style-one" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-thumbnails">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/about/01.png') }}" alt="Biro_Jasa_Mahkota">

                            <div class="image-two">
                                <img src="{{ asset('assets/images/about/03.png') }}" alt="Biro_Jasa_Mahkota">
                            </div>

                            <div class="image-three animated">
                                <img class="" src="{{ asset('assets/images/about/02.png') }}" alt="Biro_Jasa_Mahkota">
                            </div>

                            <div class="square"></div>

                            <div class="flower">
                                <img src="{{ asset('assets/images/about/flower.png') }}" alt="Biro_Jasa_Mahkota">
                            </div>

                            <div class="product-share">
                                <div class="rating">
                                    <div class="number">4.8</div>
                                    <div class="stars-group">
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star-half-stroke"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-share">
                                    <a href="#" class="avatar" data-tooltip="Pelanggan Puas" tabindex="0"><img src="{{ asset('assets/images/about/4.png') }}" alt="Biro_Jasa_Mahkota"></a>
                                    <a href="#" class="avatar" data-tooltip="Pelanggan Puas" tabindex="0"><img src="{{ asset('assets/images/about/5.png') }}" alt="Biro_Jasa_Mahkota"></a>
                                     <a href="#" class="avatar" data-tooltip="Pelanggan Puas" tabindex="0"><img src="{{ asset('assets/images/about/6.png') }}" alt="Biro_Jasa_Mahkota"></a>
                                    <a href="#" class="avatar" data-tooltip="Pelanggan Puas" tabindex="0"><img src="{{ asset('assets/images/about/7.png') }}" alt="Biro_Jasa_Mahkota"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-6">
                    <div class="about-inner">
                        <div class="section-head text-align-left section-head-one-side">
                            <div class="section-sub-title">
                                <img src="{{ asset('assets/images/services/section-custom-menubar.png') }}" alt="Biro_Jasa_Mahkota">
                                <span class="subtitle">TENTANG KAMI</span>
                            </div>
                            <h2 class="title split-collab">Pilihan Tepat Untuk <br> Mengurus Dokumen Kendaraan</h2>
                        </div>


                        <p class="description" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                            Biro Jasa Mahkota hadir memberikan kemudahan bagi Anda dalam mengurus segala kebutuhan administrasi kendaraan bermotor. Dengan pengalaman bertahun-tahun, kami menjamin keamanan, kecepatan, dan kepuasan pelanggan dalam setiap layanan kami.
                        </p>

                        <!-- Keunggulan Kami -->
                         <div class="single-progress-area progress-stye-one" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                            <div class="progress-top">
                                <p class="name">Kepuasan Pelanggan</p>
                                <span class="parcent">
                                    95%
                                </span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                         <div class="single-progress-area progress-stye-one" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                            <div class="progress-top">
                                <p class="name">Kecepatan Proses</p>
                                <span class="parcent">
                                    90%
                                </span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>


                        <div class="thumbnail-with-title" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                            <div class="thumbnail">
                                <img src="{{ asset('assets/images/about/about-with-icon.png') }}" alt="">
                                <div class="icon">
                                    <i class="fa-regular fa-shield-check"></i>
                                </div>
                            </div>
                            <div class="title">Solusi terpercaya untuk kebutuhan
                                dokumen kendaraan Anda.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Tpm About Area End  -->

    <!-- Tmp services area  -->
    <div class="tmp-services-area services-style--1 background-image-services bg_image tmp-section-gap" id="service">
         <div class="container">
            <div class="row">
                <div class="col-lg-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="{{ asset('assets/images/services/section-custom-menubar.png') }}" alt="Biro_Jasa_Mahkota_Services">
                            <span>LAYANAN KAMI</span>
                        </div>
                        <h2 class="title split-collab">Layanan Terpercaya Kami</h2>

                    </div>
                </div>
            </div>
            <div class="row g-5">
                <!-- STNK -->
                <div class="col-lg-3 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="services-wrapper">
                        <div class="inner">
                            <div class="icon">
                                <i class="fa-light fa-file-invoice"></i>
                            </div>
                            <div class="content">
                                <h5 class="title">STNK</h5>
                                <p class="description">Perpanjangan STNK Tahunan & 5 Tahunan dengan proses cepat.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- BPKB -->
                <div class="col-lg-3 col-md-6 col-sm-12 col-12" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                    <div class="services-wrapper">
                        <div class="inner">
                            <div class="icon">
                                <i class="fa-light fa-book"></i>
                            </div>
                            <div class="content">
                                <h5 class="title">BPKB</h5>
                                <p class="description">Pengurusan BPKB baru, ganti pemilik, atau BPKB hilang.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Balik Nama -->
                <div class="col-lg-3 col-md-6 col-sm-12 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="services-wrapper">
                        <div class="inner">
                            <div class="icon">
                                <i class="fa-light fa-user-gear"></i>
                            </div>
                            <div class="content">
                                <h5 class="title">Balik Nama</h5>
                                <p class="description">Proses Balik Nama (BBN) kendaraan bermotor aman & resmi.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mutasi -->
                <div class="col-lg-3 col-md-6 col-sm-12 col-12" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                    <div class="services-wrapper">
                        <div class="inner">
                            <div class="icon">
                                <i class="fa-light fa-truck-ramp-box"></i>
                            </div>
                            <div class="content">
                                <h5 class="title">Mutasi</h5>
                                <p class="description">Layanan Mutasi kendaraan antar daerah di seluruh Indonesia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

         </div>
    </div>


    @include('partials.footer')

@endsection
