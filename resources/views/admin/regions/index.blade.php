@extends('admin.layouts.vertical')

@section('title', 'Manajemen Wilayah')

@section('extra_css')
<style>
    .region-card {
        border: none;
        border-radius: 12px;
        transition: all 0.3s ease;
        background: #fff;
        border-bottom: 3px solid transparent;
    }
    .region-card:hover {
        transform: translateY(-5px);
        border-bottom-color: var(--bs-primary);
        box-shadow: 0 10px 25px rgba(0,0,0,0.05);
    }
    .price-text {
        font-size: 1.5rem;
        font-weight: 800;
        color: #1e293b;
    }
</style>
@endsection

@section('page_content')
<div class="row mb-4">
    <div class="col-12 d-flex align-items-center justify-content-between">
        <div>
            <h3 class="fw-bold">Manajemen Wilayah & Harga Dasar</h3>
            <p class="text-muted mb-0">Atur harga modal dasar untuk setiap wilayah operasional.</p>
        </div>
        <a href="{{ route('regions.create') }}" class="btn btn-primary rounded-pill px-4 shadow-sm">
            <i class="ri-add-line me-1"></i> Tambah Wilayah Baru
        </a>
    </div>
</div>

<div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">
    @forelse($regions as $region)
        <div class="col">
            <div class="card h-100 region-card p-3">
                <div class="card-body p-2">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="bg-soft-primary p-2 rounded-3 text-primary">
                            <i class="ri-map-pin-2-fill fs-24"></i>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-link link-dark p-0" data-bs-toggle="dropdown"><i class="ri-more-2-fill"></i></button>
                            <ul class="dropdown-menu dropdown-menu-end shadow border-0">
                                <li><a class="dropdown-item" href="{{ route('regions.edit', $region->id) }}"><i class="ri-edit-line me-2 text-primary"></i> Edit</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form action="{{ route('regions.destroy', $region->id) }}" method="POST" onsubmit="return confirm('Hapus wilayah ini?')">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="dropdown-item text-danger"><i class="ri-delete-bin-line me-2"></i> Hapus</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h5 class="fw-bold text-dark mb-1">{{ $region->name }}</h5>
                    <p class="text-muted small mb-3">Modal Dasar (IDR)</p>
                    <div class="price-text">Rp {{ number_format($region->base_price, 0, ',', '.') }}</div>
                </div>
                <div class="card-footer bg-transparent border-0 p-2 text-end">
                    <small class="text-muted"><i class="ri-time-line me-1"></i>Updated: {{ $region->updated_at->diffForHumans() }}</small>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12 text-center py-5">
            <i class="ri-ghost-line fs-60 text-muted opacity-20"></i>
            <p class="mt-3 text-muted">Belum ada wilayah yang terdaftar.</p>
        </div>
    @endforelse
</div>
@endsection
