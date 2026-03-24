<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;
use App\Models\Region;

class VehicleDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $region = Region::first();
        $regionId = $region ? $region->id : 1;

        $data = [
            [
                'no_bpkb' => 'AA 01897119',
                'frame_number' => 'MFDP1AG31SN0000020',
                'engine_number' => 'TBPALH13047863',
                'nopol' => 'B 9426 SWX',
                'customer_name' => 'PT. BAGASKORO MEGA LANGGENG',
                'region_id' => $regionId,
                'bpkb_received' => true,
            ],
            [
                'no_bpkb' => 'AA 01897120',
                'frame_number' => 'MFDP1AG31SN0000030',
                'engine_number' => 'TBPALH13047855',
                'nopol' => 'B 9425 SWX',
                'customer_name' => 'PT. BAGASKORO MEGA LANGGENG',
                'region_id' => $regionId,
                'bpkb_received' => true,
            ],
            [
                'no_bpkb' => 'AA 01897121',
                'frame_number' => 'MFDP1AG31SN0000008',
                'engine_number' => 'TBPALH13047884',
                'nopol' => 'B 9424 SWX',
                'customer_name' => 'PT. BAGASKORO MEGA LANGGENG',
                'region_id' => $regionId,
                'bpkb_received' => true,
            ],
            [
                'no_bpkb' => 'AA 01897123',
                'frame_number' => 'MFDP1AG31SN0000022',
                'engine_number' => 'TBPALH13047796',
                'nopol' => 'B 9422 SWX',
                'customer_name' => 'PT. BAGASKORO MEGA LANGGENG',
                'region_id' => $regionId,
                'bpkb_received' => true,
            ],
            [
                'no_bpkb' => 'AA 01897124',
                'frame_number' => 'MFDP1AG31NN0000029',
                'engine_number' => 'TBPALH13047856',
                'nopol' => 'B 9423 SWX',
                'customer_name' => 'PT. BAGASKORO MEGA LANGGENG',
                'region_id' => $regionId,
                'bpkb_received' => true,
            ],
            [
                'no_bpkb' => 'AA 01897125',
                'frame_number' => 'MGRVR20TATL401419',
                'engine_number' => 'YX200FMG26400936',
                'nopol' => 'B 6079 JZV',
                'customer_name' => 'PT. MULTI DIMENSI BARU',
                'region_id' => $regionId,
                'bpkb_received' => true,
            ],
            [
                'no_bpkb' => 'AA 01897151',
                'frame_number' => 'MGRVR30TATL830009',
                'engine_number' => 'YX300FMG25302164',
                'nopol' => 'B 6081 JZV',
                'customer_name' => 'PT. MULTI DIMENSI BARU',
                'region_id' => $regionId,
                'bpkb_received' => true,
            ],
            [
                'no_bpkb' => 'AA 01897152',
                'frame_number' => 'MGRVR20TATL300062',
                'engine_number' => 'YX200FMG25300362',
                'nopol' => 'B 6080 JZV',
                'customer_name' => 'NASIJAN',
                'region_id' => $regionId,
                'bpkb_received' => true,
            ],
        ];

        foreach ($data as $row) {
            Transaction::create($row);
        }
    }
}
