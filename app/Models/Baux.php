<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baux extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre_contract',
        'numero_contract',
        'partie_prenante',
        'partie_adverse',
        'date_debut',
        'date_fin',
        'articles',
        'statut',
        'commentaire',
    ];
    
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
