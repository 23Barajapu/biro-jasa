<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;
use App\Models\Region;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jakarta = Region::where('name', 'Jakarta')->first();
        $bandung = Region::where('name', 'Bandung')->first();

        if (!$jakarta || !$bandung) {
            return;
        }

        $transactions = [
            [
                'customer_name' => 'Budi Santoso',
                'nopol' => 'B 1234 ABC',
                'vehicle_type' => 'Honda Vario 160',
                'year' => 2023,
                'frame_number' => 'MH1KC1234567890',
                'engine_number' => 'KC12E1234567',
                'stnk_received' => true,
                'plat_received' => true,
                'transaction_date' => now()->subDays(5)->format('Y-m-d'),
                'capital_cost' => 25000000,
                'selling_price' => 27500000,
                'profit' => 2500000,
                'region_id' => $jakarta->id,
                'bpkb_received' => false,
                'status' => 'processing',
            ],
            [
                'customer_name' => 'Siti Aminah',
                'nopol' => 'D 5678 DEF',
                'vehicle_type' => 'Yamaha NMAX',
                'year' => 2024,
                'frame_number' => 'MH3SG1234567890',
                'engine_number' => 'SG12E1234567',
                'stnk_received' => true,
                'plat_received' => false,
                'transaction_date' => now()->subDays(2)->format('Y-m-d'),
                'capital_cost' => 32000000,
                'selling_price' => 34500000,
                'profit' => 2500000,
                'region_id' => $bandung->id,
                'bpkb_received' => false,
                'status' => 'pending',
            ],
            [
                'customer_name' => 'Agus Setiawan',
                'nopol' => 'B 9999 XYZ',
                'vehicle_type' => 'Honda Beat',
                'year' => 2022,
                'frame_number' => 'MH1JM1234567890',
                'engine_number' => 'JM12E1234567',
                'stnk_received' => true,
                'plat_received' => true,
                'transaction_date' => now()->subDays(10)->format('Y-m-d'),
                'capital_cost' => 15000000,
                'selling_price' => 16500000,
                'profit' => 1500000,
                'region_id' => $jakarta->id,
                'bpkb_received' => true,
                'bpkb_date' => now()->subDays(1)->format('Y-m-d'),
                'status' => 'completed',
            ],
        ];

        foreach ($transactions as $transaction) {
            Transaction::create($transaction);
        }
    }
}
