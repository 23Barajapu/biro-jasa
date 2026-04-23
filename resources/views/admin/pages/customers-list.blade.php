@extends('admin.layouts.vertical')

@section('title', 'Customer List')

@section('extra_css')

@section('page_content')

@php $subTitle = 'Customer List'; @endphp
@php $title = 'Customers'; @endphp
@include('admin.partials.page-title')

<div class="row d-none">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header border-0">
                <div class="row justify-content-between">
                    <div class="col-lg-6">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <form class="app-search d-none d-md-block me-auto">
                                    <div class="position-relative">
                                        <input autocomplete="off" class="form-control" placeholder="Search Customer"
                                               type="search" value=""/>
                                        <iconify-icon class="search-widget-icon"
                                                      icon="solar:magnifer-broken"></iconify-icon>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-4">
                                <h5 class="text-dark fw-medium mb-0">501 <span class="text-muted"> Customers</span></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-md-end mt-3 mt-md-0">
                            <button class="btn btn-outline-primary me-1" type="button"><i
                                    class="ri-settings-2-line me-1"></i>More
                                Setting
                            </button>
                            <button class="btn btn-outline-primary me-1" type="button"><i
                                    class="ri-filter-line me-1"></i> Filters
                            </button>
                            <button class="btn btn-success me-1" type="button"><i class="ri-add-line"></i> New Customer
                            </button>
                        </div>
                    </div><!-- end col-->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center border-bottom">
                <div>
                    <h4 class="card-title">All Customer List</h4>
                </div>
                <div class="dropdown">
                    <a aria-expanded="false" class="dropdown-toggle btn btn-sm btn-outline-light rounded"
                       data-bs-toggle="dropdown" href="#">
                        This Month
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="#!">Download</a>
                        <!-- item-->
                        <a class="dropdown-item" href="#!">Export</a>
                        <!-- item-->
                        <a class="dropdown-item" href="#!">Import</a>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table align-middle text-nowrap table-hover table-centered mb-0">
                        <thead class="bg-light-subtle">
                        <tr>
                            <th>Nama Pelanggan</th>
                            <th>Perusahaan / Tipe</th>
                            <th>Total Transaksi</th>
                            <th>Total Profit</th>
                            <th>Interaksi Terakhir</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($customers as $customer)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <div class="avatar-sm bg-primary-subtle text-primary rounded-circle d-flex align-items-center justify-content-center fw-bold">
                                        {{ strtoupper(substr($customer->customer_name, 0, 1)) }}
                                    </div>
                                    <div>
                                        <span class="text-dark fw-medium fs-15">{{ $customer->customer_name }}</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                {{ $customer->customer_type == 'pt' ? ($customer->company_name ?: 'PT (Nama tidak diisi)') : 'Perorangan' }}
                            </td>
                            <td>
                                <span class="badge bg-info-subtle text-info px-2 py-1 fs-13">{{ $customer->total_transactions }} Transaksi</span>
                            </td>
                            <td>
                                <span class="fw-bold text-success">Rp {{ number_format($customer->total_profit, 0, ',', '.') }}</span>
                            </td>
                            <td>{{ \Carbon\Carbon::parse($customer->last_contacted)->format('d/m/Y') }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a class="btn btn-light btn-sm" href="{{ route('transactions.index') }}?search={{ urlencode($customer->customer_name) }}" title="Lihat Riwayat Transaksi">
                                        <iconify-icon class="align-middle fs-18" icon="solar:eye-broken"></iconify-icon>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center py-4 text-muted">Belum ada pelanggan.</td>
                        </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
            <div class="card-footer pb-0">
                {{ $customers->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra_javascript')
