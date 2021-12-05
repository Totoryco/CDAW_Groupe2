<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Anime;
use App\Models\Season;
use App\Models\Genre;
use App\Models\Animationstudio;
use App\Models\Classification;
use App\Models\Country;
use App\Models\Author;
use App\Models\Writing;
use App\Models\Episode;
use App\Models\Character;
use App\Models\Voiceactor;
use File;
use Illuminate\Support\Facades\DB;

class animeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        $array = array("1", "7", "18", "121", "2001", "3588", "13601", "28999", "33352", "38408"); //List des animes
        foreach($array as $i){
            $json = File::get(public_path().'/data/anime'. $i . '.json');
            $anime = json_decode($json);
            

            //Animation studios
            foreach($anime->studios as $key => $value){
                $studio = Animationstudio::where('id', '=', $value->mal_id)->first();
                if (is_null($studio)) {
                    Animationstudio::create([
                        "id" => $value->mal_id,
                        "name" => $value->name,
                        ]);
                }
            }
            //Country
            \App\Models\Country::factory(1)->create();

            //To remember for episodes
            $season = 1;
            //Anime en tant que tel
            $animebdd = Anime::where('id', '=', $anime->mal_id)->first();
            if (is_null($animebdd)) {
                $studios = $anime->studios;
                $studio = $studios[0];
                Anime::create([
                    "id" => $anime->mal_id,
                    "name" => $anime->title,
                    "image" => $anime->image_url,
                    "description" => $anime->synopsis,
                    'animationStudio_id' => $studio->mal_id,
                    'country_id' => 1, //Only japan for all these anime ?                    
                ]);
                $aired = $anime->aired;
                $date = $aired->string;
                Season::create([
                    "anime_id" => $anime->mal_id,
                    "name" => $anime->title,
                    "number" => 1, //Because api use anime as season
                    "released_date" => $date,
                ]);
                $seasons = Season::where('name', '=', $anime->title)->first();
                $season = $seasons->id;
            }
            

            //Genres
            foreach($anime->genres as $key => $value){
                $genre = Genre::where('id', '=', $value->mal_id)->first();
                if (is_null($genre)) {
                    Genre::create([
                        "id" => $value->mal_id,
                        "name" => $value->name,
                        "description" => $value->name,
                        ]);
                }
                //Créer les classifications
                Classification::create([
                    "anime_id" => $anime->mal_id,
                    "genre_id" => $value->mal_id,
                    ]);
            }
            

            //Les writings (authors)
            foreach($anime->producers as $key => $value){
                $author = Author::where('id', '=', $value->mal_id)->first();
                if (is_null($author)) {
                    Author::create([
                        "id" => $value->mal_id,
                        "firstname" => $value->name,
                        "lastname" => $value->name,
                        "country_id" => 1, //Only japan for all these prducers=authors ?
                        ]);
                }
                //Créer les writings
                Writing::create([
                    "anime_id" => $anime->mal_id,
                    "author_id" => $value->mal_id,
                    ]);
            }

            

            //Les épisodes
            $json2 = File::get(public_path().'/data/episodes'. $i . '.json'); //remplacer 1 par $i quand j'aurais toutes les requêtes
            $episodes = json_decode($json2);

            foreach($episodes->episodes as $key => $value){
                $episode = Episode::where('name', '=', $value->title)->first();
                if (is_null($value->aired)){
                    $date = "1998-10-24T00:00:00+00:00";
                }
                else {
                    $date = $value->aired;
                }
                
                if (is_null($episode)) {
                    Episode::create([
                        "name" => $value->title,
                        "number" => $value->episode_id,
                        "released_date" => $date,
                        "duration" => $anime->duration,
                        "season_id" => $season,
                    ]);
                }
                $episode = Episode::where('name', '=', $value->title)->first();
                $k = $episode->id;
                // 3 commentaires et 3 view par episodes
                \App\Models\Comment::factory(3)->create([
                    'episode_id' => $k,
                ]);
                \App\Models\Viewing::factory(3)->create([
                    'episode_id' => $k,
                ]);
                
            }  
            // Default voice actor
            \App\Models\Voiceactor::factory(1)->create();
            //Les characters (persos)
            $json3 = File::get(public_path().'/data/characters_staff'. $i . '.json'); //remplacer 1 par $i quand j'aurais toutes les requêtes
            $staff = json_decode($json3);
            foreach($staff->characters as $key => $value){
                $id_voiceactor = 1;
                foreach($value->voice_actors as $key => $actors){
                    $actor = Voiceactor::where('id', '=', $actors->mal_id)->first();
                    if (is_null($actor)) {
                        $language = Country::where('name', '=', $actors->language)->first();
                        if (is_null($language)) {
                            Country::create([
                                'name'=> $actors->language,
                            ]);
                        }
                        $language = Country::where('name', '=', $actors->language)->first();
                        $language_id = $language->id;
                        Voiceactor::create([
                            "id" => $actors->mal_id,
                            "firstname" => $actors->name,
                            "lastname" => $actors->name,
                            "country_id" => $language_id,
                            ]);
                        $id_voiceactor = $actors->mal_id;
                    }
                }
                $charac = Character::where('id', '=', $value->mal_id)->first();
                if (is_null($charac)) {
                    Character::create([
                        "id" => $value->mal_id,
                        "name" => $value->name,
                        "anime_id" => $anime->mal_id,
                        "voiceactor_id" => $id_voiceactor,
                    ]);
                }
            } 
        }
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
    }
}
