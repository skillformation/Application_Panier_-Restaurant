<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    //utiliser le trait HasFactory pour les factories
    use HasFactory;
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
