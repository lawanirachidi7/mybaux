<?php

namespace App\Models;
use Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class baobab extends Model
{
    

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'titre',
        'partie_prenante',
        'parite_adverse',
        'objet'
    ];

}
