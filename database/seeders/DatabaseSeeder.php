<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->seedCategories();
    }

    private function seedCategories() : void
    {
        $category = Category::factory()
            ->has(Product::factory()->count(10))
            ->create();

        Log::debug("DatabaseSeeder.seedCategories: category #{$category->id} created and seeded with success!");
    }
}
