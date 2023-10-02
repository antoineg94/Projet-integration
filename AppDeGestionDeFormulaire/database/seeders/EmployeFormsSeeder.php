<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeFormsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employeforms')->insert([
            [
                'employe_id' => 2,
                'formulaire_id' => 1,
                'date_formulaire' => '2023-04-11' 
            ],
            [
                'employe_id' => 2,
                'formulaire_id' => 2,
                'date_formulaire' => '2023-06-02'             
            ],
            [
                'employe_id' => 2,
                'formulaire_id' => 3,
                'date_formulaire' => '2022-01-12'             
            ],
            [
                'employe_id' => 2,
                'formulaire_id' => 4,
                'date_formulaire' => '2021-05-12'             
            ],
            [
                'employe_id' => 3,
                'formulaire_id' => 1,
                'date_formulaire' => '2022-05-07'             
            ],
            [
                'employe_id' => 3,
                'formulaire_id' => 2,
                'date_formulaire' => '2021-02-09'             
            ],
            [
                'employe_id' => 3,
                'formulaire_id' => 3,
                'date_formulaire' => '2023-05-12'            
            ],
            [
                'employe_id' => 3,
                'formulaire_id' => 4,
                'date_formulaire' => '2023-05-18'             
            ],
            [
                'employe_id' => 6,
                'formulaire_id' => 1,
                'date_formulaire' => '2023-05-11'            
            ],
            [
                'employe_id' => 29,
                'formulaire_id' => 2,
                'date_formulaire' => '2023-12-11'             
            ],
            [
                'employe_id' => 8,
                'formulaire_id' => 1,
                'date_formulaire' => '2023-11-12'             
            ],
            [
                'employe_id' => 12,
                'formulaire_id' => 2,
                'date_formulaire' => '2023-12-22'            
            ],
            [
                'employe_id' => 16,
                'formulaire_id' => 3,
                'date_formulaire' => '2023-11-12'             
            ],
            [
                'employe_id' => 18,
                'formulaire_id' => 4,
                'date_formulaire' => '2023-12-22'            
            ],
            [
                'employe_id' => 9,
                'formulaire_id' => 3,
                'date_formulaire' => '2023-11-12'             
            ],
            [
                'employe_id' => 19,
                'formulaire_id' => 4,
                'date_formulaire' => '2023-12-22'            
            ]
        ]);
    }
}
