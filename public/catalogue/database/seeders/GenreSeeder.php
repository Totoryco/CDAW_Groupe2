<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //By using the command "php artisan db:seed --class=GenreSeeder" in the terminal
        DB::table('genres')->insert([
            'name' => "FirstGenre",
            'description' => "This is the first genre example before the randoms"
           ]);
        
        \App\Models\Genre::factory(10)->create(); // Create X random genres
        /*
        DB::table('genres')->insert([
            'name' => Str::random(10),
            'description' => Str::random(100)
           ]);
           */
        //\App\Models\Genre::factory(10)->create();
    }
}
