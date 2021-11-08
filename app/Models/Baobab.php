<?php

namespace App\Models;
use Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Baobab extends Model
{
    

    
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
