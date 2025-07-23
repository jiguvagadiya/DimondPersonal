<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        // Example seed data with images
        Category::create([
            'name' => 'Gold',
            'description' => 'Gold diamond collection',
            'image' => 'gold.jpg', // Make sure this image exists in storage
        ]);

        Category::create([
            'name' => 'Platinum',
            'description' => 'Premium platinum diamond collection',
            'image' => 'platinum.jpg',
        ]);

        Category::create([
            'name' => 'Wedding Special',
            'description' => 'Perfect for special wedding occasions',
            'image' => 'wedding.jpg',
        ]);
    }
}
