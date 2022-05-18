<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@bp.hu',
            'password' => 'harmadikuser',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'role' => 'user'
        ]);
        DB::table('users')->insert([
            'name' => 'tanulo',
            'email' => 'tanulo@bp.hu',
            'password' => 'citromsav',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'role' => 'user'
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@bp.hu',
            'password' => Hash::make('password'),
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'role' => 'user'
        ]);
    }
}
