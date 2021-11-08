<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parties extends Model
{
    use HasFactory;


    protected $fillable = [
        'raison_social',
        'rccm',
        'ifu',
        'capital',
        'siege',
        'contact',
        'domaine_activite',
        'email',
        'responsable',
        'contact_responsable'
    ];

   



}
