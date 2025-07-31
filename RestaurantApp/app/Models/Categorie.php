<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //Definir le fillable pour la mass assignement
    protected $fillable = [
        'name',
        'icon',
    ];

    //Definir la cast pour l'icon
    protected $casts = [
        'icon' => 'array',
    ];
}
