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
            ],
            [
                'employe_id' => 5,
                'password' => Hash::make('123')
            ],
            [
                'employe_id' => 6,
                'password' => Hash::make('123')
            ],
            [
                'employe_id' => 7,
                'password' => Hash::make('123')
            ],
            [
                'employe_id' => 8,
                'password' => Hash::make('123')
            ],
            [
                'employe_id' => 9,
                'password' => Hash::make('123')
            ],
            [
                'employe_id' => 10,
                'password' => Hash::make('123')
            ],
            [
                'employe_id' => 11,
                'password' => Hash::make('123')
            ],
            [
                'employe_id' => 12,
                'password' => Hash::make('123')
            ],
            [
                'employe_id' => 13,
                'password' => Hash::make('123')
            ],
            [
                'employe_id' => 14,
                'password' => Hash::make('123')
            ],
            [
                'employe_id' => 15,
                'password' => Hash::make('123')
            ],
            [
                'employe_id' => 16,
                'password' => Hash::make('123')
            ],
            [
                'employe_id' => 17,
                'password' => Hash::make('123')
            ],
            [
                'employe_id' => 18,
                'password' => Hash::make('123')
            ],
            [
                'employe_id' => 19,
                'password' => Hash::make('123')
            ],
            [
                'employe_id' => 20,
                'password' => Hash::make('123')
            ],
            [
                'employe_id' => 21,
                'password' => Hash::make('123')
            ],
            [
                'employe_id' => 22,
                'password' => Hash::make('123')
            ],
            [
                'employe_id' => 23,
                'password' => Hash::make('123')
            ],
            [
                'employe_id' => 24,
                'password' => Hash::make('123')
            ],
            [
                'employe_id' => 25,
                'password' => Hash::make('123')
            ],
            [
                'employe_id' => 26,
                'password' => Hash::make('123')
            ],
            [
                'employe_id' => 27,
                'password' => Hash::make('123')
            ],
            [
                'employe_id' => 28,
                'password' => Hash::make('123')
            ],
            [
                'employe_id' => 29,
                'password' => Hash::make('123')
            ],
            [
                'employe_id' => 30,
                'password' => Hash::make('123')
            ]
        ]);
    }
}
