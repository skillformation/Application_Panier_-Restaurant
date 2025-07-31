<?php

namespace App\Models;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
      use HasFactory;
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

    //Definir la cast pour l'image
    protected $casts = [
        'image' => 'array',
    ];

    //Relation avec la categorie
    public function category():BelongsTo
    {
        return $this->belongsTo(Categorie::class, 'category_id');
    }

}
