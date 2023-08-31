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
                'nom' => 'Chooter',
                'prenom' => 'Willis',
                'departement_id' => 14
            ],
            [
                'matricule' => 5518961243,
                'nom' => 'Jemison',
                'prenom' => 'Tatiana',
                'departement_id' => 1
            ],
            [
                'matricule' => 1135565961,
                'nom' => 'Foucher',
                'prenom' => 'Birk',
                'departement_id' => 8
            ],
            [
                'matricule' => 7053880087,
                'nom' => 'Copnall',
                'prenom' => 'Aidan',
                'departement_id' => 14
            ],
            [
                'matricule' => 6752789673,
                'nom' => 'Baumler',
                'prenom' => 'Gladi',
                'departement_id' => 9
            ],
            [
                'matricule' => 6631096510,
                'nom' => 'Kennedy',
                'prenom' => 'Olenka',
                'departement_id' => 15
            ],
            [
                'matricule' => 1653034661,
                'nom' => 'Haylor',
                'prenom' => 'Dorri',
                'departement_id' => 14
            ],
            [
                'matricule' => 1491398914,
                'nom' => 'Fazackerley',
                'prenom' => 'Marsha',
                'departement_id' => 9
            ],
            [
                'matricule' => 0642710317,
                'nom' => 'Crossgrove',
                'prenom' => 'Teirtza',
                'departement_id' => 16
            ],
            [
                'matricule' => 2344098453,
                'nom' => 'Loddon',
                'prenom' => 'Jerrold',
                'departement_id' => 4
            ],
            [   
                'matricule' => 1610313720,
                'nom' => 'Pasticznyk',
                'prenom' => 'Nikoletta',
                'departement_id' => 9
            ],
            [
                'matricule' => 4310184685,
                'nom' => 'Goodwins',
                'prenom' => 'Flory',
                'departement_id' => 3
            ],
            [
                'matricule' => 1915895626,
                'nom' => 'Wahncke',
                'prenom' => 'Ealasaid',
                'departement_id' => 13
            ],
            [
                'matricule' => 9080108758,
                'nom' => 'Melanaphy',
                'prenom' => 'Park',
                'departement_id' => 2
            ],
            [
                'matricule' => 9470086163,
                'nom' => 'Vere',
                'prenom' => 'Hershel',
                'departement_id' => 14
            ],
            [
                'matricule' => 7547893260,
                'nom' => 'Gheeorghie',
                'prenom' => 'Duff',
                'departement_id' => 16
            ],
            [
                'matricule' => 9549907023,
                'nom' => 'Berends',
                'prenom' => 'Timothy',
                'departement_id' => 11
            ],
            [
                'matricule' => 2531628886,
                'nom' => 'Sawood',
                'prenom' => 'Emmit',
                'departement_id' => 10
            ],
            [
                'matricule' => 1604346914,
                'nom' => 'Wardel',
                'prenom' => 'Ada',
                'departement_id' => 4
            ],
            [
                'matricule' => 4623536521,
                'nom' => 'Beare',
                'prenom' => 'Patton',
                'departement_id' => 7
            ],
            [
                'matricule' => 3461827053,
                'nom' => 'Scrivenor',
                'prenom' => 'Benito',
                'departement_id' => 2
            ],
            [
                'matricule' => 6981337495,
                'nom' => 'Skudder',
                'prenom' => 'Charissa',
                'departement_id' => 3
            ],
            [
                'matricule' => 4849641504,
                'nom' => 'Zamboniari',
                'prenom' => 'Guillermo',
                'departement_id' => 15
            ],
            [
                'matricule' => 3405197953,
                'nom' => 'Kardos-Stowe',
                'prenom' => 'Northrop',
                'departement_id' => 4
            ],
            [
                'matricule' => 6444303133,
                'nom' => 'Tarquini',
                'prenom' => 'Kristoffer',
                'departement_id' => 15
            ],
            [
                'matricule' => 4895352617,
                'nom' => 'Bannon',
                'prenom' => 'Estelle',
                'departement_id' => 3
            ],
            [
                'matricule' => 5592102844,
                'nom' => 'Senner',
                'prenom' => 'Ginger',
                'departement_id' => 1
            ],
            [
                'matricule' => 9106652867,
                'nom' => 'McIlvoray',
                'prenom' => 'Norbie',
                'departement_id' => 9
            ],
            [
                'matricule' => 1270619926,
                'nom' => 'Hansana',
                'prenom' => 'Heddi',
                'departement_id' => 15
            ],
            [
                'matricule' => 6865135490,
                'nom' => 'Epps',
                'prenom' => 'Ardelia',
                'departement_id' => 9
            ]
        ]);
    }
}
