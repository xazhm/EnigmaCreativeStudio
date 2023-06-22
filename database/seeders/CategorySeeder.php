<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['id' => 1, 'name' => 'Logo Design'],
            ['id' => 2, 'name' => 'Animation'],
            ['id' => 3, 'name' => 'Vector Graphic'],
            ['id' => 4, 'name' => 'Texture Pack'],
        ];

        foreach ($data as $value) {
            Category::create($value);
        }
    }
}
