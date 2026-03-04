@extends('admin.layouts.vertical')

@section('title', 'Dashboard Statistik')

@section('extra_css')
<style>
    .gradient-card-1 { background: linear-gradient(135deg, #0046af, #007bff); }
    .gradient-card-2 { background: linear-gradient(135deg, #10b981, #34d399); }
    .gradient-card-3 { background: linear-gradient(135deg, #f59e0b, #fbbf24); }
    .gradient-card-4 { background: linear-gradient(135deg, #6366f1, #818cf8); }
    
    .dashboard-card {
        border: none;
        border-radius: 20px;
        transition: all 0.3s ease;
        overflow: hidden;
    }
    .dashboard-card:hover { transform: translateY(-7px); box-shadow: 0 15px 30px rgba(0,0,0,0.1); }
    
    .stat-label { color: rgba(255,255,255,0.8); font-weight: 600; font-size: 0.9rem; }
    .stat-value { color: white; font-weight: 800; font-size: 1.8rem; letter-spacing: -1px; }
    .stat-icon { background: rgba(255,255,255,0.2); width: 50px; height: 50px; border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; }
    
    .recent-table-card { border-radius: 20px; border: none; box-shadow: 0 5px 20px rgba(0,0,0,0.03); }
    .recent-table-card .card-header { background: transparent; border-bottom: 1px solid #f1f5f9; padding: 1.5rem; }
</style>
@endsection

@section('page_content')
<div class="row pt-3 mb-4">
    <div class="col-12">
        <h3 class="fw-extrabold text-dark mb-1">Beranda Dashboard</h3>
        <p class="text-muted">Selamat datang kembali! Berikut ringkasan performa hari ini.</p>
    </div>
</div>

<div class="row g-4">
    {{-- Total Pesanan --}}
    <div class="col-md-6 col-xl-3">
        <div class="card dashboard-card gradient-card-1 shadow">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="stat-icon"><i class="ri-shopping-cart-2-fill fs-24"></i></div>
                    <span class="badge bg-white text-primary rounded-pill">Real-time</span>
                </div>
                <p class="stat-label mb-1">TOTAL PESANAN</p>
                <h2 class="stat-value mb-0">{{ number_format($totalTransactions ?? 0) }}</h2>
            </div>
        </div>
    </div>

    {{-- Total Profit --}}
    <div class="col-md-6 col-xl-3">
        <div class="card dashboard-card gradient-card-2 shadow">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="stat-icon"><i class="ri-money-dollar-circle-fill fs-24"></i></div>
                    <span class="badge bg-white text-success rounded-pill">Profit</span>
                </div>
                <p class="stat-label mb-1">TOTAL KEUNTUNGAN</p>
                <h2 class="stat-value mb-0">Rp {{ number_format($totalProfit ?? 0, 0, ',', '.') }}</h2>
            </div>
        </div>
    </div>

    {{-- Total Wilayah --}}
    <div class="col-md-6 col-xl-3">
        <div class="card dashboard-card gradient-card-3 shadow">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="stat-icon"><i class="ri-map-pin-2-fill fs-24"></i></div>
                    <span class="badge bg-white text-warning rounded-pill">Wilayah</span>
                </div>
                <p class="stat-label mb-1">WILAYAH AKTIF</p>
                <h2 class="stat-value mb-0">{{ number_format($totalRegions ?? 0) }}</h2>
            </div>
        </div>
    </div>

    {{-- Customer Baru --}}
    <div class="col-md-6 col-xl-3">
        <div class="card dashboard-card gradient-card-4 shadow">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="stat-icon"><i class="ri-user-star-fill fs-24"></i></div>
                    <span class="badge bg-white text-indigo rounded-pill">Baru</span>
                </div>
                <p class="stat-label mb-1">PELANGGAN BULAN INI</p>
                <h2 class="stat-value mb-0">+{{ $recentTransactions->count() }}</h2>
            </div>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-xl-8 mb-4">
        <div class="card recent-table-card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="fw-bold mb-0">Transaksi Terbaru</h5>
                <a href="{{ route('transactions.index') }}" class="btn btn-sm btn-soft-primary">Lihat Semua</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="ps-4">PELANGGAN</th>
                                <th>WILAYAH</th>
                                <th>PROFIT</th>
                                <th>TANGGAL</th>
                                <th class="text-center pe-4">STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($recentTransactions ?? [] as $rt)
                                <tr>
                                    <td class="ps-4">
                                        <div class="fw-bold text-dark">{{ $rt->customer_name }}</div>
                                        <small class="text-muted">{{ $rt->vehicle_type }}</small>
                                    </td>
                                    <td>{{ $rt->region->name ?? '-' }}</td>
                                    <td><span class="fw-bold text-success">Rp {{ number_format($rt->profit, 0, ',', '.') }}</span></td>
                                    <td>{{ \Carbon\Carbon::parse($rt->transaction_date)->format('d M Y') }}</td>
                                    <td class="text-center pe-4">
                                        @if($rt->evidence_image)
                                            <span class="badge bg-soft-success text-success px-2 py-1">Selesai/Ada Bukti</span>
                                        @else
                                            <span class="badge bg-soft-warning text-warning px-2 py-1">Pending</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center py-4 text-muted">Belum ada transaksi.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 mb-4">
        <div class="card recent-table-card">
            <div class="card-header">
                <h5 class="fw-bold mb-0">Quick Actions</h5>
            </div>
            <div class="card-body d-grid gap-3 p-4">
                <a href="{{ route('transactions.create') }}" class="btn btn-primary py-3 fw-bold rounded-pill shadow-sm">
                    <i class="ri-add-circle-line me-2"></i> Input Pesanan Baru
                </a>
                <a href="{{ route('regions.index') }}" class="btn btn-outline-primary py-3 fw-bold rounded-pill">
                    <i class="ri-map-pin-line me-2"></i> Kelola Wilayah
                </a>
                <a href="{{ route('index') }}" target="_blank" class="btn btn-outline-secondary py-3 fw-bold rounded-pill">
                    <i class="ri-external-link-line me-2"></i> Lihat Frontend Website
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
