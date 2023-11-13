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
                'date' => '2022-09-11',
                'heure' => '08:00:00',
                'departement' => 'info',
                'permis_conduire' => 'A758472649475',
                'vehicule_citoyen' => 'non'
            ],
            [
                'employeform_id' => 8,
                'no_unite' => 2,
                'date' => '2022-09-11',
                'heure' => '08:00:00',
                'departement' => 'info',
                'permis_conduire' => 'D957384657182',
                'vehicule_citoyen' => 'oui'
            ]
        ]);
    }
}
