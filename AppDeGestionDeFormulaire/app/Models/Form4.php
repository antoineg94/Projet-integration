<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form4 extends Model
{
    use HasFactory;

    protected $fillable = [
        'employeform_id',
        'date',
        'heure',
        'no_unite',
        'departement',
        'permis_conduire',
        'vehicule_citoyen'
    ];
}
