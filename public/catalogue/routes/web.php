<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\listeMediasController;
use App\Http\Controllers\ShowsFilmsController;
use App\Models\Film;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Create
Route::get('/addFilm', 'App\Http\Controllers\ShowsFilmsController@addFilmForm')->name('addFilmForm');
Route::post('/addFilm', 'App\Http\Controllers\ShowsFilmsController@addFilm')->name('addFilm');
//Read
Route::get('/films', 'App\Http\Controllers\ShowsFilmsController@showAllFilms')->name('films');
//Update
Route::get('/addFilm/{film}', 'App\Http\Controllers\ShowsFilmsController@updateFilmForm')->where('film', '[A-Za-z]+')->name('updateFilmForm');
Route::put('/addFilm/{film}', 'App\Http\Controllers\ShowsFilmsController@updateFilm')->name('updateFilm');
//Delete
Route::delete('/deleteFilm/{film}', 'App\Http\Controllers\ShowsFilmsController@deleteFilm')->where('film', '[A-Za-z]+')->name('deleteFilm');

Route::get('/{prenom}/{nom}', function($prenom, $nom){
    echo $prenom;echo '3';
    echo $nom;
});

Route::get('/{title}', function($title, $id) {
    return $title;
})->where(['title' => '[a-z]+']);

Route::get('/', function() {
    echo "Liste des films";
})->name('listeFilms');

Route::get('/', function() {
    // echo "Hello world!";
    // return view('welcome');
    return view('cardTemplate');
});

?>
