<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form3 extends Model
{
    use HasFactory;

    protected $fillable = [
        'employeform_id',  
        'lieu',
        'epi',
        'tenue',
        'comportement',
        'signalisation',
        'fiche_signal',
        'travaux',
        'espace_clos',
        'methode_travail',
        'autre',
        'respect_distance',
        'port_epi',
        'respect_proced'
    ];
}
