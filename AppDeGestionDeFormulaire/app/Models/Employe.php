<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'matricule',
        'nom',
        'prenom', 
        'position',
        'superieur_id',
        'superviseur',
        'admin', 
        'departement_id'
    ];
}
