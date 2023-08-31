<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employeform')->insert([
            [
                'employe_id' => 2,
                'formulaire_id' => 4
            ],
            [
                'employe_id' => 19,
                'formulaire_id' => 1            
            ],
            [
                'employe_id' => 23,
                'formulaire_id' => 1            
            ],
            [
                'employe_id' => 11,
                'formulaire_id' => 3            
            ],
            [
                'employe_id' => 5,
                'formulaire_id' => 1            
            ],
            [
                'employe_id' => 8,
                'formulaire_id' => 1            
            ],
            [
                'employe_id' => 19,
                'formulaire_id' => 2            
            ],
            [
                'employe_id' => 2,
                'formulaire_id' => 3            
            ],
            [
                'employe_id' => 9,
                'formulaire_id' => 1            
            ],
            [
                'employe_id' => 29,
                'formulaire_id' => 3            
            ],
            [
                'employe_id' => 7,
                'formulaire_id' => 1            
            ],
            [
                'employe_id' => 18,
                'formulaire_id' => 3            
            ]
        ]);
    }
}
