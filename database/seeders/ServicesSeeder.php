<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([[
            'id'=> 1,
            'nom' => 'Service des Prévisions de la Trésorerie Publique',
            'division_id' => 1,
        ],
        [
            'id'=> 2,
            'nom' => 'Service des Statistiques des Finances Publiques',
            'division_id' => 1,
        ],
        [
            'id'=> 3,
            'nom' => 'Service de l analyse monétaire',
            'division_id' => 2,
        ],
        [
            'id'=> 4,
            'nom' => 'Service du suivi et de l analyse des évaluations économique international',
            'division_id' => 2,
        ],
        [
            'id'=> 5,
            'nom' => 'Service de la conjoncture et de la veille stratégique',
            'division_id' => 2,
        ]
    ]);
    }
}
