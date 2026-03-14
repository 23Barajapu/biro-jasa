<div class="main-nav">
    <!-- Sidebar Logo -->
    <div class="logo-box">
        <a href="{{ url('/admin/index') }}" class="logo-dark">
            <img src="{{ asset('assets/images/logo/logo-01.png') }}" class="logo-sm" alt="logo sm" style="height: 30px;">
            <img src="{{ asset('assets/images/logo/logo-01.png') }}" class="logo-lg" alt="logo dark" style="height: 40px;">
        </a>

        <a href="{{ url('/admin/index') }}" class="logo-light">
            <img src="{{ asset('assets/images/logo/logo-01.png') }}" class="logo-sm" alt="logo sm" style="height: 30px;">
            <img src="{{ asset('assets/images/logo/logo-01.png') }}" class="logo-lg" alt="logo light" style="height: 40px;">
        </a>
    </div>

    <!-- Menu Toggle Button (sm-hover) -->
    <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
        <i class="ri-menu-2-line fs-24 button-sm-hover-icon"></i>
    </button>

    <div class="scrollbar" data-simplebar>

        <ul class="navbar-nav" id="navbar-nav">

            <li class="menu-title">Utama</li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/index') }}">
                    <span class="nav-icon">
                        <i class="ri-dashboard-2-line"></i>
                    </span>
                    <span class="nav-text"> Home </span>
                </a>
            </li>

            <li class="menu-title">Layanan Biro Jasa</li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/stnk') }}">
                    <span class="nav-icon">
                        <i class="ri-file-list-3-line"></i>
                    </span>
                    <span class="nav-text"> STNK </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/bpkb') }}">
                    <span class="nav-icon">
                        <i class="ri-book-open-line"></i>
                    </span>
                    <span class="nav-text"> BPKB </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/balik-nama') }}">
                    <span class="nav-icon">
                        <i class="ri-user-settings-line"></i>
                    </span>
                    <span class="nav-text"> Balik Nama </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('regions.index') }}">
                    <span class="nav-icon">
                        <i class="ri-map-pin-2-line"></i>
                    </span>
                    <span class="nav-text"> Manajemen Wilayah </span>
                </a>
            </li>

            <li class="menu-title">Operasional</li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('transactions.index') }}">
                    <span class="nav-icon">
                        <i class="ri-shopping-cart-2-line"></i>
                    </span>
                    <span class="nav-text">Pesanan</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/transactions') }}">
                    <span class="nav-icon">
                        <i class="ri-money-dollar-box-line"></i>
                    </span>
                    <span class="nav-text">Transaksi</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/customers-list') }}">
                    <span class="nav-icon">
                        <i class="ri-team-line"></i>
                    </span>
                    <span class="nav-text">Data Pelanggan</span>
                </a>
            </li>

            <li class="nav-item mt-4">
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a class="nav-link text-danger" href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span class="nav-icon">
                        <i class="ri-logout-box-line"></i>
                    </span>
                    <span class="nav-text"> Keluar </span>
                </a>
            </li>

        </ul>
    </div>
</div>
