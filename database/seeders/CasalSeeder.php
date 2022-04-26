<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Casal;
use Carbon\Carbon;


class CasalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        $casals = [
            array('nom' => 'Casal Gegantí', 'data_inici' => Carbon::create('2022', '06', '12') , 'data_final' => Carbon::create('2022', '07', '23'), 'n_places' => 100 ,'id_ciutat' => 1),
            array('nom' => 'Les Titelles', 'data_inici' => Carbon::create('2022', '06', '01') , 'data_final' => Carbon::create('2022', '07', '30'), 'n_places' => 50 ,'id_ciutat' => 2),
        ];
    
        foreach ($casals as $casal) {
            Casal::create($casal);
        }
    

    }
}
