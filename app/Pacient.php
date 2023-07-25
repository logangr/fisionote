<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pacient extends Model
{
    protected $fillable = [
        'dni',
        'nom',
        'llinatges',
        'tutor_legal',
        'dni_tutor_legal',
        'data_naixement',
        'adreca_1',
        'adreca_2',
        'telefon_1',
        'telefon_2',
        'email',
        'antecedents_pat',
        'historia',
    ];
}
