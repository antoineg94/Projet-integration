<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        $this->call(DepartementsSeeder::class);
        $this->call(EmployesSeeder::class);
        $this->call(FormulairesSeeder::class);

        $this->call(EmployeFormsSeeder::class);

        $this->call(Form1Seeder::class);
        $this->call(Form2Seeder::class);
        $this->call(Form3Seeder::class);
        $this->call(Form4Seeder::class);

        $this->call(IdentifiantsSeeder::class);
        $this->call(ConsulterProcedureSeeder::class);

    }
}
