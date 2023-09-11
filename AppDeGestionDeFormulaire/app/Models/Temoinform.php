<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temoinform extends Model
{
    use HasFactory;

    protected $fillable = [
        'employe_id',
        'formulaire_id',
        'temoin_id'
    ];
}
