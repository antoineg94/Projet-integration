<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employeform extends Model
{
    use HasFactory;

    protected $fillable = [
        'employe_id',
        'formulaire_id',
        'consulte',
        'consultant',
        'date_consulte',
        'statut',
        'date_formulaire'
    ];
}
