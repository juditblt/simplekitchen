<?php

namespace Database\Seeders;



use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            IngredientSeeder::class,
            RecipeSeeder::class,
            R_IngredientSeeder::class
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
