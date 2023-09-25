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
                'description' => 'Dans le lien, vous trouverez des nouvelles informations concernant les procédures de la ville de Trois-Rivières.',
                'lien' => 'google.ca',
                'departement_id' => '1'
            ],
            [
                'titre' => 'Nouvelle page facebook!',
                'description' => 'Dans le lien, vous trouverez notre nouvelle page Facebook.',
                'lien' => 'https://fr-ca.facebook.com/',
                'departement_id' => '1'
            ],
            [
                'titre' => 'Nouvelle page instagram!',
                'description' => 'Dans le lien, vous trouverez notre nouvelle page instagram.',
                'lien' => 'https://www.instagram.com/',
                'departement_id' => '1'
            ],
            [
                'titre' => 'Nouvelle page twitter!',
                'description' => 'Dans le lien, vous trouverez notre nouvelle page twitter.',
                'lien' => 'https://twitter.com/i/flow/login?redirect_after_login=%2FTwitterCanada%2F/',
                'departement_id' => '1'
            ],
            [
                'titre' => 'Nouvelle importante!',
                'description' => 'Dans le lien, vous trouverez des informations importante.',
                'lien' => 'https://www.ecosia.org/images?q=image%20chat',
                'departement_id' => '1'
            ]
        ]);
    }
}
