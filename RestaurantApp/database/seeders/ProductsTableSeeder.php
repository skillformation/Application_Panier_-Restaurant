<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        // Créer 5 catégories
        Category::factory(5)->create();
        Product::factory(10)->create();
        //Pour chaque catégorie créer entre 5 et 20 produits
        Category::all()->each(function ($category) {
            $productsCount = rand(5, 20);
            Product::factory($productsCount)->create([
                'category_id' => $category->id,
            ]);
        });

    }
}
