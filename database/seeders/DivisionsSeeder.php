<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DivisionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('divisions')->insert([[
            'id'=> 1,
            'nom' => 'Division des Finances Publiques',
            'pole_id' => 1,

        ],
        [
            'id'=> 2,
            'nom' => 'Division de l analyse monétaire et de la veille stratégique',
            'pole_id' => 1,

        ],
        [
            'id'=> 3,
            'nom' => 'Division des Relations avec l Europe',
            'pole_id' => 2,

        ],
        [
            'id'=> 4 ,
            'nom' => 'Division des relations avec l Afrique',
            'pole_id' => 2,

        ],
        
    ]);
    }
}
