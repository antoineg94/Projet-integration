<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Identifiant extends Authenticatable
{
    use  HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'employe_id',
        'password'
    ];
}
