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
        DB::table('recipes') ->insert([
            'user_id' => 1,
            'category_id' => 2,
            'name' => "rakott kel",
            'description' => Str::random(30),
            'public' => 1
        ]);
        DB::table('categories') ->insert([
            'name' => 'leves'
        ]);
        DB::table('categories') ->insert([
            'name' => 'egytálétel'
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
