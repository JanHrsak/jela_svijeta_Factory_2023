<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Meal;
use App\Models\Ingredient;
use App\Models\Tag;
use App\Models\Category;
use App\Models\meals_ingredients;
use App\Models\Meals_tags;
use Astrotomic\Translatable\Locales;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Meal::factory(5)->create();
        Ingredient::factory(5)->create();
        Tag::factory(5)->create();
        Category::factory(5)->create();
        app()->setLocale('fr');
        Meal::factory(5)->create();
        Ingredient::factory(5)->create();
        Tag::factory(5)->create();
        Category::factory(5)->create();
        app()->setLocale('es');
        Meal::factory(5)->create();
        Ingredient::factory(5)->create();
        Tag::factory(5)->create();
        Category::factory(5)->create();
        Meals_tags::factory(50)->create();
        meals_ingredients::factory(50)->create();

    }
}
