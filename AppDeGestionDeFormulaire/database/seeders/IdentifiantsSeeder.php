<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdentifiantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('identifiants')->insert([
            [
                'employe_id' => 1,
                'password' => '123'
            ],
            [
                'employe_id' => 2,
                'password' => '123'            
            ],
            [
                'employe_id' => 3,
                'password' => '123'            
            ],
            [
                'employe_id' => 4,
                'password' => '123'            
            ]
        ]);
    }
}
