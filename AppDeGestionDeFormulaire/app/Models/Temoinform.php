<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temoinform extends Model
{
    use HasFactory;

    protected $fillable = [
        'temoin_id',
        'form1_id',
        'form2_id'
    ];
}
