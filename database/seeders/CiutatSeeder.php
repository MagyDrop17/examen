<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ciutat;

class CiutatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $ciutats = [

            array('nom' => 'Mataro', 'n_habitants' => '12500'),
            array('nom' => 'Montgat', 'n_habitants' => '11000'),
            
        ];

        foreach ($ciutats as $ciutat) {
            Ciutat::create($ciutat);
        }

    }
}
