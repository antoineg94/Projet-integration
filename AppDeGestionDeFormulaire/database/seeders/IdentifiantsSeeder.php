<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
                'password' => Hash::make('123')
            ],
            [
                'employe_id' => 2,
                'password' => Hash::make('123')
            ],
            [
                'employe_id' => 3,
                'password' => Hash::make('123')
            ],
            [
                'employe_id' => 4,
                'password' => Hash::make('123')
            ]
        ]);
    }
}
