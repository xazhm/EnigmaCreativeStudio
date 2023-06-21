<?php

namespace Database\Seeders;

use App\Models\Design;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('designs')->insert([
            'gambar' => 'xxxxxxx',
            'name' => 'Design1',
            'detail' =>'awikwokslurrrr',
            'harga' => '10000',
            'category_id' => 1
        ]);
    }
}