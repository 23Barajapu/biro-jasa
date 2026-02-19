@extends('layouts.main')

@section('content')

    <!-- tpm-header-area start -->
    <header class="tmp-header-area-start header-one">
        <!-- header-top start -->
        <!-- <div class="header-top-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top-inner">
                            <div class="left-information-area">
                                <p class="left-top">Using user feedback to creat a million dollar</p>
                                <div class="location-area">
                                    <i class="fa-light fa-location-dot"></i>
                                    <a href="#">California, TX 70240</a>
                                </div>
                                <div class="working-time">
                                    <i class="fa-light fa-clock"></i>
                                    <p>Working Hours: 9:00 AM – 8:00 PM</p>
                                </div>
                            </div>
                            <div class="right-header-top">
                                <div class="social-area-transparent">
                                    <span>Follow on</span>
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- header-top end -->
        <!-- header mid area start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-header-one-wrapper">
                        <div class="header-mida-area">
                            <div class="logo-area-start">
                                <a class="logo" href="{{ route('index') }}">
                                    <img src="{{ asset('assets/images/logo/logo-01.png') }}" alt="Corporate_business_logo">
                                </a>
                            </div>
                            <div class="mid-header-center">
                                <p>Need Help? <a href="#"> Request A Callback</a></p>
                                <div class="input-area">
                                    <input type="text" placeholder="Search...">
                                    <i class="fa-light fa-magnifying-glass"></i>
                                </div>
                            </div>
                            <a href="{{ route('contact') }}" class="tmp-btn btn-primary">Get Consulting</a>
                        </div>
                        <!-- tmp nav area -->
                        <div class="tmp-nav-area-one header--sticky">
                            <div class="logo-md-sm-device">
                                <a href="#" class="logo">
                                    <img src="{{ asset('assets/images/logo/logo-01.svg') }}" alt="corporate_business-logo">
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
                                <div class="language-picker">
                                    <div class="js">
                                        <div class="language-picker js-language-picker" data-trigger-class="btn btn--subtle">
                                            <form action="" class="language-picker__form">
                                                <label for="language-picker-select">Select your language</label>
                                                <select name="language-picker-select" id="language-picker-select">
                                                    <option lang="de" value="deutsch">Deutsch</option>
                                                    <option lang="en" value="english" selected>English</option>
                                                    <option lang="fr" value="francais">Français</option>
                                                    <option lang="it" value="italiano">Italiano</option>
                                                </select>
                                            </form>
                                        </div>
                                    </div>
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
                            <img src="{{ asset('assets/images/banner/shape/01.png') }}" alt="banner" class="one">
                            <img src="{{ asset('assets/images/banner/shape/02.png') }}" alt="banner" class="two">
                            <img src="{{ asset('assets/images/banner/shape/03.png') }}" alt="banner" class="three">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="banner-one-main-wrapper">
                                        <div class="inner">
                                            <span class="sub-title">Business Consulting Agency</span>
                                            <h1 class="title">Business consulting
                                                solution</h1>
                                            <p class="disc">
                                                We help small startups grow from idea to millions of users. we can also <br>
                                            automate your marketing and customer service.
                                            </p>
                                            <div class="button-area-banner-one">
                                                <a href="{{ route('service') }}" class="tmp-btn btn-primary">Get Started Now</a>
                                                <!-- video icon -->
                                                <div class="vedio-icone" data-tmp-cursor="lg" data-tmp-cursor-text="Play Video">
                                                    <a class="video-play-button play-video" href="#">
                                                        <span></span>
                                                        <p class="text">
                                                            Play Vedio
                                                        </p>
                                                    </a>
                                                    <div class="video-overlay">
                                                        <a class="video-overlay-close">×</a>
                                                    </div>
                                                </div>
                                                <!-- video icon -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single swiper area end -->
                <!-- Additional slides omitted for brevity, logic follows same pattern -->
                 <div class="swiper-slide">
                    <div class="tmp-banner-area bg_image-2 bg_image banner-one-height-control tmp-section-gap">
                         <div class="shape-image-banner-one">
                            <img src="{{ asset('assets/images/banner/shape/01.png') }}" alt="banner" class="one">
                            <img src="{{ asset('assets/images/banner/shape/02.png') }}" alt="banner" class="two">
                             <img src="{{ asset('assets/images/banner/shape/03.png') }}" alt="banner" class="three">
                        </div>
                         <div class="container">
                             <div class="row">
                                 <div class="col-xl-6">
                                    <div class="banner-one-main-wrapper">
                                       <div class="inner">
                                            <span class="sub-title">Business Consulting Agency</span>
                                            <h1 class="title">Corporate Solutions Business</h1>
                                            <p class="disc">
                                                 We help small startups grow from idea to millions of users. we can also <br>
                                            automate your marketing and customer service.
                                             </p>
                                             <div class="button-area-banner-one">
                                                <a href="{{ route('service') }}" class="tmp-btn btn-primary">Get Started Now</a>
                                                <!-- video icon -->
                                                <div class="vedio-icone" data-tmp-cursor="lg" data-tmp-cursor-text="Play Video">
                                                   <a class="video-play-button play-video" href="#">
                                                        <span></span>
                                                         <p class="text">
                                                            Play Vedio
                                                        </p>
                                                    </a>
                                                     <div class="video-overlay">
                                                        <a class="video-overlay-close">×</a>
                                                    </div>
                                                </div>
                                                 <!-- video icon -->
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
    <div class="about-area tmp-section-gap about-style-one">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-thumbnails">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/about/01.png') }}" alt="corporate_business">

                            <div class="image-two">
                                <img src="{{ asset('assets/images/about/03.png') }}" alt="corporate_business">
                            </div>

                            <div class="image-three animated">
                                <img class="" src="{{ asset('assets/images/about/02.png') }}" alt="corporate_business">
                            </div>

                            <div class="square"></div>

                            <div class="flower">
                                <img src="{{ asset('assets/images/about/flower.png') }}" alt="Corporate_Business">
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
                                    <a href="#" class="avatar" data-tooltip="Mark JOrdan" tabindex="0"><img src="{{ asset('assets/images/about/4.png') }}" alt="Business_Corporate"></a>
                                    <a href="#" class="avatar" data-tooltip="Mark JOrdan" tabindex="0"><img src="{{ asset('assets/images/about/5.png') }}" alt="Business_Corporate"></a>
                                     <a href="#" class="avatar" data-tooltip="Mark JOrdan" tabindex="0"><img src="{{ asset('assets/images/about/6.png') }}" alt="Business_Corporate"></a>
                                    <a href="#" class="avatar" data-tooltip="Mark JOrdan" tabindex="0"><img src="{{ asset('assets/images/about/7.png') }}" alt="Business_Corporate"></a>
                                </div>
                            </div>
                        </div>

                        <!-- video icon -->
                        <div class="vedio-icone" data-tmp-cursor="lg" data-tmp-cursor-text="Play Video">
                            <a class="video-play-button play-video" href="#">
                                <span></span>
                            </a>
                            <div class="video-overlay">
                                <a class="video-overlay-close">×</a>
                            </div>
                        </div>
                        <!-- video icon -->

                    </div>
                </div>
                <!-- Content continues similarly, replacing asset() calls wrapped in curly braces -->
                 <div class="col-lg-6">
                    <div class="about-inner">
                        <div class="section-head text-align-left section-head-one-side">
                            <div class="section-sub-title">
                                <img src="{{ asset('assets/images/services/section-custom-menubar.png') }}" alt="Corporate_service">
                                <span class="subtitle">ABOUT US</span>
                            </div>
                            <h2 class="title split-collab">Find out more about our <br> business consulting</h2>
                        </div>

                        <p class="description" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget ornare quam. Sed sit amet sem sollicitudin, condimentum diam sed, consequat tellus. Quisque ac odio eget ligula gravida efficitur. Nunc facilisis sagittis magna, non venenatis mauris luctus quis.
                        </p>
                        <!-- Prograss bar Start  -->
                         <div class="single-progress-area progress-stye-one" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                            <div class="progress-top">
                                <p class="name">Consulting Service</p>
                                <span class="parcent">
                                    85%
                                </span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                         <div class="single-progress-area progress-stye-one" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                            <div class="progress-top">
                                <p class="name">Finance Consulting</p>
                                <span class="parcent">
                                    66%
                                </span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 66%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>


                        <div class="thumbnail-with-title" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                            <div class="thumbnail">
                                <img src="{{ asset('assets/images/about/about-with-icon.png') }}" alt="">
                                <div class="icon">
                                    <i class="fa-regular fa-dollar-sign"></i>
                                </div>
                            </div>
                            <div class="title">Helping you run a more efficient
                                & profitable business.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Tpm About Area End  -->

    <!-- Services section omitted for brevity but logic is same: replace path() with route() and asset() with asset() -->
    <!-- Tmp services area  -->
    <div class="tmp-services-area services-style--1 background-image-services bg_image tmp-section-gap">
         <div class="container">
            <div class="row">
                <div class="col-lg-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="{{ asset('assets/images/services/section-custom-menubar.png') }}" alt="Business_Consulting_services">
                            <span>OUR SERVICES</span>
                        </div>
                        <h2 class="title split-collab">Our Provided Services</h2>
                    </div>
                </div>
            </div>
             <!-- ... service items ... -->
         </div>
    </div>


    @include('partials.footer')

@endsection
