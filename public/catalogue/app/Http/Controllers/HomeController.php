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
        $order = 'likes';
        $data = DB::select('select animes.name, SUM(episodes.likes) as likes, COUNT(distinct seasons.id) as number, max(episodes.released_date) as date from animes join seasons on animes.id=seasons.anime_id join episodes on seasons.id=episodes.season_id group by animes.name order by ' . $order . ' desc');
        return view('cardTemplate', compact('data'));
    }
}
