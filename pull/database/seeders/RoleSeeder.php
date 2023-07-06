<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['id' => 1, 'name' => 'Administrator'],
            ['id' => 2, 'name' => 'Client']
        ];

        foreach ($data as $value) {
            Role::create($value);
        }
    }
}
