<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Film;
use Illuminate\Support\Facades\DB;

class ShowsFilmsController extends Controller
{
    public function showAllFilms(){
        $films = DB::table('films')->get();
        $data = [
            "films" => $films,
        ];

        return view('film', $data);
    }

    public function addFilmForm(){
        $films = DB::table('categories')->get();

        $data = [
            "categories" => $films,
        ];

        return view('addFilmForm',$data);
    }

    public function addFilm(Request $request){
        $name = $request->input('name');
        $id_genre = $request->input('category');
        $data = [
            'name' => $name,
            'id_genre' => $id_genre,
        ];
        Film::create($data);

        return redirect ('/films');
    }

    public function updateFilmForm($film_name){
        $film_name = $film_name;
        $films = DB::table('categories')->get();
        $data=[
            'film_name' => $film_name,
            "categories" => $films,
        ];
        return view('updateFilmForm',$data);
    }

    public function updateFilm($film_name, Request $request){
        $query = DB::table('films')->select('id')->where('name', $film_name)->pluck('id')->toArray();
        $id_films = $query[0];
        $new_name = $request->input('name');
        $id_genre = $request->input('category');
        DB::table('films')->where('id', $id_films)->update(['name' => $new_name],['id_genre' =>$id_genre]);
        return redirect ('/films');
    }

    public function deleteFilm($film_name){
        DB::table('films')->where('name', $film_name)->delete();
        return redirect ('/films');
    }
}
