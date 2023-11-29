<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 3; $i++) { 
            if ($i = 1) {
                Client::create([
                    'user_id' => $i,
                    'client_code' => "00{$i}",
                    'company_name' => "company {$i}",
                    'company_address' => "company {$i} address",
                    'company_type' => "coffee shop",
                    'pic_name' => 'Agus',
                    'pic_telp' => "08221781002{$i}",
                    'pic_email' => 'agus@gmail.com'
                ]);
            }

            if ($i = 2) {
                Client::create([
                    'user_id' => $i,
                    'client_code' => "00{$i}",
                    'company_name' => "company {$i}",
                    'company_address' => "company {$i} address",
                    'company_type' => "restoran",
                    'pic_name' => 'Salim',
                    'pic_telp' => "08221781002{$i}",
                    'pic_email' => 'salim@gmail.com'
                ]);
            }

            if ($i = 3) {
                Client::create([
                    'user_id' => $i,
                    'client_code' => "00{$i}",
                    'company_name' => "company {$i}",
                    'company_address' => "company {$i} address",
                    'company_type' => "game hub",
                    'pic_name' => 'Roker',
                    'pic_telp' => "08221781002{$i}",
                    'pic_email' => 'roker@gmail.com'
                ]);
            }
        }
    }
}
