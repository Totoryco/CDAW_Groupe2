<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //By using the command "php artisan db:seed" in the terminal
        \App\Models\Category::factory(10)->create();
        \App\Models\Genre::factory(10)->create();
    }
}
