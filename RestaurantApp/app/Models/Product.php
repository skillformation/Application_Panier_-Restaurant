<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    //Definir le fillable pour la mass assignement
    protected $fillable = [
        'name',
        'price',
        'image',
        'description',
        'category_id',
        'is_active',
    ];

}
