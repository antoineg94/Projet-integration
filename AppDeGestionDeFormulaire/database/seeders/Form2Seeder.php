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
        DB::table('form2')->insert([
            [
                'employeform_id' => 1,
                'secteur' => 5,
                'date_observ' => '2023-09-11',
                'heure_observ' => '08:00:00',
                'lieu' => 'Trois-Rivières',
                'date_formulaire' => '2023-09-18'
            ],
            [
                'employeform_id' => 3,
                'secteur' => 2,
                'date_observ' => '2022-03-12',
                'heure_observ' => '08:00:00',
                'lieu' => 'Bécancour',
                'date_formulaire' => '2022-03-15'
            ],
            [
                'employeform_id' => 12,
                'secteur' => 5,
                'date_observ' => '2023-05-11',
                'heure_observ' => '08:30:00',
                'lieu' => 'Québec',
                'date_formulaire' => '2023-05-12'
            ]
        ]);
    }
}
