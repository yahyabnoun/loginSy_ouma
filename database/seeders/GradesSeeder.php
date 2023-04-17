<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('grade')->insert([
            'id' => 1,
            'nom' => 'ADMINISTRATEUR 1ER GRADE',
            'corps_id' => 1
        ]);
        DB::table('grade')->insert([
            'id' => 2,
            'nom' => 'ADMINISTRATEUR 2EME GRADE',
            'corps_id' => 1
        ]);
        DB::table('grade')->insert([
            'id' => 3,
            'nom' => 'ADMINISTRATEUR 3EME GRADE',
            'corps_id' => 1
        ]);
    }
}
