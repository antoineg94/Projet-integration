<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Form1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('form1s')->insert([
            [
                'employeform_id' => 1,
                'fonction_avant' => 'Opérateur',
                'date_incident' => '2022-09-11',
                'heure_incident' => '08:00:00',
                'lieu' => 'Québec',
                'secteur' => 3,
                'premiers_soins' => 'non',
                'nature_blessure' => 'bras gauche',
                'description_blessure' => 'Brûlure',
                'description_tache' => 'Mettre mon bras dans le feu',
                'type_violence' => 'Physique',
                'type_absence' => 'avec consultation'
            ],
            [
                'employeform_id' => 5,
                'fonction_avant' => 'Opérateur',
                'date_incident' => '2021-03-12',
                'heure_incident' => '08:00:00',
                'lieu' => 'Québec',
                'secteur' => 3,
                'premiers_soins' => 'non',
                'nature_blessure' => 'jambe droite',
                'description_blessure' => 'Brûlure',
                'description_tache' => 'Mettre ma jambe dans le feu',
                'type_violence' => 'Physique',
                'type_absence' => 'avec consultation'
            ],
            [
                'employeform_id' => 9,
                'fonction_avant' => 'Opérateur',
                'date_incident' => '2022-09-11',
                'heure_incident' => '08:00:00',
                'lieu' => 'Québec',
                'secteur' => 3,
                'premiers_soins' => 'non',
                'nature_blessure' => 'bras gauche',
                'description_blessure' => 'Brûlure',
                'description_tache' => 'Mettre mon bras dans le feu',
                'type_violence' => 'Physique',
                'type_absence' => 'avec consultation'
            ],
            [
                'employeform_id' => 11,
                'fonction_avant' => 'Opérateur',
                'date_incident' => '2021-03-12',
                'heure_incident' => '08:00:00',
                'lieu' => 'Québec',
                'secteur' => 3,
                'premiers_soins' => 'non',
                'nature_blessure' => 'jambe droite',
                'description_blessure' => 'Brûlure',
                'description_tache' => 'Mettre ma jambe dans le feu',
                'type_violence' => 'Physique',
                'type_absence' => 'avec consultation'
            ],
            [
                'employeform_id' => 13,
                'fonction_avant' => 'Opérateur',
                'date_incident' => '2022-09-11',
                'heure_incident' => '08:00:00',
                'lieu' => 'Québec',
                'secteur' => 3,
                'premiers_soins' => 'non',
                'nature_blessure' => 'bras gauche',
                'description_blessure' => 'Brûlure',
                'description_tache' => 'Mettre mon bras dans le feu',
                'type_violence' => 'Physique',
                'type_absence' => 'avec consultation'
            ],
            [
                'employeform_id' => 15,
                'fonction_avant' => 'Opérateur',
                'date_incident' => '2021-03-12',
                'heure_incident' => '08:00:00',
                'lieu' => 'Québec',
                'secteur' => 3,
                'premiers_soins' => 'non',
                'nature_blessure' => 'jambe droite',
                'description_blessure' => 'Brûlure',
                'description_tache' => 'Mettre ma jambe dans le feu',
                'type_violence' => 'Physique',
                'type_absence' => 'avec consultation'
            ],
            [
                'employeform_id' => 16,
                'fonction_avant' => 'Opérateur',
                'date_incident' => '2023-05-11',
                'heure_incident' => '08:30:00',
                'lieu' => 'Québec',
                'secteur' => 3,
                'premiers_soins' => 'non',
                'nature_blessure' => 'visage',
                'description_blessure' => 'Brûlure',
                'description_tache' => 'Mettre ma face dans le feu',
                'type_violence' => 'Physique',
                'type_absence' => 'avec consultation'
            ]
        ]);
    }
}
