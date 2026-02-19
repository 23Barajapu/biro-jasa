<nav class="main-nav">
    <ul class="parent-nav">
        <li class="has-dropdown">
            <a class="nav-link " href="#">
                <span class="rolling-text">HOME</span>
            </a>
            <ul class="submenu mega-menu-wrapper">
                <li class="menu-single-list">
                    <a href="#" class="top-title">Multipages</a>
                    <ul>
                        <li><a href="{{ route('index') }}">Corporate Demo</a></li>
                        <!-- Add other demo routes here when available -->
                        <li><a href="#">Financial Demo</a></li>
                        <li><a href="#">Marketing Demo</a></li>
                        <li><a href="#">Agency Demo</a></li>
                        <li><a href="#">Startup Demo</a></li>
                        <li><a href="#">Construction Demo</a></li>
                        <li><a href="#">Construction 2 Demo</a></li>
                        <li><a href="#">Company Demo</a></li>
                    </ul>
                </li>
                <li class="menu-single-list">
                    <a href="#" class="top-title">OnePage</a>
                    <ul>
                        <li><a href="#">Onepage Corporate</a></li>
                        <li><a href="#">Onepage Financial</a></li>
                        <li><a href="#">Onepage Marketing</a></li>
                        <li><a href="#">Onepage Agency</a></li>
                        <li><a href="#">Onepage Startup</a></li>
                        <li><a href="#">Onepage Construction</a></li>
                        <li><a href="#">Onepage Construction 2</a></li>
                        <li><a href="#">Onepage Company</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a class="nav-link" href="{{ route('about') }}">
                <span class="rolling-text">ABOUT</span>
            </a>
        </li>
        <li class="has-dropdown">
            <a class="nav-link" href="#">
                <span class="rolling-text">SERVICES</span>
            </a>
            <ul class="submenu">
                <li><a href="{{ route('service') }}">Service</a></li>
                <li><a href="#">Service Details</a></li>
            </ul>
        </li>
        <li class="has-dropdown">
            <a class="nav-link" href="#">
                <span class="rolling-text">BLOG</span>
            </a>
            <ul class="submenu">
                <li><a href="#">Blog</a></li>
                <li><a href="#">Blog Col 1</a></li>
                <li><a href="#">Blog Col 2</a></li>
                <li><a href="#">Blog Details</a></li>
                <li><a href="#">Blog Details v2</a></li>
            </ul>
        </li>
        <li class="has-dropdown">
            <a class="nav-link" href="#">
                <span class="rolling-text">PAGES</span>
            </a>
            <ul class="submenu">
                <li><a href="#">Appoinment</a></li>
                <li><a href="#">Project</a></li>
                <li><a href="#">Project Mesonary</a></li>
                <li><a href="#">Project Mesonary v2</a></li>
                <li><a href="#">Project Slider</a></li>
                <li><a href="#">Project Details</a></li>
                <li><a href="#">Project Details v2</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="#">Team Two</a></li>
                <li><a href="#">Team Details</a></li>
                <li><a href="#">Pricing</a></li>
                <li><a href="#">Faq</a></li>
                <li><a href="#">Error</a></li>
            </ul>
        </li>
        <li>
            <a class="nav-link" href="{{ route('contact') }}">
                <span class="rolling-text">CONTACT</span>
            </a>
        </li>
    </ul>
</nav>
