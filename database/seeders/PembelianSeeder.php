<?php

namespace Database\Seeders;

use App\Models\Pembelian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pembelian::create([
            'totalHarga' => 250,
            'users_id' => $user->id,
            'designs_id' => 1
        ]);

        Pembelian::create([
            'totalHarga' => 100,
            'users_id' => 2,
            'designs_id' => 2
        ]);
    }
}