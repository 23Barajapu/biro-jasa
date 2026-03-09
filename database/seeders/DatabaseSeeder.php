<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User Seed
        User::updateOrCreate(
            ['email' => 'admin@bjmahkota.com'],
            [
                'name' => 'Admin BJ Mahkota',
                'password' => bcrypt('admin123'),
                'role' => 'admin',
            ]
        );

        User::updateOrCreate(
            ['email' => 'owner@bjmahkota.com'],
            [
                'name' => 'Owner BJ Mahkota',
                'password' => bcrypt('owner123'),
                'role' => 'owner',
            ]
        );

        // Call other seeders
        $this->call([
            RegionSeeder::class,
            TransactionSeeder::class,
        ]);
    }
}
