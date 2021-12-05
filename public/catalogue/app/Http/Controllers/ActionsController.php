<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Playlist;
use App\Models\Saving;
use App\Models\Adding;

class ActionsController extends Controller
{
    public function liked()
    {
                
        
        return \App::call('App\Http\Controllers\HomeController@home');
    }

    public function disliked()
    {
                
        
        return \App::call('App\Http\Controllers\HomeController@home');
    }
    
    public function newplaylist(Request $request)
    {
        $playlistname = $request->input('playlist');
        Playlist::create([
            "user_id"=> Auth::user()->id,
            "name" => $playlistname,
        ]);
        $playlist = Playlist::where('name', '=', $playlistname)->first();
        $playlist_id = $playlist->id;
        Saving::create([
            "user_id"=> Auth::user()->id,
            "playlist_id" => $playlist_id,
        ]);
        
        
        return \App::call('App\Http\Controllers\HomeController@home');
    }

    public function adding($playlistname,$animeid)
    {
        $playlist = Playlist::where('name', '=', $playlistname)->first();
        $playlist_id = $playlist->id;

        Adding::create([
            "anime_id"=> $animeid,
            "playlist_id" => $playlist_id,
        ]);
        
        return \App::call('App\Http\Controllers\HomeController@home');
    }
}
