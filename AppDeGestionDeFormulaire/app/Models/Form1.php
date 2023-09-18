<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form1 extends Model
{
    use HasFactory;

    protected $fillable = [
        'employeform_id',          
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
        'type_absence'
    ];
}
