<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form4 extends Model
{
    use HasFactory;

    protected $fillable = [
        'employeform_id',
        'no_unite',
        'departement',
        'nom_complet_employe',
        'nom_complet_superieur',
        'vehicule_citoyen'
    ];
}
