<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Categorie 1',
            'slug' => 'categorie-1',
        ]);

        Category::create([
            'name' => 'Categorie 2',
            'slug' => 'categorie-2',
        ]);

        Category::create([
            'name' => 'Categorie 3',
            'slug' => 'categorie-3',
        ]);

        Category::create([
            'name' => 'Categorie 4',
            'slug' => 'categorie-4',
        ]);

        Category::create([
            'name' => 'Categorie 5',
            'slug' => 'categorie-5',
        ]);

    }
}
