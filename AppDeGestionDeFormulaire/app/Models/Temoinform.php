<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temoinform extends Model
{
    use HasFactory;

    protected $fillable = [
        'temoin_id',
        'employeform_id'
    ];
}
