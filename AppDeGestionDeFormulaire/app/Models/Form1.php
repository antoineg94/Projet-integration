<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form1 extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'employeform_id',
        'fonction_avant',          
        'date_incident',
        'heure_incident',
        'lieu',
        'secteur',
        'premiers_soins',
        'nom_secouriste',
        'nature_blessure',
        'description_blessure',
        'description_tache',
        'type_violence',
        'type_absence',
        'temoin'
    ];

}
