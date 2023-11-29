<?php

namespace Database\Seeders;

use App\Models\AgentDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgentDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 3; $i++) { 
            AgentDetail::create([
                'user_id' => $i,
                'ktp_media_id' => $i,
                'ktp' => "367202111198000{$i}",
                'agent_code' => "00{$i}",
            ]);
        }
    }
}
