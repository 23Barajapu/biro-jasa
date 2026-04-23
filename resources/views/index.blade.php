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
                                                <a href="#about" class="tmp-btn btn-secondary-outline" style="margin-left: 15px; border: 2px solid #fff; color: #fff; padding: 12px 30px; border-radius: 10px; text-decoration: none; transition: 0.3s; font-family: 'Inter', sans-serif; font-weight: 600;">Tentang Kami</a>
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
                                                <a href="#about" class="tmp-btn btn-secondary-outline" style="margin-left: 15px; border: 2px solid #fff; color: #fff; padding: 12px 30px; border-radius: 10px; text-decoration: none; transition: 0.3s; font-family: 'Inter', sans-serif; font-weight: 600;">Tentang Kami</a>
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
            <div class="row align-items-center g-5">
                <!-- Left Column: Document Requirement Cards -->
                <div class="col-lg-6">
                    <div class="syarat-dokumen-wrapper">

                        {{-- Kartu 1: Balik Nama --}}
                        <div class="syarat-card" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <div class="syarat-card-header">
                                <div class="syarat-icon">
                                    <i class="fa-light fa-user-gear"></i>
                                </div>
                                <h5>Balik Nama</h5>
                                <span class="syarat-badge">Wajib</span>
                            </div>
                            <ul class="syarat-list">
                                <li><i class="fa-solid fa-circle-check"></i> Fotokopi KTP pemilik baru</li>
                                <li><i class="fa-solid fa-circle-check"></i> BPKB asli + fotokopi</li>
                                <li><i class="fa-solid fa-circle-check"></i> STNK asli + fotokopi</li>
                                <li><i class="fa-solid fa-circle-check"></i> Kuitansi jual beli bermaterai</li>
                                <li><i class="fa-solid fa-circle-check"></i> Hasil cek fisik kendaraan</li>
                            </ul>
                        </div>

                        {{-- Kartu 2: BBN Mandiri --}}
                        <div class="syarat-card" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                            <div class="syarat-card-header">
                                <div class="syarat-icon">
                                    <i class="fa-light fa-id-card"></i>
                                </div>
                                <h5>BBN Mandiri (Perorangan)</h5>
                                <span class="syarat-badge">Wajib</span>
                            </div>
                            <ul class="syarat-list">
                                <li><i class="fa-solid fa-circle-check"></i> Fotokopi KTP pemilik</li>
                                <li><i class="fa-solid fa-circle-check"></i> BPKB asli + fotokopi</li>
                                <li><i class="fa-solid fa-circle-check"></i> STNK asli + fotokopi</li>
                                <li><i class="fa-solid fa-circle-check"></i> Kuitansi jual beli bermaterai</li>
                                <li><i class="fa-solid fa-circle-check"></i> Formulir permohonan BBN</li>
                                <li><i class="fa-solid fa-circle-check"></i> Hasil cek fisik kendaraan</li>
                            </ul>
                        </div>

                        {{-- Kartu 3: PT / Badan Usaha --}}
                        <div class="syarat-card syarat-card--pt" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                            <div class="syarat-card-header">
                                <div class="syarat-icon">
                                    <i class="fa-light fa-building"></i>
                                </div>
                                <h5>PT / Badan Usaha</h5>
                                <span class="syarat-badge">Korporat</span>
                            </div>
                            <ul class="syarat-list">
                                <li><i class="fa-solid fa-circle-check"></i> Fotokopi KTP penanggung jawab</li>
                                <li><i class="fa-solid fa-circle-check"></i> BPKB asli + fotokopi</li>
                                <li><i class="fa-solid fa-circle-check"></i> STNK asli + fotokopi</li>
                                <li><i class="fa-solid fa-circle-check"></i> Kuitansi jual beli bermaterai</li>
                                <li><i class="fa-solid fa-circle-check"></i> Fotokopi NPWP perusahaan</li>
                                <li><i class="fa-solid fa-circle-check"></i> Fotokopi SIUP / NIB / Akta Perusahaan</li>
                                <li><i class="fa-solid fa-circle-check"></i> Hasil cek fisik kendaraan</li>
                            </ul>
                            <div class="syarat-tambahan">
                                <div class="syarat-tambahan-label">
                                    <i class="fa-solid fa-file-signature"></i>
                                    <span>Dokumen Tambahan:</span>
                                </div>
                                <p>Surat Kuasa bermaterai dari Direktur / Pimpinan Perusahaan (jika diwakilkan)</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right Column: About Info -->
                <div class="col-lg-6">
                    <div class="about-inner">
                        <div class="section-head text-align-left section-head-one-side">
                            <div class="section-sub-title">
                                <img src="{{ asset('assets/images/services/section-custom-menubar.png') }}" alt="Biro_Jasa_Mahkota">
                                <span class="subtitle">TENTANG KAMI</span>
                            </div>
                            <h2 class="title split-collab">Pilihan Tepat Untuk <br> Mengurus Dokumen Kendaraan</h2>
                        </div>

                        <!-- Statistics Badges -->
                        <div class="stats-badges-row" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <div class="stat-badge">
                                <span class="stat-number">500+</span>
                                <span class="stat-label">Pelanggan<br>Puas</span>
                            </div>
                            <div class="stat-badge">
                                <span class="stat-number">5+</span>
                                <span class="stat-label">Tahun<br>Pengalaman</span>
                            </div>
                            <div class="stat-badge">
                                <span class="stat-number">4</span>
                                <span class="stat-label">Jenis<br>Layanan</span>
                            </div>
                            <div class="stat-badge">
                                <span class="stat-number">95%</span>
                                <span class="stat-label">Tingkat<br>Kepuasan</span>
                            </div>
                        </div>

                        <p class="description" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                            Biro Jasa Mahkota hadir memberikan kemudahan bagi Anda dalam mengurus segala kebutuhan administrasi kendaraan bermotor. Dengan pengalaman bertahun-tahun, kami menjamin keamanan, kecepatan, dan kepuasan pelanggan dalam setiap layanan kami.
                        </p>

                        <!-- Keunggulan Kami -->
                        <div class="single-progress-area progress-stye-one" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                            <div class="progress-top">
                                <p class="name">Kepuasan Pelanggan</p>
                                <span class="parcent">95%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="single-progress-area progress-stye-one" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                            <div class="progress-top">
                                <p class="name">Kecepatan Proses</p>
                                <span class="parcent">90%</span>
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
                    <div class="section-head" style="text-align:center; margin-bottom: 50px;">
                        <div class="section-sub-title center-title" style="justify-content:center;">
                            <img src="{{ asset('assets/images/services/section-custom-menubar.png') }}" alt="Biro_Jasa_Mahkota_Services">
                            <span>LAYANAN KAMI</span>
                        </div>
                        <h2 class="title split-collab" style="color:#fff;">Layanan Terpercaya Kami</h2>
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
                                <p class="description">Perpanjangan STNK Tahunan &amp; 5 Tahunan dengan proses cepat.</p>
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
                                <p class="description">Proses Balik Nama (BBN) kendaraan bermotor aman &amp; resmi.</p>
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
    <!-- Tmp services area end -->

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/628123456789?text=Halo%20Biro%20Jasa%20Mahkota%2C%20saya%20ingin%20bertanya%20mengenai%20layanan%20Anda."
       class="floating-whatsapp"
       target="_blank"
       rel="noopener noreferrer"
       title="Hubungi kami via WhatsApp">
        <i class="fa-brands fa-whatsapp"></i>
        <span class="wa-text">Hubungi Kami</span>
    </a>

    <!-- Subtle Admin Login Button (bottom-left, for admin only) -->
    <a href="{{ route('login') }}"
       title="Admin"
       style="
           position: fixed;
           bottom: 32px;
           left: 32px;
           z-index: 9999;
           display: flex;
           align-items: center;
           gap: 7px;
           background: #2d2d3a;
           color: #aaa;
           text-decoration: none;
           padding: 10px 16px;
           border-radius: 50px;
           font-size: 12px;
           font-family: 'Inter', sans-serif;
           font-weight: 500;
           letter-spacing: 0.3px;
           opacity: 0.28;
           box-shadow: 0 4px 14px rgba(0,0,0,0.25);
           transition: opacity 0.3s ease, transform 0.3s ease;
       "
       onmouseover="this.style.opacity='0.85'; this.style.transform='translateY(-2px)'; this.style.color='#fff';"
       onmouseout="this.style.opacity='0.28'; this.style.transform='translateY(0)'; this.style.color='#aaa';">
        <i class="fa-solid fa-lock" style="font-size:12px;"></i>
        <span>Admin</span>
    </a>

    @include('partials.footer')

@endsection
