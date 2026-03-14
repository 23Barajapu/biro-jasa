@php
if (!function_exists('terbilang')) {
function terbilang($x) {
$x = abs($x);
$angka = ["", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas"];
$result = "";
if ($x < 12) $result=" " . $angka[$x];
    elseif ($x < 20) $result=terbilang($x - 10) . " belas" ;
    elseif ($x < 100) $result=terbilang($x / 10) . " puluh" . terbilang($x % 10);
    elseif ($x < 200) $result=" seratus" . terbilang($x - 100);
    elseif ($x < 1000) $result=terbilang($x / 100) . " ratus" . terbilang($x % 100);
    elseif ($x < 2000) $result=" seribu" . terbilang($x - 1000);
    elseif ($x < 1000000) $result=terbilang($x / 1000) . " ribu" . terbilang($x % 1000);
    elseif ($x < 1000000000) $result=terbilang($x / 1000000) . " juta" . terbilang(fmod($x, 1000000));
    return $result;
    }
    }
    @endphp
    <!DOCTYPE html>
    <html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Invoice - {{ $transaction->invoice_number }}</title>
        <style>
            @page {
                size: A4;
                margin: 20mm;
            }

            body {
                font-family: 'Times New Roman', Times, serif;
                color: #000;
                line-height: 1.5;
                margin: 0;
                padding: 0;
                background-color: #fff;
                font-size: 14pt;
            }

            .invoice-box {
                width: 100%;
                max-width: 210mm;
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
            }

            .logo-container {
                width: 150px;
                text-align: center;
                padding-right: 20px;
            }

            .logo-placeholder {
                width: 100px;
                height: 100px;
                background-color: #000;
                color: #d4af37;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: bold;
                text-align: center;
                font-size: 16px;
                border: 2px solid #d4af37;
                flex-direction: column;
                line-height: 1.2;
            }

            .logo-placeholder img {
                width: 100%;
                height: auto;
            }

            .company-info {
                flex: 1;
                text-align: center;
            }

            .company-name {
                font-size: 24pt;
                font-weight: bold;
                margin: 0;
                letter-spacing: 1px;
            }

            .company-address {
                font-size: 12pt;
                margin: 5px 0 0;
                line-height: 1.2;
            }

            .date-section {
                margin-top: 15px;
                font-weight: bold;
            }

            .subject-section {
                margin-top: 30px;
                display: flex;
            }

            .subject-label {
                width: 80px;
                font-weight: bold;
            }

            .subject-value {
                font-weight: bold;
            }

            .to-section {
                margin-top: 30px;
            }

            .to-section p {
                margin: 2px 0;
            }

            .content-section {
                margin-top: 30px;
                text-align: justify;
            }

            .table-section {
                width: 100%;
                border-collapse: collapse;
                margin-top: 15px;
                font-size: 11pt;
                text-align: center;
            }

            .table-section th,
            .table-section td {
                border: 1px solid #000;
                padding: 8px 4px;
            }

            .table-section th {
                font-weight: bold;
            }

            .table-section td.left-align {
                text-align: left;
            }

            .table-section td.right-align {
                text-align: right;
            }

            .total-row {
                font-weight: bold;
            }

            .terbilang-row {
                font-weight: bold;
            }

            .closing-section {
                margin-top: 20px;
            }

            .signature-section {
                display: flex;
                justify-content: space-between;
                margin-top: 40px;
                text-align: center;
            }

            .signature-box {
                width: 250px;
            }

            .signature-name {
                margin-top: 90px;
                font-weight: bold;
            }

            .signature-name-left {
                margin-top: 90px;
                font-weight: bold;
                text-align: left;
            }

            .payment-info {
                margin-top: 30px;
                font-size: 12pt;
                font-style: italic;
                font-weight: bold;
                width: 350px;
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

                .invoice-box {
                    border: none;
                }
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
                <div class="header-inner">
                    <div class="logo-container">
                        <div class="logo-placeholder">
                            <span style="font-size: 24px;">👑</span><br>
                            Biro Jasa<br>Mahkota
                        </div>
                    </div>
                    <div class="company-info">
                        <h1 class="company-name">BIRO JASA MAHKOTA</h1>
                        <p class="company-address">
                            Pasar Modernland K 2 G no 31 kecamatan Tangerang Kota<br>
                            Tangerang HP 081282173255 Email
                        </p>
                    </div>
                </div>
            </div>

            <div class="date-section">
                Jakarta, {{ \Carbon\Carbon::parse($transaction->transaction_date ?? now())->translatedFormat('d F Y') }}
            </div>

            <div class="subject-section">
                <div class="subject-label">Hal</div>
                <div class="subject-value">: Permohonan Biaya Proses & Admin BBN 1 Spd. Motor R3</div>
            </div>

            <div class="to-section">
                <p>Kepada,</p>
                <p>Yth. <strong>{{ $transaction->company_name ?: $transaction->customer_name }}</strong></p>
                <p>Di Tempat</p>
            </div>

            <div class="content-section">
                <p>Dengan Hormat,</p>
                <p>Dengan ini kami mengajukan permohonan biaya Proses dan Admin BBN1, STNK- BPKB sepeda motor R3 sebanyak 1 unit, Dengan perincian sebagai berikut:</p>
            </div>

            <table class="table-section">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>TYPE</th>
                        <th>WILAYAH</th>
                        <th>STCK</th>
                        <th>PENOPOLAN</th>
                        <th>REGIDENT</th>
                        <th>PROSES &<br>B.ADMIN</th>
                        <th>NOTICE</th>
                        <th>JUMLAH<br>UNIT</th>
                        <th>TOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td class="left-align">{{ $transaction->customer_name }}</td>
                        <td>{{ $transaction->vehicle_type ?? '-' }}</td>
                        <td>{{ $transaction->region->name ?? '-' }}</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>1</td>
                        <td class="right-align">RP. {{ number_format($transaction->selling_price, 0, ',', '.') }}</td>
                    </tr>
                    <tr class="total-row">
                        <td colspan="3" class="left-align" style="padding-left: 15px;">JUMLAH</td>
                        <td colspan="8" class="right-align">RP. {{ number_format($transaction->selling_price, 0, ',', '.') }},-</td>
                    </tr>
                    <tr class="terbilang-row">
                        <td colspan="3" class="left-align" style="padding-left: 15px;">TERBILANG</td>
                        <td colspan="8" class="right-align" style="text-align: center; text-transform: capitalize;">
                            {{ ucwords(terbilang($transaction->selling_price)) }} Rupiah
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="closing-section">
                <p>Demikian surat ini kami buat, atas perhatian dan kerja samanya di ucapkan terimakasih.</p>
            </div>

            <div class="signature-section">
                <div class="signature-box" style="text-align: left;">
                    <p style="margin: 0;">Hormat kami</p>
                    <div class="signature-name-left">Ambarwati Silivany SH</div>
                </div>
                <div class="signature-box">
                    <p style="margin: 0;">Menyetujui</p>
                    <div class="signature-name">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</div>
                </div>
            </div>

            <div class="payment-info">
                Pembayaran di lakukan secara<br>
                transfer / non tunai, hanya<br>
                pada rekening BCA<br>
                7610214384 An. AMBARWATI<br>
                SILIVANY SH. MSI
            </div>
        </div>
    </body>

    </html>