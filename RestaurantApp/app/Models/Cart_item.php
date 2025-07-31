<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart_item extends Model
{
    //Definir le fillable pour la mass assignement
    protected $fillable = [
        'session_id',
        'product_id',
        'quantity',
        'extras',
        'unit_price',
    ];
}
