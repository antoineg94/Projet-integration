<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employes')->insert([
            [
                'matricule' => 2726920160,
                'nom' => 'L\'Éponge',
                'prenom' => 'Bob',
                'position' => 'Directeur TP',
                'superviseur' => 'oui',
                'admin' => 'oui',
                'departement_id' => 14
            ]
        ]);    
        DB::table('employes')->insert([
            [
                'matricule' => 5518961243,
                'nom' => 'Jemison',
                'prenom' => 'Tatiana',
                'position' => 'Chef de service TP',
                'superieur_id' => 1,
                'superviseur' => 'oui',
                'departement_id' => 1
            ],
            [
                'matricule' => 1135565961,
                'nom' => 'Foucher',
                'prenom' => 'Birk',
                'position' => 'Chef d\'équipe',
                'superieur_id' => 2,
                'superviseur' => 'oui',
                'departement_id' => 8
            ]
        ]);

        DB::table('employes')->insert([
            [
                'matricule' => 7053880087,
                'nom' => 'Copnall',
                'prenom' => 'Aidan',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 14
            ],
            [
                'matricule' => 6752789673,
                'nom' => 'Baumler',
                'prenom' => 'Gladi',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 9
            ],
            [
                'matricule' => 6631096510,
                'nom' => 'Kennedy',
                'prenom' => 'Olenka',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 15
            ],
            [
                'matricule' => 1653034661,
                'nom' => 'Haylor',
                'prenom' => 'Dorri',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 14
            ],
            [
                'matricule' => 1491398914,
                'nom' => 'Fazackerley',
                'prenom' => 'Marsha',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 9
            ],
            [
                'matricule' => 0642710317,
                'nom' => 'Crossgrove',
                'prenom' => 'Teirtza',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 16
            ],
            [
                'matricule' => 2344098453,
                'nom' => 'Loddon',
                'prenom' => 'Jerrold',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 4
            ],
            [   
                'matricule' => 1610313720,
                'nom' => 'Pasticznyk',
                'prenom' => 'Nikoletta',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 9
            ],
            [
                'matricule' => 4310184685,
                'nom' => 'Goodwins',
                'prenom' => 'Flory',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 3
            ],
            [
                'matricule' => 1915895626,
                'nom' => 'Wahncke',
                'prenom' => 'Ealasaid',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 13
            ],
            [
                'matricule' => 9080108758,
                'nom' => 'Melanaphy',
                'prenom' => 'Park',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 2
            ],
            [
                'matricule' => 9470086163,
                'nom' => 'Vere',
                'prenom' => 'Hershel',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 14
            ],
            [
                'matricule' => 7547893260,
                'nom' => 'Gheeorghie',
                'prenom' => 'Duff',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 16
            ],
            [
                'matricule' => 9549907023,
                'nom' => 'Berends',
                'prenom' => 'Timothy',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 11
            ],
            [
                'matricule' => 2531628886,
                'nom' => 'Sawood',
                'prenom' => 'Emmit',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 10
            ],
            [
                'matricule' => 1604346914,
                'nom' => 'Wardel',
                'prenom' => 'Ada',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 4
            ],
            [
                'matricule' => 4623536521,
                'nom' => 'Beare',
                'prenom' => 'Patton',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 7
            ],
            [
                'matricule' => 3461827053,
                'nom' => 'Scrivenor',
                'prenom' => 'Benito',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 2
            ],
            [
                'matricule' => 6981337495,
                'nom' => 'Skudder',
                'prenom' => 'Charissa',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 3
            ],
            [
                'matricule' => 4849641504,
                'nom' => 'Zamboniari',
                'prenom' => 'Guillermo',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 15
            ],
            [
                'matricule' => 3405197953,
                'nom' => 'Kardos-Stowe',
                'prenom' => 'Northrop',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 4
            ],
            [
                'matricule' => 6444303133,
                'nom' => 'Tarquini',
                'prenom' => 'Kristoffer',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 15
            ],
            [
                'matricule' => 4895352617,
                'nom' => 'Bannon',
                'prenom' => 'Estelle',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 3
            ],
            [
                'matricule' => 5592102844,
                'nom' => 'Senner',
                'prenom' => 'Ginger',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 1
            ],
            [
                'matricule' => 9106652867,
                'nom' => 'McIlvoray',
                'prenom' => 'Norbie',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 9
            ],
            [
                'matricule' => 1270619926,
                'nom' => 'Hansana',
                'prenom' => 'Heddi',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 15
            ],
            [
                'matricule' => 6865135490,
                'nom' => 'Epps',
                'prenom' => 'Ardelia',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 9
            ]
        ]);
    }
}
