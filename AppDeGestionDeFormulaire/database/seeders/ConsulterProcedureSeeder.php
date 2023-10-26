<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsulterProcedureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('consulterprocedures')->insert([
            [
                'titre' => 'Nouvelle information!',
                'lien' => 'https://www.google.ca/',
                'departement_id' => '1'
            ],
            [
                'titre' => 'Nouvelle page facebook!',
                'lien' => 'https://fr-ca.facebook.com/',
                'departement_id' => '1'
            ],
            [
                'titre' => 'Nouvelle page instagram!',
                'lien' => 'https://www.instagram.com/',
                'departement_id' => '1'
            ],
            [
                'titre' => 'Nouvelle page twitter!',
                'lien' => 'https://twitter.com/i/flow/login?redirect_after_login=%2FTwitterCanada%2F/',
                'departement_id' => '1'
            ],
            [
                'titre' => 'Nouvelle importante!',
                'lien' => 'https://www.ecosia.org/images?q=image%20chat',
                'departement_id' => '1'
            ]
        ]);
    }
}
