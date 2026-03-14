@extends('admin.layouts.vertical')

@section('title', 'Layanan Balik Nama')

@section('page_content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Layanan Balik Nama Kendaraan</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Layanan</a></li>
                    <li class="breadcrumb-item active">Balik Nama</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0 text-white"><i class="ri-user-shared-line me-2"></i> Pengurusan Balik Nama Mudah dan Cepat</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-9">
                        <p class="lead">
                            Balik Nama Kendaraan Bermotor (BBN-KB) adalah proses pengalihan kepemilikan kendaraan dari pemilik lama ke pemilik baru. Proses ini sangat penting dilakukan ketika Anda membeli kendaraan bekas agar dokumen kendaraan resmi atas nama Anda sendiri.
                        </p>

                        <h5 class="mt-4 mb-3 text-primary">Persyaratan Dokumen Balik Nama:</h5>
                        <ul class="list-group list-group-flush mb-4">
                            <li class="list-group-item"><i class="ri-check-line text-success me-2"></i> KTP asli pemilik baru dan fotokopi</li>
                            <li class="list-group-item"><i class="ri-check-line text-success me-2"></i> STNK asli dan fotokopi</li>
                            <li class="list-group-item"><i class="ri-check-line text-success me-2"></i> BPKB asli dan fotokopi</li>
                            <li class="list-group-item"><i class="ri-check-line text-success me-2"></i> Kwitansi pembelian kendaraan bermaterai</li>
                            <li class="list-group-item"><i class="ri-check-line text-success me-2"></i> Hasil cek fisik kendaraan (gesek nomor rangka dan mesin)</li>
                        </ul>

                        <a href="{{ route('transactions.create') }}" class="btn btn-success"><i class="ri-add-line me-1"></i> Buat Transaksi Baru</a>
                    </div>
                    <div class="col-md-3 text-center">
                        <img src="{{ asset('assets/images/services/balik-nama.jpg') }}" alt="Balik Nama Kendaraan" class="img-fluid rounded shadow" onerror="this.style.display='none'">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection