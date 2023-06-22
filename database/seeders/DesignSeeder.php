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
            'gambar' => 'konti3l.jpg',
            'name' => 'Design1',
            'detail' =>'awikwokslurrrr',
            'harga' => '10000',
            'category_id' => 1
        ]);

        DB::table('designs')->insert([
            'gambar' => 'kon45til.jpg',
            'name' => 'Design2',
            'detail' =>'awikwokslurrrr',
            'harga' => '10000',
            'category_id' => 2
        ]);

        DB::table('designs')->insert([
            'gambar' => 'konti4l.jpg',
            'name' => 'Design4',
            'detail' =>'awikwokslurrrr',
            'harga' => '10000',
            'category_id' => 3
        ]);
    }
}
