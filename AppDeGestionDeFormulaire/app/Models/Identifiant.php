<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identifiant extends Authenticatable
{
    use  HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'employe_id',
        'password'
    ];
}
