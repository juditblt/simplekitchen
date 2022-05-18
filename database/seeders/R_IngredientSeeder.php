<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class R_IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('r__ingredients') ->insert([
            'recipe_id' => 1,
            'ingredient_id' => 1,
            'quantity' => 500,
            'unit' => 'g',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('r__ingredients') ->insert([
            'recipe_id' => 1,
            'ingredient_id' => 2,
            'quantity' => 500,
            'unit' => 'g',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('r__ingredients') ->insert([
            'recipe_id' => 1,
            'ingredient_id' => 3,
            'quantity' => 120,
            'unit' => 'g',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('r__ingredients') ->insert([
            'recipe_id' => 2,
            'ingredient_id' => 5,
            'quantity' => 500,
            'unit' => 'g',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('r__ingredients') ->insert([
            'recipe_id' => 2,
            'ingredient_id' => 6,
            'quantity' => 100,
            'unit' => 'g',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('r__ingredients') ->insert([
            'recipe_id' => 3,
            'ingredient_id' => 4,
            'quantity' => 500,
            'unit' => 'g',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('r__ingredients') ->insert([
            'recipe_id' => 3,
            'ingredient_id' => 5,
            'quantity' => 300,
            'unit' => 'g',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('r__ingredients') ->insert([
            'recipe_id' => 4,
            'ingredient_id' => 4,
            'quantity' => 1,
            'unit' => 'kg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('r__ingredients') ->insert([
            'recipe_id' => 4,
            'ingredient_id' => 7,
            'quantity' => 500,
            'unit' => 'g',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('r__ingredients') ->insert([
            'recipe_id' => 5,
            'ingredient_id' => 3,
            'quantity' => 200,
            'unit' => 'g',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('r__ingredients') ->insert([
            'recipe_id' => 5,
            'ingredient_id' => 6,
            'quantity' => 100,
            'unit' => 'g',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
    }
}
