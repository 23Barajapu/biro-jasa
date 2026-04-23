<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Transaksi Selesai</title>
    <style>
        @page {
            size: A4 landscape;
            margin: 15mm;
        }

        body {
            font-family: 'Times New Roman', Times, serif;
            color: #000;
            line-height: 1.5;
            margin: 0;
            padding: 0;
            background-color: #fff;
            font-size: 11pt;
        }

        .report-box {
            width: 100%;
            margin: auto;
            background: #fff;
        }

        .header {
            display: flex;
            align-items: center;
            border-bottom: 3px solid #000;
            padding-bottom: 10px;
            margin-bottom: 2px;
        }

        .header-inner {
            border-bottom: 1px solid #000;
            padding-bottom: 2px;
            width: 100%;
            display: flex;
            align-items: center;
        }

        .logo-container {
            width: 120px;
            text-align: center;
            padding-right: 20px;
        }

        .logo-placeholder {
            width: 80px;
            height: 80px;
            background-color: #000;
            color: #d4af37;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            text-align: center;
            font-size: 14px;
            border: 2px solid #d4af37;
            flex-direction: column;
            line-height: 1.2;
        }

        .company-info {
            flex: 1;
            text-align: center;
        }

        .company-name {
            font-size: 20pt;
            font-weight: bold;
            margin: 0;
            letter-spacing: 1px;
        }

        .company-address {
            font-size: 11pt;
            margin: 5px 0 0;
            line-height: 1.2;
        }

        .report-title {
            text-align: center;
            font-size: 16pt;
            font-weight: bold;
            text-transform: uppercase;
            margin: 20px 0 5px 0;
        }
        
        .report-date {
            text-align: center;
            font-size: 11pt;
            margin-bottom: 20px;
        }

        .table-section {
            width: 100%;
            border-collapse: collapse;
            font-size: 10pt;
            text-align: left;
        }

        .table-section th,
        .table-section td {
            border: 1px solid #000;
            padding: 6px 8px;
        }

        .table-section th {
            font-weight: bold;
            background-color: #f1f5f9 !important;
            -webkit-print-color-adjust: exact;
            text-align: center;
        }

        .table-section td.center-align {
            text-align: center;
        }

        .table-section td.right-align {
            text-align: right;
        }

        .signature-section {
            display: flex;
            justify-content: flex-end;
            margin-top: 40px;
            text-align: center;
        }

        .signature-box {
            width: 250px;
        }

        .signature-name {
            margin-top: 80px;
            font-weight: bold;
            text-decoration: underline;
        }

        .no-print {
            margin-bottom: 20px;
            text-align: center;
            padding: 20px;
            background: #f1f5f9;
        }

        .btn-print {
            background-color: #0046af;
            color: white;
            padding: 10px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        @media print {
            body {
                background: white;
            }
            .no-print {
                display: none;
            }
            .report-box {
                border: none;
            }
        }
    </style>
</head>
<body>
    <div class="no-print">
        <button onclick="window.print()" class="btn-print">Cetak Laporan</button>
        <button onclick="window.close()" style="margin-left: 10px; color: #666; background: none; border: 1px solid #ccc; padding: 10px 25px; border-radius: 5px; cursor: pointer;">Tutup Jendela</button>
    </div>

    <div class="report-box">
        <div class="header">
            <div class="header-inner">
                <div class="logo-container">
                    <div class="logo-placeholder">
                        <span style="font-size: 20px;">👑</span><br>
                        Biro Jasa<br>Mahkota
                    </div>
                </div>
                <div class="company-info">
                    <h1 class="company-name">BIRO JASA MAHKOTA</h1>
                    <p class="company-address">
                        Pasar Modernland K 2 G no 31 kecamatan Tangerang Kota<br>
                        Tangerang HP 081282173255
                    </p>
                </div>
            </div>
        </div>

        <div class="report-title">LAPORAN TRANSAKSI SELESAI</div>
        <div class="report-date">Dicetak pada: {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</div>

        <table class="table-section">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA PELANGGAN</th>
                    <th>NOPOL</th>
                    <th>KENDARAAN</th>
                    <th>WILAYAH</th>
                    <th>TANGGAL MASUK</th>
                    <th>MODAL (RP)</th>
                    <th>JUAL (RP)</th>
                    <th>PROFIT (RP)</th>
                </tr>
            </thead>
            <tbody>
                @php 
                    $totalModal = 0;
                    $totalJual = 0;
                    $totalProfit = 0;
                @endphp
                @forelse($transactions as $index => $item)
                    @php
                        $totalModal += $item->capital_cost;
                        $totalJual += $item->selling_price;
                        $totalProfit += $item->profit;
                    @endphp
                    <tr>
                        <td class="center-align">{{ $index + 1 }}</td>
                        <td>{{ $item->customer_name }}</td>
                        <td class="center-align">{{ $item->nopol ?? '-' }}</td>
                        <td>{{ $item->vehicle_type ?? '-' }}</td>
                        <td class="center-align">{{ $item->region->name ?? '-' }}</td>
                        <td class="center-align">{{ \Carbon\Carbon::parse($item->transaction_date)->format('d/m/Y') }}</td>
                        <td class="right-align">{{ number_format($item->capital_cost, 0, ',', '.') }}</td>
                        <td class="right-align">{{ number_format($item->selling_price, 0, ',', '.') }}</td>
                        <td class="right-align">{{ number_format($item->profit, 0, ',', '.') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="center-align" style="padding: 20px;">Belum ada data transaksi yang selesai.</td>
                    </tr>
                @endforelse
                
                @if($transactions->count() > 0)
                <tr>
                    <td colspan="6" class="right-align" style="font-weight: bold;">TOTAL:</td>
                    <td class="right-align" style="font-weight: bold;">{{ number_format($totalModal, 0, ',', '.') }}</td>
                    <td class="right-align" style="font-weight: bold;">{{ number_format($totalJual, 0, ',', '.') }}</td>
                    <td class="right-align" style="font-weight: bold;">{{ number_format($totalProfit, 0, ',', '.') }}</td>
                </tr>
                @endif
            </tbody>
        </table>

        <div class="signature-section">
            <div class="signature-box">
                <p style="margin: 0;">Tangerang, {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</p>
                <p style="margin: 5px 0 0 0;">Mengetahui,</p>
                <div class="signature-name">Ambarwati Silivany SH</div>
                <p style="margin: 0;">Pimpinan Biro Jasa</p>
            </div>
        </div>
    </div>
    <script>
        window.onload = function() {
            // Uncomment line below to auto-print on load
            window.print();
        }
    </script>
</body>
</html>
