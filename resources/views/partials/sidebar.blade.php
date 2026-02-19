<!-- tpm-header-area end -->
 <div id="side-hide">
        <div class="top-area">
            <a href="{{ route('index') }}" class="logo-area">
                <img src="{{ asset('assets/images/logo/logo-03.png') }}" alt="logo">
            </a>
            <div class="close-icon-area">
                <div id="close-slide__main">
                    <i class="fa-solid fa-x"></i>
                </div>
            </div>
        </div>
        <div class="body">

            <div class="image-area-feature">
                <img src="{{ asset('assets/images/sidebar/01.jpg') }}" alt="sidebar">
            </div>
            <h5 class="title mt--30">Transforming your ideas into digital reality</h5>
            <p class="disc">
                Sed ut perspiciatis unde omnis natus error voluptatem santium doloremque laudantium, totam rem aperiam, eaque.
            </p>
            <div class="short-contact-area-side-collups">
                <!-- single contact information -->
                <div class="single-contact-information-side">
                    <i class="fa-solid fa-phone"></i>
                    <div class="information">
                        <span>Call Now</span>
                        <a href="#" class="number">+92 (8800) - 98670</a>
                    </div>
                </div>
                <!-- single contact information end -->
                <!-- single contact information -->
                <div class="single-contact-information-side">
                    <i class="fa-light fa-envelope"></i>
                    <div class="information">
                        <span>Mail Us</span>
                        <a href="#" class="number">example@info.com</a>
                    </div>
                </div>
                <!-- single contact information end -->
                <!-- single contact information -->
                <div class="single-contact-information-side">
                    <i class="fa-sharp fa-light fa-location-dot"></i>
                    <div class="information">
                        <span>Our Address</span>
                        <a href="#" class="number">66 Broklyant, New York 3269</a>
                    </div>
                </div>
                <!-- single contact information end -->
            </div>
            <!-- social area start -->
            <ul class="social-icons solid-social-icons rounded-social-icons">
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
            <!-- social area end -->
        </div>
        <!-- mobile menu area start -->
        <div class="mobile-menu-main">
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu metismenu" id="mobile-menu-active">
                    <li class="has-droupdown">
                        <a href="#" class="main">Home</a>
                        <ul class="submenu mm-collapse">
                            <li class="has-droupdown third-lvl">
                                <a class="main" href="#">Multipages</a>
                                <ul class="submenu-third-lvl mm-collapse">
                                    <li><a href="{{ route('index') }}">Corporate Demo</a></li>
                                    <!-- Add other links here -->
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="main">About Us</a>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Services</a>
                        <ul class="submenu mm-collapse">
                            <li><a class="mobile-menu-link" href="{{ route('service') }}">Service</a></li>
                            <li><a class="mobile-menu-link" href="#">Service Details</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Blog</a>
                        <ul class="submenu mm-collapse">
                            <li><a class="mobile-menu-link" href="#">Blog</a></li>
                            <!-- Add other links here -->
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Pages</a>
                        <ul class="submenu mm-collapse">
                           <!-- Add page links here -->
                            <li><a class="mobile-menu-link" href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="main">Contact Us</a>
                    </li>
                </ul>
            </nav>

        </div>
        <!-- mobile menu area end -->
 </div>
<!-- tpm-header-area end -->
