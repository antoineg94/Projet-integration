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
                'courriel' => 'patrice.anctil.01@edu.cegeptr.qc.ca',
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
                'courriel' => 'patrice.anctil.01@edu.cegeptr.qc.ca',
                'nom' => 'Jemison',
                'prenom' => 'Tatiana',
                'position' => 'Chef de service TP',
                'superieur_id' => 1,
                'superviseur' => 'oui',
                'departement_id' => 1
            ],
            [
                'matricule' => 1135565961,
                'courriel' => 'patrice.anctil.01@edu.cegeptr.qc.ca',
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
                'courriel' => 'patrice.anctil.01@edu.cegeptr.qc.ca',
                'nom' => 'Copnall',
                'prenom' => 'Aidan',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 14
            ],
            [
                'matricule' => 6752789673,
                'courriel' => 'patrice.anctil.01@edu.cegeptr.qc.ca',
                'nom' => 'Baumler',
                'prenom' => 'Gladi',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 9
            ],
            [
                'matricule' => 6631096510,
                'courriel' => 'patrice.anctil.01@edu.cegeptr.qc.ca',
                'nom' => 'Kennedy',
                'prenom' => 'Olenka',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 15
            ],
            [
                'matricule' => 1653034661,
                'courriel' => 'patrice.anctil.01@edu.cegeptr.qc.ca',
                'nom' => 'Haylor',
                'prenom' => 'Dorri',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 14
            ],
            [
                'matricule' => 1491398914,
                'courriel' => 'patrice.anctil.01@edu.cegeptr.qc.ca',
                'nom' => 'Fazackerley',
                'prenom' => 'Marsha',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 9
            ],
            [
                'matricule' => 0642710317,
                'courriel' => 'patrice.anctil.01@edu.cegeptr.qc.ca',
                'nom' => 'Crossgrove',
                'prenom' => 'Teirtza',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 16
            ],
            [
                'matricule' => 2344098453,
                'courriel' => 'patrice.anctil.01@edu.cegeptr.qc.ca',
                'nom' => 'Loddon',
                'prenom' => 'Jerrold',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 4
            ],
            [   
                'matricule' => 1610313720,
                'courriel' => 'patrice.anctil.01@edu.cegeptr.qc.ca',
                'nom' => 'Pasticznyk',
                'prenom' => 'Nikoletta',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 9
            ],
            [
                'matricule' => 4310184685,
                'courriel' => 'patrice.anctil.01@edu.cegeptr.qc.ca',
                'nom' => 'Goodwins',
                'prenom' => 'Flory',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 3
            ],
            [
                'matricule' => 1915895626,
                'courriel' => 'patrice.anctil.01@edu.cegeptr.qc.ca',
                'nom' => 'Wahncke',
                'prenom' => 'Ealasaid',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 13
            ],
            [
                'matricule' => 9080108758,
                'courriel' => 'patrice.anctil.01@edu.cegeptr.qc.ca',
                'nom' => 'Melanaphy',
                'prenom' => 'Park',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 2
            ],
            [
                'matricule' => 9470086163,
                'courriel' => 'patrice.anctil.01@edu.cegeptr.qc.ca',
                'nom' => 'Vere',
                'prenom' => 'Hershel',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 14
            ],
            [
                'matricule' => 7547893260,
                'courriel' => 'patrice.anctil.01@edu.cegeptr.qc.ca',
                'nom' => 'Gheeorghie',
                'prenom' => 'Duff',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 16
            ],
            [
                'matricule' => 9549907023,
                'courriel' => 'patrice.anctil.01@edu.cegeptr.qc.ca',
                'nom' => 'Berends',
                'prenom' => 'Timothy',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 11
            ],
            [
                'matricule' => 2531628886,
                'courriel' => 'patrice.anctil.01@edu.cegeptr.qc.ca',
                'nom' => 'Sawood',
                'prenom' => 'Emmit',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 10
            ],
            [
                'matricule' => 1604346914,
                'courriel' => 'patrice.anctil.01@edu.cegeptr.qc.ca',
                'nom' => 'Wardel',
                'prenom' => 'Ada',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 4
            ],
            [
                'matricule' => 4623536521,
                'courriel' => 'patrice.anctil.01@edu.cegeptr.qc.ca',
                'nom' => 'Beare',
                'prenom' => 'Patton',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 7
            ],
            [
                'matricule' => 3461827053,
                'courriel' => 'patrice.anctil.01@edu.cegeptr.qc.ca',
                'nom' => 'Scrivenor',
                'prenom' => 'Benito',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 2
            ],
            [
                'matricule' => 6981337495,
                'courriel' => 'patrice.anctil.01@edu.cegeptr.qc.ca',
                'nom' => 'Skudder',
                'prenom' => 'Charissa',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 3
            ],
            [
                'matricule' => 4849641504,
                'courriel' => 'patrice.anctil.01@edu.cegeptr.qc.ca',
                'nom' => 'Zamboniari',
                'prenom' => 'Guillermo',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 15
            ],
            [
                'matricule' => 3405197953,
                'courriel' => 'patrice.anctil.01@edu.cegeptr.qc.ca',
                'nom' => 'Kardos-Stowe',
                'prenom' => 'Northrop',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 4
            ],
            [
                'matricule' => 6444303133,
                'courriel' => 'patrice.anctil.01@edu.cegeptr.qc.ca',
                'nom' => 'Tarquini',
                'prenom' => 'Kristoffer',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 15
            ],
            [
                'matricule' => 4895352617,
                'courriel' => 'patrice.anctil.01@edu.cegeptr.qc.ca',
                'nom' => 'Bannon',
                'prenom' => 'Estelle',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 3
            ],
            [
                'matricule' => 5592102844,
                'courriel' => 'patrice.anctil.01@edu.cegeptr.qc.ca',
                'nom' => 'Senner',
                'prenom' => 'Ginger',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 1
            ],
            [
                'matricule' => 9106652867,
                'courriel' => 'patrice.anctil.01@edu.cegeptr.qc.ca',
                'nom' => 'McIlvoray',
                'prenom' => 'Norbie',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 9
            ],
            [
                'matricule' => 1270619926,
                'courriel' => 'patrice.anctil.01@edu.cegeptr.qc.ca',
                'nom' => 'Hansana',
                'prenom' => 'Heddi',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 15
            ],
            [
                'matricule' => 6865135490,
                'courriel' => 'patrice.anctil.01@edu.cegeptr.qc.ca',
                'nom' => 'Epps',
                'prenom' => 'Ardelia',
                'position' => 'Journalier TP',
                'superieur_id' => 3,
                'departement_id' => 9
            ]
        ]);
    }
}
