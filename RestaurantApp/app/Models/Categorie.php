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
}
