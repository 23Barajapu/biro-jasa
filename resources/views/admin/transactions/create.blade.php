@extends('admin.layouts.vertical')

@section('title', 'Input Transaksi Premium')

@section('extra_css')
<style>
    :root {
        --bj-primary: #0046af;
        --bj-secondary: #002d72;
        --bj-accent: #ffb800;
    }

    .premium-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease;
    }

    .premium-card:hover {
        transform: translateY(-5px);
    }

    .card-header-premium {
        background: linear-gradient(135deg, var(--bj-primary), var(--bj-secondary));
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
        transition: all 0.3s ease;
    }

    .form-control-premium:focus {
        border-color: var(--bj-primary);
        box-shadow: 0 0 0 4px rgba(0, 70, 175, 0.1);
    }

    .profit-card {
        background: #f8fafc;
        border: 2px dashed #e2e8f0;
        border-radius: 15px;
        padding: 1.5rem;
        position: relative;
        overflow: hidden;
    }

    .profit-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
        background: var(--bj-primary);
    }

    #profit_display {
        font-size: 2.5rem;
        letter-spacing: -1px;
    }

    .badge-icon {
        width: 35px;
        height: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
        background: rgba(255, 255, 255, 0.2);
    }
</style>
@endsection

@section('page_content')
<div class="row fade-in">
    <div class="col-12">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div>
                <h3 class="fw-bold text-dark mb-1">Input Data Pelanggan Baru</h3>
                <p class="text-muted mb-0">Lengkapi formulir di bawah untuk mencatat transaksi baru.</p>
            </div>
            <a href="{{ route('transactions.index') }}" class="btn btn-light rounded-pill px-4 shadow-sm">
                <i class="ri-arrow-left-line me-1"></i> Kembali ke Daftar
            </a>
        </div>

        <form action="{{ route('transactions.store') }}" method="POST">
            @csrf
            <div class="row g-4">
                {{-- Bagian Kiri: Data Utama --}}
                <div class="col-lg-8">
                    <div class="card premium-card mb-4">
                        <div class="card-header card-header-premium d-flex align-items-center gap-3">
                            <div class="badge-icon"><i class="ri-user-star-line fs-20"></i></div>
                            <h5 class="card-title mb-0 text-white">Informasi Identitas & Kendaraan</h5>
                        </div>
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <label class="form-label-premium"><i class="ri-user-follow-line text-primary"></i> Nama Lengkap Pelanggan</label>
                                    <input type="text" name="customer_name" class="form-control form-control-premium @error('customer_name') is-invalid @enderror" required placeholder="Masukkan nama sesuai KTP/STNK">
                                    @error('customer_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                                <div class="col-md-4 mb-4">
                                    <label class="form-label-premium"><i class="ri-car-line text-primary"></i> Nomor Polisi</label>
                                    <input type="text" name="nopol" class="form-control form-control-premium text-uppercase" placeholder="Contoh: B 1234 ABC">
                                </div>
                                <div class="col-md-4 mb-4">
                                    <label class="form-label-premium"><i class="ri-settings-3-line text-primary"></i> Tipe Kendaraan</label>
                                    <input type="text" name="vehicle_type" class="form-control form-control-premium" placeholder="Contoh: Vario 160 ABS">
                                </div>
                                <div class="col-md-4 mb-4">
                                    <label class="form-label-premium"><i class="ri-calendar-event-line text-primary"></i> Tahun</label>
                                    <input type="number" name="year" class="form-control form-control-premium" placeholder="Contoh: 2024">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label-premium"><i class="ri-qr-scan-2-line text-primary"></i> Nomor Rangka</label>
                                    <input type="text" name="frame_number" class="form-control form-control-premium text-uppercase" placeholder="Masukkan No. Rangka">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label-premium"><i class="ri-engine-line text-primary"></i> Nomor Mesin</label>
                                    <input type="text" name="engine_number" class="form-control form-control-premium text-uppercase" placeholder="Masukkan No. Mesin">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label-premium"><i class="ri-book-2-line text-primary"></i> Nomor BPKB</label>
                                    <input type="text" name="no_bpkb" class="form-control form-control-premium text-uppercase" placeholder="Masukkan No. BPKB">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card premium-card">
                        <div class="card-header card-header-premium d-flex align-items-center gap-3">
                            <div class="badge-icon"><i class="ri-file-list-3-line fs-20"></i></div>
                            <h5 class="card-title mb-0 text-white">Status Kelengkapan Berkas</h5>
                        </div>
                        <div class="card-body p-4">
                            <div class="row align-items-center">
                                <div class="col-md-4 mb-3">
                                    <div class="form-check form-switch custom-switch p-0 d-flex align-items-center gap-3">
                                        <input class="form-check-input ms-0" type="checkbox" name="stnk_received" id="stnk" style="width: 50px; height: 25px;">
                                        <label class="form-label-premium mb-0" for="stnk">Terima STNK</label>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-check form-switch custom-switch p-0 d-flex align-items-center gap-3">
                                        <input class="form-check-input ms-0" type="checkbox" name="plat_received" id="plat" style="width: 50px; height: 25px;">
                                        <label class="form-label-premium mb-0" for="plat">Terima Plat</label>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-check form-switch custom-switch p-0 d-flex align-items-center gap-3">
                                        <input class="form-check-input ms-0" type="checkbox" name="bpkb_received" id="bpkb" style="width: 50px; height: 25px;">
                                        <label class="form-label-premium mb-0" for="bpkb">Terima BPKB</label>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4 opacity-50">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label-premium"><i class="ri-time-line text-primary"></i> Tanggal Masuk</label>
                                    <input type="date" name="transaction_date" class="form-control form-control-premium" value="{{ date('Y-m-d') }}" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label-premium"><i class="ri-calendar-check-line text-primary"></i> Estimasi BPKB</label>
                                    <input type="date" name="bpkb_date" class="form-control form-control-premium">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Bagian Kanan: Biaya & Wilayah --}}
                <div class="col-lg-4">
                    <div class="card premium-card mb-4 h-100">
                        <div class="card-header card-header-premium d-flex align-items-center gap-3">
                            <div class="badge-icon"><i class="ri-money-dollar-box-line fs-20"></i></div>
                            <h5 class="card-title mb-0 text-white">Wilayah & Biaya</h5>
                        </div>
                        <div class="card-body p-4 d-flex flex-column">
                            <div class="mb-4">
                                <label class="form-label-premium"><i class="ri-map-pin-line text-primary"></i> Pilih Wilayah Operasional</label>
                                <select name="region_id" id="region_id" class="form-select form-control-premium @error('region_id') is-invalid @enderror" required>
                                    <option value="">-- Pilih Wilayah --</option>
                                    @foreach($regions as $region)
                                    <option value="{{ $region->id }}" data-price="{{ $region->base_price }}">{{ $region->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label-premium"><i class="ri-database-2-line text-warning"></i> Biaya Modal (Modal)</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-2 border-end-0" style="border-radius: 10px 0 0 10px;">Rp</span>
                                    <input type="number" name="capital_cost" id="modal" class="form-control form-control-premium border-start-0" value="0" required style="border-radius: 0 10px 10px 0;">
                                </div>
                                <small class="text-muted mt-2 d-block">Harga otomatis terisi saat wilayah dipilih.</small>
                            </div>

                            <div class="mb-5">
                                <label class="form-label-premium"><i class="ri-hand-coin-line text-success"></i> Harga Jual ke Pelanggan</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-2 border-end-0" style="border-radius: 10px 0 0 10px;">Rp</span>
                                    <input type="number" name="selling_price" id="jual" class="form-control form-control-premium border-start-0" value="0" required style="border-radius: 0 10px 10px 0;">
                                </div>
                            </div>

                            <div class="mt-auto">
                                <div class="profit-card">
                                    <p class="text-muted fw-semibold mb-1">PROYEKSI KEUNTUNGAN</p>
                                    <h2 id="profit_display" class="fw-bold text-primary mb-0">Rp 0</h2>
                                </div>
                            </div>

                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary btn-lg shadow-lg rounded-pill py-3 fw-bold d-flex align-items-center justify-content-center gap-2">
                                    <i class="ri-save-3-line fs-20"></i> Simpan Transaksi
                                </button>
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

        if (profit < 0) {
            profitDisplay.className = 'fw-bold text-danger mb-0';
        } else if (profit > 0) {
            profitDisplay.className = 'fw-bold text-success mb-0';
        } else {
            profitDisplay.className = 'fw-bold text-primary mb-0';
        }
    }

    regionSelect.addEventListener('change', function() {
        const selectedOption = this.options[this.selectedIndex];
        if (selectedOption.value) {
            const basePrice = selectedOption.getAttribute('data-price');
            // SEKARANG MASUK KE MODAL SESUAI PERMINTAAN USER
            modalInput.value = basePrice;
            calculateProfit();

            // Add subtle animation to modal input
            modalInput.classList.add('bg-warning-subtle');
            setTimeout(() => modalInput.classList.remove('bg-warning-subtle'), 500);
        }
    });

    modalInput.addEventListener('input', calculateProfit);
    jualInput.addEventListener('input', calculateProfit);
</script>
@endsection

@endsection