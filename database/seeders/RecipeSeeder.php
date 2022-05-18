<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes') ->insert([
            'user_id' => 1,
            'category_id' => 2,
            'name' => "rakott kel",
            'description' => Str::random(30),
            'public' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('recipes') ->insert([
            'user_id' => 1,
            'category_id' => 1,
            'name' => "zöldségkrémleves",
            'description' => Str::random(30),
            'public' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('recipes') ->insert([
            'user_id' => 2,
            'category_id' => 1,
            'name' => "csirkeleves",
            'description' => Str::random(30),
            'public' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('recipes') ->insert([
            'user_id' => 2,
            'category_id' => 4,
            'name' => "sültcsirke",
            'description' => Str::random(30),
            'public' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('recipes') ->insert([
            'user_id' => 1,
            'category_id' => 3,
            'name' => "mazsolás rizs",
            'description' => Str::random(30),
            'public' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('recipes') ->insert([
            'user_id' => 1,
            'category_id' => 3,
            'name' => "zöldségköret",
            'description' => Str::random(30),
            'public' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('recipes') ->insert([
            'user_id' => 1,
            'category_id' => 2,
            'name' => "rakott krumpli",
            'description' => Str::random(30),
            'public' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('recipes') ->insert([
            'user_id' => 2,
            'category_id' => 5,
            'name' => "sajtos karaj",
            'description' => Str::random(30),
            'public' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
    }
}
