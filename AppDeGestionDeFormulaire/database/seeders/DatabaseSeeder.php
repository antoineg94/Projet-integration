<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(DepartementsSeeder::class);
        $this->call(EmployesSeeder::class);
        $this->call(FormulairesSeeder::class);
        $this->call(EmployeFormSeeder::class);

    }
}
