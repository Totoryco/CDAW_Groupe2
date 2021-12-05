<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $title = 'Home page';
        $order = 'date';
        $data = DB::select('select animes.name, COUNT(distinct seasons.id) as number, max(episodes.released_date) as date, max(animes.image) as image, max(animes.description) as description, min(episodes.id) as episode from animes join seasons on animes.id=seasons.anime_id join episodes on seasons.id=episodes.season_id group by animes.name order by ' . $order . ' desc');
        return view('cardTemplate', compact('data','title'));
    }

    public function mycollection()
    {
        $title = 'My collection';
        $order = 'date';
        $data = DB::select('select animes.name, SUM(viewings.like) as likes, COUNT(distinct seasons.id) as number, max(episodes.released_date) as date, max(animes.image) as image, max(animes.description) as description, min(episodes.id) as episode from animes join seasons on animes.id=seasons.anime_id join episodes on seasons.id=episodes.season_id join viewings on viewings.episode_id=episodes.id where viewings.user_id=' . Auth::user()->id . ' group by animes.name order by ' . $order . ' desc');
        return view('cardTemplate', compact('data','title'));
    }

    public function search()
    {
        $title = 'Search';
        $order = 'date';
        $data = DB::select('select animes.name, SUM(viewings.like) as likes, COUNT(distinct seasons.id) as number, max(episodes.released_date) as date, max(animes.image) as image, max(animes.description) as description, min(episodes.id) as episode from animes join seasons on animes.id=seasons.anime_id join episodes on seasons.id=episodes.season_id join viewings on viewings.episode_id=episodes.id where viewings.user_id=' . Auth::user()->id . ' group by animes.name order by ' . $order . ' desc');
        return view('search', compact('data','title'));
    }

    public function display()
    {
        $episode = DB::select('select animes.name from animes');
        $data = DB::select('select animes.name, SUM(viewings.like = 1) as likes , SUM(viewings.like = -1) as dislikes, COUNT(distinct seasons.id) as number, max(episodes.released_date) as date, max(animes.image) as image, max(animes.description) as description, min(episodes.id) as episode from animes join seasons on animes.id=seasons.anime_id join episodes on seasons.id=episodes.season_id join viewings on viewings.episode_id=episodes.id where viewings.user_id=' . Auth::user()->id . ' group by episodes.name');
        return view('display', compact('data','episode'));
    }
}
