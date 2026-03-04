@extends('admin.layouts.vertical')

@section('title', 'Daftar Transaksi Premium')

@section('extra_css')
<style>
    .stats-card {
        border: none;
        border-radius: 12px;
        background: #fff;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        border-left: 4px solid var(--bs-primary);
    }
    .table-premium {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0,0,0,0.03);
    }
    .table-premium thead th {
        background: #f8fafc;
        color: #475569;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 0.75rem;
        letter-spacing: 0.5px;
        padding: 1.25rem 1rem;
        border: none;
    }
    .table-premium tbody td {
        padding: 1rem;
        vertical-align: middle;
        border-bottom: 1px solid #f1f5f9;
        font-size: 0.875rem;
    }
    .table-premium tbody tr:hover {
        background-color: #f8fafc;
    }
    .badge-soft-success { background: #dcfce7; color: #166534; border-radius: 6px; }
    .badge-soft-danger { background: #fee2e2; color: #991b1b; border-radius: 6px; }
    .badge-soft-primary { background: #e0f2fe; color: #075985; border-radius: 6px; }
    
    .profit-text { font-weight: 800; color: #0046af; }
    .customer-name { font-weight: 700; color: #1e293b; }
    .nopol-badge { 
        background: #334155; 
        color: white; 
        padding: 4px 8px; 
        border-radius: 4px; 
        font-family: 'Courier New', Courier, monospace;
        font-weight: bold;
    }
</style>
@endsection

@section('page_content')
<div class="row mb-4 fade-in">
    <div class="col-12">
        <div class="d-md-flex align-items-center justify-content-between">
            <div>
                <h3 class="fw-bold text-dark">Monitoring Transaksi BJ Mahkota</h3>
                <p class="text-muted">Kelola dan pantau semua data pelanggan secara real-time.</p>
            </div>
            <a href="{{ route('transactions.create') }}" class="btn btn-primary btn-lg rounded-pill px-4 shadow-sm">
                <i class="ri-add-circle-line me-1"></i> Data Pelanggan Baru
            </a>
        </div>
    </div>
</div>

{{-- Summary Stats Area --}}
<div class="row g-3 mb-4">
    <div class="col-md-3">
        <div class="stats-card p-3">
            <div class="d-flex align-items-center gap-3">
                <div class="avtar bg-soft-primary text-primary p-2 rounded-3"><i class="ri-shopping-bag-3-line fs-24"></i></div>
                <div>
                    <p class="text-muted mb-0 small uppercase fw-bold">Total Pesanan</p>
                    <h4 class="mb-0 fw-bold">{{ $transactions->count() }}</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stats-card p-3" style="border-left-color: #10b981;">
            <div class="d-flex align-items-center gap-3">
                <div class="avtar bg-soft-success text-success p-2 rounded-3"><i class="ri-money-dollar-circle-line fs-24"></i></div>
                <div>
                    <p class="text-muted mb-0 small uppercase fw-bold">Estimasi Profit</p>
                    <h4 class="mb-0 fw-bold text-success">Rp {{ number_format($transactions->sum('profit'), 0, ',', '.') }}</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stats-card p-3" style="border-left-color: #f59e0b;">
            <div class="d-flex align-items-center gap-3">
                <div class="avtar bg-soft-warning text-warning p-2 rounded-3"><i class="ri-map-pin-2-line fs-24"></i></div>
                <div>
                    <p class="text-muted mb-0 small uppercase fw-bold">Wilayah Aktif</p>
                    <h4 class="mb-0 fw-bold">{{ $transactions->unique('region_id')->count() }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                <i class="ri-checkbox-circle-line me-2"></i> {{ session('success') }}
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="table-premium">
            <div class="table-responsive p-0">
                <table class="table table-nowrap mb-0">
                    <thead>
                        <tr>
                            <th>IDENTITAS</th>
                            <th>KENDARAAN</th>
                            <th>DOKUMEN</th>
                            <th>TANGGAL</th>
                            <th>KEUANGAN (MODAL/JUAL)</th>
                            <th class="text-primary">PROFIT</th>
                            <th>WILAYAH</th>
                            <th>BUKTI</th>
                            <th class="text-center">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($transactions as $item)
                            <tr>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span class="customer-name">{{ $item->customer_name }}</span>
                                        <small class="text-muted">ID: #BJ-{{ str_pad($item->id, 4, '0', STR_PAD_LEFT) }}</small>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column gap-1">
                                        <span class="nopol-badge w-fit">{{ $item->nopol ?? 'TIDAK ADA NOPOL' }}</span>
                                        <small class="text-dark fw-medium">{{ $item->vehicle_type }} ({{ $item->year }})</small>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex gap-1">
                                        <span class="badge {{ $item->stnk_received ? 'badge-soft-success' : 'badge-soft-danger' }} px-2">STNK</span>
                                        <span class="badge {{ $item->plat_received ? 'badge-soft-success' : 'badge-soft-danger' }} px-2">PLAT</span>
                                        <span class="badge {{ $item->bpkb_received ? 'badge-soft-success' : 'badge-soft-danger' }} px-2">BPKB</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span class="fw-bold">{{ \Carbon\Carbon::parse($item->transaction_date)->format('d/m/Y') }}</span>
                                        <small class="text-muted">Masuk</small>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <small class="text-muted">M: Rp {{ number_format($item->capital_cost, 0, ',', '.') }}</small>
                                        <span class="fw-bold text-dark">J: Rp {{ number_format($item->selling_price, 0, ',', '.') }}</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="profit-text fs-16">Rp {{ number_format($item->profit, 0, ',', '.') }}</span>
                                </td>
                                <td>
                                    <span class="badge badge-soft-primary border border-primary-subtle px-2 py-1">
                                        <i class="ri-map-pin-2-fill me-1"></i> {{ $item->region->name ?? 'N/A' }}
                                    </span>
                                </td>
                                <td>
                                    @if($item->evidence_image)
                                        <a href="{{ asset('storage/' . $item->evidence_image) }}" target="_blank" class="btn btn-sm btn-outline-info rounded-pill px-3">
                                            <i class="ri-eye-line me-1"></i> Lihat
                                        </a>
                                    @else
                                        <button class="btn btn-sm btn-warning rounded-pill px-3 text-white" data-bs-toggle="modal" data-bs-target="#uploadModal{{ $item->id }}">
                                            <i class="ri-upload-cloud-2-line me-1"></i> Upload
                                        </button>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-soft-secondary btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end shadow border-0">
                                            <li><a class="dropdown-item py-2" href="{{ route('transactions.edit', $item->id) }}"><i class="ri-edit-2-line me-2 text-primary"></i> Edit Data</a></li>
                                            <li><a class="dropdown-item py-2" href="{{ route('transactions.invoice', $item->id) }}" target="_blank"><i class="ri-printer-line me-2 text-info"></i> Cetak Invoice</a></li>
                                            <li><hr class="dropdown-divider opacity-50"></li>
                                            <li>
                                                <form action="{{ route('transactions.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus transaksi ini?')">
                                                    @csrf @method('DELETE')
                                                    <button type="submit" class="dropdown-item py-2 text-danger"><i class="ri-delete-bin-line me-2"></i> Hapus</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            {{-- Re-use modal logic from previous version but styled better --}}
                            @if(!$item->evidence_image)
                            <div class="modal fade" id="uploadModal{{ $item->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <form action="{{ route('transactions.upload-evidence', $item->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-content border-0 shadow-lg" style="border-radius: 20px;">
                                            <div class="modal-header border-0 pb-0">
                                                <h5 class="fw-bold">Unggah Bukti Proses</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body p-4 text-center">
                                                <div class="mb-3 bg-light rounded-circle d-inline-flex p-4 text-primary">
                                                    <i class="ri-image-add-line fs-40"></i>
                                                </div>
                                                <p class="text-muted px-4">Pilih gambar bukti untuk pelanggan <b>{{ $item->customer_name }}</b>. Maksimal ukuran file 2MB.</p>
                                                <input type="file" name="evidence_image" class="form-control form-control-lg border-2" accept="image/*" required>
                                            </div>
                                            <div class="modal-footer border-0 pt-0 pb-4 justify-content-center">
                                                <button type="button" class="btn btn-light rounded-pill px-4" data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-primary rounded-pill px-4 shadow-sm">Simpan Bukti</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            @endif
                        @empty
                            <tr>
                                <td colspan="9" class="text-center py-5">
                                    <div class="py-4">
                                        <i class="ri-inbox-line fs-60 text-muted opacity-20"></i>
                                        <p class="mt-3 text-muted">Belum ada data transaksi tersimpan.</p>
                                        <a href="{{ route('transactions.create') }}" class="btn btn-sm btn-primary rounded-pill mt-2">Buat Transaksi Pertama</a>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
