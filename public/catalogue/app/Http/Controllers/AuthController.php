<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended($this->redirectPath());
        }
    }

    public function showProfile(){
        //Historique classique
        $order = 'date'; 
        $data = DB::select('select animes.name, max(countries.name) as country, max(animationstudios.name) as animestudio, sum(viewings.like) as likes, max(seasons.number) as seasonnumber, max(episodes.number) as episodenumber, max(viewings.updated_at) as date from animes join countries on animes.country_id=countries.id join animationstudios on animes.animationstudio_id=animationstudios.id join seasons on animes.id=seasons.anime_id join episodes on seasons.id=episodes.season_id join viewings on viewings.episode_id=episodes.id where viewings.user_id=' . Auth::user()->id . ' group by episodes.id order by ' . $order . ' desc');
        return view('profile', compact('data'));
    }

    public function showProfile2(){
        //Historique but only liked
        $order = 'date'; 
        $data = DB::select('select animes.name, max(countries.name) as country, max(animationstudios.name) as animestudio, sum(viewings.like) as likes, max(seasons.number) as seasonnumber, max(episodes.number) as episodenumber, max(viewings.updated_at) as date from animes join countries on animes.country_id=countries.id join animationstudios on animes.animationstudio_id=animationstudios.id join seasons on animes.id=seasons.anime_id join episodes on seasons.id=episodes.season_id join viewings on viewings.episode_id=episodes.id where (viewings.like = 1 AND viewings.user_id=' . Auth::user()->id . ') group by episodes.id order by ' . $order . ' desc');
        return view('profile', compact('data'));
    }

    public function showProfile3(){
        //Historique but only disliked
        $order = 'date'; 
        $data = DB::select('select animes.name, max(countries.name) as country, max(animationstudios.name) as animestudio, sum(viewings.like) as likes, max(seasons.number) as seasonnumber, max(episodes.number) as episodenumber, max(viewings.updated_at) as date from animes join countries on animes.country_id=countries.id join animationstudios on animes.animationstudio_id=animationstudios.id join seasons on animes.id=seasons.anime_id join episodes on seasons.id=episodes.season_id join viewings on viewings.episode_id=episodes.id where (viewings.like = -1 AND viewings.user_id=' . Auth::user()->id . ') group by episodes.id order by ' . $order . ' desc');
        return view('profile', compact('data'));
    }

    public function showProfile4(){
        //Historique by my playlists (for now, like = 0)
        $order = 'date'; 
        $data = DB::select('select animes.name, max(countries.name) as country, max(animationstudios.name) as animestudio, sum(viewings.like) as likes, max(seasons.number) as seasonnumber, max(episodes.number) as episodenumber, max(viewings.updated_at) as date from animes join countries on animes.country_id=countries.id join animationstudios on animes.animationstudio_id=animationstudios.id join seasons on animes.id=seasons.anime_id join episodes on seasons.id=episodes.season_id join viewings on viewings.episode_id=episodes.id where (viewings.like = 1 AND viewings.user_id=' . Auth::user()->id . ') group by episodes.id order by ' . $order . ' desc');
        return view('profile', compact('data'));
    }

    public function showProfileModo(){
        $order = 'date'; 
        $data = DB::select('select comments.id as id, users.pseudo, users.id as id2, comments.description, comments.publication_date as date, comments.likes, comments.verified from comments join users on comments.user_id=users.id where comments.verified=0 order by ' . $order . ' desc');
        return view('profileModo', compact('data'));
    }

    public function showProfileAdmin(){
        $data = DB::select('select users.pseudo, users.status, users.id from users');
        return view('profileAdmin', compact('data'));
    }

    public function updateProfile(){
        return view('updateprofile');
    }

    public function redirectPath()
    {
        // Logic that determines where to send the user
        if (Auth::user()->type == 'admin') {
            return '/admin';
        }

        return '/dashboard';
    }
}
