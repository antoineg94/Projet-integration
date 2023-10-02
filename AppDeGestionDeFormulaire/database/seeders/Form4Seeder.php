<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Form4Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('form4s')->insert([
            [
                'employeform_id' => 4,
                'no_unite' => 2,
                'departement' => 'info',
                'nom_complet_employe' => 'Philippe Maurissette',
                'nom_complet_superieur' => 'Michel Cartier',
                'vehicule_citoyen' => 'non'
            ],
            [
                'employeform_id' => 8,
                'no_unite' => 2,
                'departement' => 'info',
                'nom_complet_employe' => 'Philippe Maurissette',
                'nom_complet_superieur' => 'Michel Cartier',
                'vehicule_citoyen' => 'oui'
            ]
        ]);
    }
}
