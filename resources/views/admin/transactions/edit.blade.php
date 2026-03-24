@extends('admin.layouts.vertical')

@section('title', 'Edit Transaksi')

@section('extra_css')
<style>
    :root {
        --bj-primary: #0046af;
        --bj-secondary: #002d72;
    }
    .premium-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }
    .card-header-premium {
        background: linear-gradient(135deg, var(--bj-primary), var(--bs-info));
        color: white;
        border-radius: 15px 15px 0 0 !important;
        padding: 1.25rem;
    }
    .form-label-premium {
        font-weight: 600;
        color: #444;
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .form-control-premium {
        border-radius: 10px;
        padding: 0.75rem 1rem;
        border: 2px solid #edf2f7;
    }
    .profit-card {
        background: #f8fafc;
        border: 2px dashed #e2e8f0;
        border-radius: 15px;
        padding: 1.5rem;
        border-left: 4px solid var(--bj-primary);
    }
</style>
@endsection

@section('page_content')
<div class="row fade-in">
    <div class="col-12 text-center mb-4">
        <h3 class="fw-bold text-dark">Edit Data Pelanggan</h3>
        <p class="text-muted">Perbarui informasi transaksi untuk <b>{{ $transaction->customer_name }}</b></p>
    </div>

    <div class="col-lg-10 mx-auto">
        <form action="{{ route('transactions.update', $transaction->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row g-4">
                <div class="col-lg-7">
                    <div class="card premium-card mb-4">
                        <div class="card-header card-header-premium">
                            <h5 class="card-title mb-0 text-white"><i class="ri-edit-box-line me-2"></i>Data Identitas</h5>
                        </div>
                        <div class="card-body p-4">
                            <div class="mb-4">
                                <label class="form-label-premium text-primary">Nama Pelanggan</label>
                                <input type="text" name="customer_name" class="form-control form-control-premium" value="{{ $transaction->customer_name }}" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label class="form-label-premium">Nomor Polisi</label>
                                    <input type="text" name="nopol" class="form-control form-control-premium text-uppercase" value="{{ $transaction->nopol }}">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label class="form-label-premium">Tipe Kendaraan</label>
                                    <input type="text" name="vehicle_type" class="form-control form-control-premium" value="{{ $transaction->vehicle_type }}">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label-premium">No. Rangka</label>
                                    <input type="text" name="frame_number" class="form-control form-control-premium" value="{{ $transaction->frame_number }}">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label-premium">No. Mesin</label>
                                    <input type="text" name="engine_number" class="form-control form-control-premium" value="{{ $transaction->engine_number }}">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label-premium">No. BPKB</label>
                                    <input type="text" name="no_bpkb" class="form-control form-control-premium" value="{{ $transaction->no_bpkb }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card premium-card">
                        <div class="card-header card-header-premium bg-info">
                            <h5 class="card-title mb-0 text-white"><i class="ri-checkbox-multiple-line me-2"></i>Status & Kelengkapan</h5>
                        </div>
                        <div class="card-body p-4">
                            <div class="d-flex gap-4 flex-wrap">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="stnk_received" id="stnk" {{ $transaction->stnk_received ? 'checked' : '' }}>
                                    <label class="form-check-label fw-bold" for="stnk">STNK ADADA</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="plat_received" id="plat" {{ $transaction->plat_received ? 'checked' : '' }}>
                                    <label class="form-check-label fw-bold" for="plat">PLAT ADA</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="bpkb_received" id="bpkb" {{ $transaction->bpkb_received ? 'checked' : '' }}>
                                    <label class="form-check-label fw-bold" for="bpkb">BPKB ADA</label>
                                </div>
                            </div>
                            <hr class="my-4">
                            <div class="row">
                                <div class="col-6">
                                    <label class="form-label-premium small">Tanggal Masuk</label>
                                    <input type="date" name="transaction_date" class="form-control form-control-premium" value="{{ \Carbon\Carbon::parse($transaction->transaction_date)->format('Y-m-d') }}">
                                </div>
                                <div class="col-6">
                                    <label class="form-label-premium small">Tgl BPKB</label>
                                    <input type="date" name="bpkb_date" class="form-control form-control-premium" value="{{ $transaction->bpkb_date ? \Carbon\Carbon::parse($transaction->bpkb_date)->format('Y-m-d') : '' }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="card premium-card h-100">
                        <div class="card-header card-header-premium bg-dark">
                            <h5 class="card-title mb-0 text-white"><i class="ri-calculator-line me-2"></i>Perhitungan Biaya</h5>
                        </div>
                        <div class="card-body p-4">
                            <div class="mb-4">
                                <label class="form-label-premium">Wilayah</label>
                                <select name="region_id" id="region_id" class="form-select form-control-premium">
                                    @foreach($regions as $region)
                                        <option value="{{ $region->id }}" data-price="{{ $region->base_price }}" {{ $transaction->region_id == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label-premium text-warning">Biaya Modal (Modal)</label>
                                <input type="number" name="capital_cost" id="modal" class="form-control form-control-premium" value="{{ $transaction->capital_cost }}">
                            </div>
                            <div class="mb-5">
                                <label class="form-label-premium text-success">Harga Jual</label>
                                <input type="number" name="selling_price" id="jual" class="form-control form-control-premium" value="{{ $transaction->selling_price }}">
                            </div>

                            <div class="profit-card text-center">
                                <span class="text-muted small fw-bold">PROYEKSI KEUNTUNGAN</span>
                                <h2 id="profit_display" class="fw-bold text-primary mt-1 mb-0">Rp {{ number_format($transaction->profit, 0, ',', '.') }}</h2>
                            </div>

                            <div class="d-grid gap-2 mt-5">
                                <button type="submit" class="btn btn-primary btn-lg rounded-pill py-3 fw-bold">SIMPAN PERUBAHAN</button>
                                <a href="{{ route('transactions.index') }}" class="btn btn-light rounded-pill py-2">Batal</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@section('extra_javascript')
<script>
    const regionSelect = document.getElementById('region_id');
    const modalInput = document.getElementById('modal');
    const jualInput = document.getElementById('jual');
    const profitDisplay = document.getElementById('profit_display');

    function calculateProfit() {
        const modal = parseFloat(modalInput.value) || 0;
        const jual = parseFloat(jualInput.value) || 0;
        const profit = jual - modal;
        profitDisplay.innerText = 'Rp ' + profit.toLocaleString('id-ID');
        profitDisplay.className = profit < 0 ? 'fw-bold text-danger mt-1 mb-0' : (profit > 0 ? 'fw-bold text-success mt-1 mb-0' : 'fw-bold text-primary mt-1 mb-0');
    }

    regionSelect.addEventListener('change', function() {
        modalInput.value = this.options[this.selectedIndex].getAttribute('data-price');
        calculateProfit();
        modalInput.classList.add('bg-warning-subtle');
        setTimeout(() => modalInput.classList.remove('bg-warning-subtle'), 500);
    });

    modalInput.addEventListener('input', calculateProfit);
    jualInput.addEventListener('input', calculateProfit);
</script>
@endsection

@endsection
