<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();
        Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development',
            'color' => 'blue',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
            'color' => 'green',
        ]);

        Category::create([
            'name' => 'Design',
            'slug' => 'design',
            'color' => 'red',
        ]);

        Category::create([
            'name' => 'Business',
            'slug' => 'business',
            'color' => 'yellow',
        ]);
    }
}
