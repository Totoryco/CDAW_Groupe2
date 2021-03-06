<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Viewing;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $title = 'Home page';
        $order = 'date';
        if (!is_null(Auth::user())) {
            $myplaylists = DB::select("select playlists.name from playlists join savings on playlists.id=savings.playlist_id where playlists.user_id=" . Auth::user()->id);
        }
        else{
            $myplaylists = "";
        }
        $data = DB::select('select animes.name, max(animes.id) as id, COUNT(distinct seasons.id) as number, max(episodes.released_date) as date, max(animes.image) as image, max(animes.description) as description, min(episodes.id) as episode from animes join seasons on animes.id=seasons.anime_id join episodes on seasons.id=episodes.season_id group by animes.name order by ' . $order . ' desc');
        return view('cardTemplate', compact('data','title','myplaylists'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $studios = DB::select("select animationstudios.name from animationstudios");
        $genres = DB::select("select genres.name from genres");
        $title = 'Search';
        $order = 'date';
        $myplaylists = DB::select("select playlists.name from playlists join savings on playlists.id=savings.playlist_id where playlists.user_id=" . Auth::user()->id);
        $data = DB::select("select animes.name, max(animes.id) as id, COUNT(distinct seasons.id) as number, max(episodes.released_date) as date, max(animes.image) as image, max(animes.description) as description, min(episodes.id) as episode from animes join seasons on animes.id=seasons.anime_id join episodes on seasons.id=episodes.season_id where animes.name like '%" . $search . "%' group by animes.name order by " . $order . " desc");
        return view('search', compact('data','title','studios','genres','myplaylists'));
    }

    public function mycollection(Request $request)
    {
        //Entry
        $search = $request->input('search');
        $studiosselected = $request->input('studio');
        if (is_null($studiosselected)) {
            $studioselected ="";
        }
        else{
            $studioselected = $studiosselected[0];
        }
        $genresselected = $request->input('genre');
        if (is_null($genresselected)) {
            $genreselected ="";
        }
        else{
            $genreselected = $genresselected[0];
        }
        $playlistsselected = $request->input('playlists');
        if (is_null($playlistsselected)) {
            $playlistselected ="";
        }
        else{
            $playlistselected = $playlistsselected[0];
        }
        $orderselected = $request->input('sortby');
        if (is_null($orderselected)) {
            $order ="animes.name";
        }
        else{
            $order = $orderselected[0];
        }
        //Response
        $title = 'My collection';
        $studios = DB::select("select animationstudios.name from animationstudios");
        $genres = DB::select("select genres.name from genres");
        $myplaylists = DB::select("select playlists.name from playlists join savings on playlists.id=savings.playlist_id where playlists.user_id=" . Auth::user()->id);
        $data = DB::select("select animes.name as name, max(animes.id) as id, max(playlists.name) as likes, COUNT(distinct seasons.id) as number, max(episodes.released_date) as date, max(animes.image) as image, max(animes.description) as description, min(episodes.id) as episode from animes join seasons on animes.id=seasons.anime_id join episodes on seasons.id=episodes.season_id join animationstudios on animes.animationstudio_id=animationstudios.id join viewings on viewings.episode_id=episodes.id join classifications on classifications.anime_id=animes.id join genres on classifications.genre_id=genres.id join addings on addings.anime_id=animes.id join playlists on addings.playlist_id=playlists.id join savings on savings.playlist_id=playlists.id where playlists.name like '" . $playlistselected ."%' and animationstudios.name like '%" . $studioselected ."%' and genres.name like '%" . $genreselected ."%' and animes.name like '%" . $search . "%' group by animes.name order by " . $order);
        return view('mycollection', compact('data','title','studios','genres','myplaylists'));
    }

    public function search2(Request $request)
    {
        //Entry
        $search = $request->input('search');
        $studiosselected = $request->input('studio');
        if (is_null($studiosselected)) {
            $studioselected ="";
        }
        else{
            $studioselected = $studiosselected[0];
        }
        $genresselected = $request->input('genre');
        if (is_null($genresselected)) {
            $genreselected ="";
        }
        else{
            $genreselected = $genresselected[0];
        }
        $orderselected = $request->input('sortby');
        if (is_null($orderselected)) {
            $order ="animes.name";
        }
        else{
            $order = $orderselected[0];
        }
        //Response
        $myplaylists = DB::select("select playlists.name from playlists join savings on playlists.id=savings.playlist_id where playlists.user_id=" . Auth::user()->id);
        $title = 'Search';
        $studios = DB::select("select animationstudios.name from animationstudios");
        $genres = DB::select("select genres.name from genres");
        $data = DB::select("select animes.name, max(animes.id) as id, SUM(viewings.like) as likes, COUNT(distinct seasons.id) as number, max(episodes.released_date) as date, max(animes.image) as image, max(animes.description) as description, min(episodes.id) as episode from animes join seasons on animes.id=seasons.anime_id join episodes on seasons.id=episodes.season_id join animationstudios on animes.animationstudio_id=animationstudios.id join viewings on viewings.episode_id=episodes.id join classifications on classifications.anime_id=animes.id join genres on classifications.genre_id=genres.id where animationstudios.name like '%" . $studioselected ."%' and genres.name like '%" . $genreselected ."%' and animes.name like '%" . $search . "%' group by animes.name order by " . $order);
        return view('search', compact('data','title','studios','genres','myplaylists'));
    }

    public function display($id)
    {
        Viewing::create([
            "episode_id"=> $id,
            "user_id" => Auth::user()->id,
            "like" => 0,
        ]);
        $myplaylists = DB::select("select playlists.name from playlists join savings on playlists.id=savings.playlist_id where playlists.user_id=" . Auth::user()->id ." or savings.user_id=". Auth::user()->id);
        $episode = DB::select('select animes.name as anime, animes.name as id, seasons.id as seasonid, episodes.name as title, seasons.number as seasonnumber, episodes.number as episodenumber, animes.description as description from animes join seasons on animes.id=seasons.anime_id join episodes on seasons.id=episodes.season_id where episodes.id=' . $id);
        $comments = DB::select('select users.pseudo as pseudo, comments.description as description, users.avatar as avatar from comments join users on comments.user_id=users.id where comments.episode_id=' . $id . ' order by comments.publication_date');
        $likes =  DB::select('select COUNT(viewings.id) as likes from episodes join viewings on viewings.episode_id=episodes.id where viewings.like=1 and episodes.id=' . $id);
        $dislikes =  DB::select('select COUNT(viewings.id) as dislikes from episodes join viewings on viewings.episode_id=episodes.id where viewings.like=-1 and episodes.id=' . $id); 
        $dislike = $dislikes[0];
        $like = $likes[0];
        $season = $episode[0]->seasonid;
        $data = DB::select('select episodes.id as id, episodes.number as number from episodes join seasons on episodes.season_id=seasons.id where seasons.id='. $season);
        return view('display', compact('episode','comments','data','myplaylists','like','dislike'));
    }
}
