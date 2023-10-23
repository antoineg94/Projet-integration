<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employe;
use App\Models\Formulaire;
use App\Models\Form1;
use App\Models\Form2;
use App\Models\Form3;
use App\Models\Form4;

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
        'date_formulaire',
        'superieur_id'
    ];

    public function employes(){
        return $this->belongsToMany('App\Models\Employe');
    }

    public function formulaires(){
        return $this->belongsToMany('App\Models\Formulaire');
    }

    public function form1s(){
        return $this->belongsToMany('App\Models\Form1');
    }

    public function form2s(){
        return $this->belongsToMany('App\Models\Form2');
    }

    public function form3s(){
        return $this->belongsToMany('App\Models\Form3');
    }

    public function form4s(){
        return $this->belongsToMany('App\Models\Form4');
    }
}
