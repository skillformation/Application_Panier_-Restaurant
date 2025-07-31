<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    //Relation avec les produits
    public function products():HasMany
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
