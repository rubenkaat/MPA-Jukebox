<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([ 'name' => 'Black Metal' ]);
        DB::table('genres')->insert([ 'name' => 'Death Metal' ]);
        DB::table('genres')->insert([ 'name' => 'Deathcore']);
        DB::table('genres')->insert([ 'name' => 'Country']);
        DB::table('genres')->insert([ 'name' => 'Doom Metal']);
    }
}
