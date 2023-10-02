<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Form2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('form2s')->insert([
            [
                'employeform_id' => 2,
                'fonction_avant' => 'Opérateur',
                'secteur' => 5,
                'date_observ' => '2023-09-11',
                'heure_observ' => '08:00:00',
                'lieu' => 'Trois-Rivières',
                'description' => 'Chalala',
                'proposition' => 'Aucune'
            ],
            [
                'employeform_id' => 6,
                'fonction_avant' => 'Opérateur',
                'secteur' => 2,
                'date_observ' => '2022-03-12',
                'heure_observ' => '08:00:00',
                'lieu' => 'Bécancour',
                'description' => 'Chalala',
                'proposition' => 'Aucune'
            ],
            [
                'employeform_id' => 10,
                'fonction_avant' => 'Opérateur',
                'secteur' => 5,
                'date_observ' => '2023-05-11',
                'heure_observ' => '08:30:00',
                'lieu' => 'Québec',
                'description' => 'Chalala',
                'proposition' => 'Aucune'
            ],
            [
                'employeform_id' => 12,
                'fonction_avant' => 'Opérateur',
                'secteur' => 5,
                'date_observ' => '2023-05-11',
                'heure_observ' => '08:30:00',
                'lieu' => 'Québec',
                'description' => 'Chalala',
                'proposition' => 'Aucune'
            ],
            [
                'employeform_id' => 14,
                'fonction_avant' => 'Opérateur',
                'secteur' => 5,
                'date_observ' => '2023-05-11',
                'heure_observ' => '08:30:00',
                'lieu' => 'Québec',
                'description' => 'Chalala',
                'proposition' => 'Aucune'
            ]
        ]);
    }
}
