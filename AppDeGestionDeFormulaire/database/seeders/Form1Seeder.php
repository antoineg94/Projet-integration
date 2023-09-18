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
        DB::table('form1s')->insert([
            [
                'employeform_id' => 2,
                'date_incident' => '2022-09-11',
                'heure_incident' => '08:00:00',
                'nature_blessure' => 'bras gauche'
            ],
            [
                'employeform_id' => 4,
                'date_incident' => '2021-03-12',
                'heure_incident' => '08:00:00',
                'nature_blessure' => 'jambe droite'
            ],
            [
                'employeform_id' => 6,
                'date_incident' => '2023-05-11',
                'heure_incident' => '08:30:00',
                'nature_blessure' => 'visage'
            ]
        ]);
    }
}
