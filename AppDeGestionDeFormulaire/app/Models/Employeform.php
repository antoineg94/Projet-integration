<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employeform extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'employe_id',
        'formulaire_id',
        'consulte',
        'consultant',
        'date_consulte',
        'statut',
    ];
}
