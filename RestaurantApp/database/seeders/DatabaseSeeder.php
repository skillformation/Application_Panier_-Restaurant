<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */

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
