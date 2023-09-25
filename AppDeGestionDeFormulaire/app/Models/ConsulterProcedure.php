<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulterprocedure extends Model
{
 

    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'departement_id',
        'lien',
    ];
}
