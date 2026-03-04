<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice - {{ $transaction->invoice_number }}</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 40px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            border-bottom: 2px solid #0046af;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .logo {
            color: #0046af;
            font-size: 28px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .company-info p {
            margin: 0;
            font-size: 14px;
            color: #666;
        }
        .invoice-title {
            text-align: right;
        }
        .invoice-title h1 {
            margin: 0;
            color: #0046af;
            font-size: 32px;
            text-transform: uppercase;
        }
        .invoice-title p {
            margin: 5px 0 0;
            font-weight: bold;
            color: #333;
        }
        .details-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-bottom: 40px;
        }
        .details-group h3 {
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
            margin-bottom: 15px;
            font-size: 16px;
            text-transform: uppercase;
            color: #0046af;
        }
        .details-group p {
            margin: 5px 0;
            font-size: 14px;
        }
        .details-group span {
            font-weight: bold;
            display: inline-block;
            width: 140px;
        }
        .table-section {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 40px;
        }
        .table-section th {
            background-color: #f8fafc;
            color: #475569;
            text-align: left;
            padding: 12px;
            border-bottom: 2px solid #eee;
            font-size: 14px;
            text-transform: uppercase;
        }
        .table-section td {
            padding: 12px;
            border-bottom: 1px solid #eee;
            font-size: 14px;
        }
        .total-row td {
            font-weight: 800;
            font-size: 18px;
            color: #0046af;
            border-top: 2px solid #0046af;
            text-align: right;
            padding-top: 15px;
        }
        .footer {
            margin-top: 50px;
            display: flex;
            justify-content: space-between;
        }
        .signature {
            text-align: center;
            width: 200px;
        }
        .signature-name {
            margin-top: 60px;
            border-top: 1px solid #333;
            font-weight: boldness;
        }
        .no-print {
            margin-bottom: 20px;
            text-align: center;
        }
        .btn-print {
            background-color: #0046af;
            color: white;
            padding: 10px 25px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-weight: bold;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        .btn-print:hover {
            background-color: #003585;
            transform: translateY(-2px);
        }

        @media print {
            body { background: white; padding: 0; }
            .invoice-box { box-shadow: none; border: none; width: 100%; max-width: 100%; }
            .no-print { display: none; }
        }
    </style>
</head>
<body>
    <div class="no-print">
        <button onclick="window.print()" class="btn-print">Cetak Invoice</button>
        <a href="{{ route('transactions.index') }}" style="margin-left: 10px; color: #666; text-decoration: none;">Kembali ke Daftar</a>
    </div>

    <div class="invoice-box">
        <div class="header">
            <div class="company-info">
                <div class="logo">BJ MAHKOTA</div>
                <p>Solusi Terpercaya Proses Cepat</p>
                <p>Layanan: STNK, BPKB, Balik Nama, Mutasi</p>
            </div>
            <div class="invoice-title">
                <h1>INVOICE</h1>
                <p>#{{ $transaction->invoice_number }}</p>
                <p>Tanggal: {{ \Carbon\Carbon::parse($transaction->transaction_date)->format('d F Y') }}</p>
            </div>
        </div>

        <div class="details-section">
            <div class="details-group">
                <h3>Informasi Pelanggan</h3>
                <p><span>Nama Pelanggan</span>: {{ $transaction->customer_name }}</p>
                <p><span>Tipe Pelanggan</span>: {{ ucfirst($transaction->customer_type) }}</p>
                @if($transaction->company_name)
                <p><span>Nama Perusahaan</span>: {{ $transaction->company_name }}</p>
                @endif
                <p><span>Wilayah</span>: {{ $transaction->region->name ?? 'N/A' }}</p>
            </div>
            <div class="details-group">
                <h3>Detail Kendaraan</h3>
                <p><span>No. Polisi</span>: {{ $transaction->nopol ?? '-' }}</p>
                <p><span>Tipe Kendaraan</span>: {{ $transaction->vehicle_type }}</p>
                <p><span>Tahun</span>: {{ $transaction->year }}</p>
                <p><span>No. Rangka</span>: {{ $transaction->frame_number ?? '-' }}</p>
                <p><span>No. Mesin</span>: {{ $transaction->engine_number ?? '-' }}</p>
            </div>
        </div>

        <table class="table-section">
            <thead>
                <tr>
                    <th>Deskripsi Layanan</th>
                    <th style="text-align: right;">Total Biaya</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        Pengurusan Dokumen Kendaraan ({{ $transaction->vehicle_type }} - {{ $transaction->nopol }})
                        <br>
                        <small style="color: #666;">
                            Status Dokumen: 
                            {{ $transaction->stnk_received ? 'STNK' : '' }}
                            {{ $transaction->plat_received ? ', PLAT' : '' }}
                            {{ $transaction->bpkb_received ? ', BPKB' : '' }}
                        </small>
                    </td>
                    <td style="text-align: right;">Rp {{ number_format($transaction->selling_price, 0, ',', '.') }}</td>
                </tr>
                <tr class="total-row">
                    <td>TOTAL TAGIHAN</td>
                    <td>Rp {{ number_format($transaction->selling_price, 0, ',', '.') }}</td>
                </tr>
            </tbody>
        </table>

        <div class="footer">
            <div class="terms">
                <p style="font-size: 12px; color: #777;">
                    <strong>Catatan:</strong><br>
                    * Pembayaran dapat dilakukan secara tunai atau transfer.<br>
                    * Harap simpan invoice ini sebagai bukti pengurusan.
                </p>
            </div>
            <div class="signature">
                <p>Hormat Kami,</p>
                <div class="signature-name">BJ MAHKOTA</div>
            </div>
        </div>
    </div>
</body>
</html>
