<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Form3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('form3s')->insert([
            [
                'employeform_id' => 3,
                'lieu' => 'Trois-Rivières',
                'epi' => 'conforme',
                'tenue' => 'conforme',
                'comportement' => 'conforme',
                'signalisation' => 'conforme',
                'fiche_signal' => 'conforme',
                'travaux' => 'conforme',
                'espace_clos' => 'conforme',
                'methode_travail' => 'conforme',
                'autre' => 'conforme',
                'respect_distance' => 'conforme',
                'port_epi' => 'conforme',
                'respect_proced' => 'conforme',
                'description' => 'Comme un pro!'
            ],
            [
                'employeform_id' => 7,
                'lieu' => 'Trois-Rivières',
                'epi' => 'non-conforme',
                'tenue' => 'conforme',
                'comportement' => 'conforme',
                'signalisation' => 'non-conforme',
                'fiche_signal' => 'non-conforme',
                'travaux' => 'conforme',
                'espace_clos' => 'non-conforme',
                'methode_travail' => 'non-conforme',
                'autre' => 'conforme',
                'respect_distance' => 'conforme',
                'port_epi' => 'conforme',
                'respect_proced' => 'non-conforme',
                'description' => 'Ichhhh pas très fort'
            ]
        ]);
    }
}
