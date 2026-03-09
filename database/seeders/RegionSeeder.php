<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Region;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions = [
            ['name' => 'Jakarta', 'base_price' => 500000],
            ['name' => 'Bandung', 'base_price' => 450000],
            ['name' => 'Surabaya', 'base_price' => 480000],
            ['name' => 'Semarang', 'base_price' => 420000],
            ['name' => 'Medan', 'base_price' => 550000],
        ];

        foreach ($regions as $region) {
            Region::updateOrCreate(['name' => $region['name']], $region);
        }
    }
}
