<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Form1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('form1')->insert([
            [
                'employeform_id' => 2,
                'date_incident' => '2022-09-11',
                'heure_incident' => '08:00:00',
                'blessure' => 'bras gauche',
                'date_formulaire' => '2022-09-18'
            ],
            [
                'employeform_id' => 4,
                'date_incident' => '2021-03-12',
                'heure_incident' => '08:00:00',
                'blessure' => 'jambe droite',
                'date_formulaire' => '2021-03-15'
            ],
            [
                'employeform_id' => 6,
                'date_incident' => '2023-05-11',
                'heure_incident' => '08:30:00',
                'blessure' => 'visage',
                'date_formulaire' => '2023-05-12'
            ]
        ]);
    }
}
