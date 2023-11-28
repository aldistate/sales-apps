<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 3; $i++) { 
            if ($i = 1) {
                Service::create([
                    'category_id' => $i,
                    'name' => 'Web POS',
                    'price' => "2400000",
                    'purchase_scheme' => $i,
                    'services_status' => true,
                ]);
            }

            if ($i = 2) {
                Service::create([
                    'category_id' => $i,
                    'name' => 'Mobile POS',
                    'price' => "4400000",
                    'purchase_scheme' => $i,
                    'services_status' => true,
                ]);
            }
            
            if ($i = 3) {
                Service::create([
                    'category_id' => $i,
                    'name' => 'Tablet',
                    'price' => "1400000",
                    'purchase_scheme' => $i,
                    'services_status' => false,
                ]);
            }
        }
    }
}
