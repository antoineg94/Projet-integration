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
                'employeform_id' => 1,
                'secteur' => 5,
                'date_observ' => '2023-09-11',
                'heure_observ' => '08:00:00',
                'lieu' => 'Trois-Rivières'
            ],
            [
                'employeform_id' => 3,
                'secteur' => 2,
                'date_observ' => '2022-03-12',
                'heure_observ' => '08:00:00',
                'lieu' => 'Bécancour'
            ],
            [
                'employeform_id' => 12,
                'secteur' => 5,
                'date_observ' => '2023-05-11',
                'heure_observ' => '08:30:00',
                'lieu' => 'Québec'
            ],
            [
                'employeform_id' => 7,
                'secteur' => 5,
                'date_observ' => '2023-05-11',
                'heure_observ' => '08:30:00',
                'lieu' => 'Québec'
            ]
        ]);
    }
}
