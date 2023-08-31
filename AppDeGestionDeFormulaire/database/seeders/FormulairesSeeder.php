<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormulairesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('formulaires')->insert([
            [
                'nom' => 'Formulaire déclaration d\'accident de travail'
            ],
            [
                'nom' => 'Signalement d\'une situation dangereuse, d\'un acte de violence ou d\'un «passé proche»'
            ],
            [
                'nom' => 'Grille audit SST - formulaire simplifié'
            ],
            [
                'nom' => 'Atelier mécanique - Rapport d\'accident (véhicule)'
            ]
        ]);
    }
}
