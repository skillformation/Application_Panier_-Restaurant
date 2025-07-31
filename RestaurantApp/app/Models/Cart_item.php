<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    //Definir la casts pour les champsde type JSON
    protected $casts = [
        'extras' => 'array', 
    ];

    //Relation avec le produit
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
