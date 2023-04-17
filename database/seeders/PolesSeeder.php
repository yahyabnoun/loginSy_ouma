<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('poles')->insert([[
            'id'=> 1,
            'nom' => 'Pôle Macroéconomie'
        ],
        [
            'id'=> 2,
            'nom' => 'Pôle des relations avec lAfrique et lEurope'
        ]
    ]);
    }
}
