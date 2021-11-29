<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

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
        
        //Pas de soucis ici, on peut créer 10 sans problèmes
        \App\Models\User::factory(10)->create();
        \App\Models\Animationstudio::factory(10)->create();
        \App\Models\Country::factory(10)->create();
        \App\Models\Genre::factory(10)->create();

        //Deuxième couche, pas de correspondances génantes
        \App\Models\Author::factory(10)->create();
        \App\Models\Voiceactor::factory(10)->create();
        \App\Models\Friendship::factory(10)->create();
        \App\Models\Anime::factory(10)->create();

        //Pour chaque utilisateur, on fait 3 playlists, et dans chaque playlists, on ajoute 5 anime :
        for ($k = 1; $k <= 8; $k++) {
            \App\Models\Playlist::factory(3)->create([
                'user_id' => $k,
            ]);
        }
        for ($i = 1; $i <= 24; $i++) {
            \App\Models\Adding::factory(5)->create([
            'playlist_id' => $i,
        ]);
        }
        
        
        
        //Pas de soucis ici non plus
        \App\Models\Character::factory(10)->create();
        \App\Models\Classification::factory(10)->create();
        \App\Models\Writing::factory(10)->create();
        \App\Models\Saving::factory(10)->create();

        //Ici, on fait attention à ce que l'on fait :
        
        //On créer 5 épisodes par saison
        //Pour chaque anime, on fait X saisons 
        for ($k = 1; $k <= 8; $k++) { // Pour chaque anime
            for ($i = 1; $i <= 4; $i++) { // On fait 4 saisons
                \App\Models\Season::factory(1)->create([
                    'number' => $i,
                    'anime_id' => $k,
                ]);
            }
        }
        
        // Pour chaque saison, 5 episodes
        for ($j = 1; $j <= 32; $j++) {
            for ($k = 1; $k <= 5; $k++) {
                \App\Models\Episode::factory(1)->create([
                    'season_id' => $j,
                    'number' => $k,
                ]);
            }
        }
        

        // 3 commentaires et 3 view par user
        for ($k = 1; $k <= 8; $k++) {
            \App\Models\Comment::factory(3)->create([
                'user_id' => $k,
            ]);
            \App\Models\Viewing::factory(3)->create([
                'user_id' => $k,
            ]);
        }

        // Pour les tests de bdd

        DB::table('genres')->insert([
            'name' => "TestGenre",
            'description' => "This is the test genre example"
           ]);

       
}
}
