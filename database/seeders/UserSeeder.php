<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 3 ; $i++) { 
            User::create([
                'name' => 'Name ' . $i,
                'email' => "name.{$i}@gmail.com",
                'password' => bcrypt('password'),
                'phone' => "08221671002{$i}",
                'role' => $i,
            ]);
        }
    }
}
