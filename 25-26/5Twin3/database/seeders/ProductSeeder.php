<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();

        foreach ($categories as $category) {
            Product::create([
                'title' => $category->name . ' Produit 1',
                'description' => 'Description du produit',
                'quantity' => rand(1, 50),
                'category_id' => $category->id,
            ]);
        }
    }
}
