<?php

namespace Database\Seeders;

use App\Models\Design;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DesignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Design::create([
            'gambar' => 'gambar1.jpg',
            'name' => 'Design 1',
            'detail' => 'Detail design 1',
            'harga' => 100
        ]);

        Design::create([
            'gambar' => 'gambar2.jpg',
            'name' => 'Design 2',
            'detail' => 'Detail design 2',
            'harga' => 150
        ]);
    }
}