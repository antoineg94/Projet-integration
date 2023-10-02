<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form2 extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'employeform_id',
        'fonction_avant',        
        'secteur',
        'date_observ',
        'heure_observ',
        'lieu',
        'description',
        'proposition'
    ];
}
