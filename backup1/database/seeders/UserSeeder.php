<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'Admin', 'email' => 'admin@gmail.com', 'password' => '12345678','no_telp' => '081387548756', 'slug' => 'admin', 'role_id' => 1],
            ['id' => 2, 'name' => 'Client', 'email' => 'client@gmail.com', 'password' => '12345678','no_telp' => '081209875314', 'slug' => 'client', 'role_id' => 2]
        ];

        foreach ($data as $value) {
            User::create($value);
        }
    }
}
