@extends('admin.layouts.vertical')

@section('title', 'Atur Wilayah Baru')

@section('extra_css')
<style>
    .premium-form-card {
        border: none;
        border-radius: 20px;
        background: white;
        box-shadow: 0 15px 40px rgba(0,0,0,0.06);
    }
    .input-group-premium {
        background: #f8fafc;
        border-radius: 12px;
        padding: 0.5rem 1rem;
        border: 2px solid #f1f5f9;
        transition: all 0.3s ease;
    }
    .input-group-premium:focus-within {
        border-color: var(--bs-primary);
        background: white;
    }
    .input-group-premium input {
        background: transparent;
        border: none;
        font-weight: 600;
    }
    .input-group-premium input:focus {
        box-shadow: none;
    }
</style>
@endsection

@section('page_content')
<div class="row justify-content-center pt-4">
    <div class="col-md-6">
        <div class="card premium-form-card">
            <div class="card-body p-5">
                <div class="text-center mb-5">
                    <div class="bg-primary d-inline-flex p-3 rounded-circle text-white mb-3 shadow">
                        <i class="ri-map-pin-add-line fs-32"></i>
                    </div>
                    <h3 class="fw-bold text-dark">Tambah Wilayah Operasional</h3>
                    <p class="text-muted">Tentukan area baru dan harga modal jasanya.</p>
                </div>

                <form action="{{ route('regions.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="form-label fw-bold text-dark mb-2">Nama Wilayah</label>
                        <div class="input-group-premium d-flex align-items-center">
                            <i class="ri-map-fill text-muted me-3 fs-20"></i>
                            <input type="text" name="name" class="form-control" placeholder="Contoh: Jakarta Barat" required autofocus>
                        </div>
                    </div>

                    <div class="mb-5">
                        <label class="form-label fw-bold text-dark mb-2">Harga Modal Dasar (IDR)</label>
                        <div class="input-group-premium d-flex align-items-center">
                            <span class="fw-bold text-primary me-2">Rp</span>
                            <input type="number" name="base_price" class="form-control" placeholder="Contoh: 150000" required>
                        </div>
                        <small class="text-muted mt-2 d-block text-center small">Harga ini akan otomatis mengisi kolom 'Modal' saat input pelanggan.</small>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg rounded-pill py-3 fw-bold shadow">
                            SIMPAN WILAYAH SEKARANG
                        </button>
                        <a href="{{ route('regions.index') }}" class="btn btn-link text-muted fw-semibold">Batal & Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
