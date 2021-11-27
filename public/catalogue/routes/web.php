<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\listeMediasController;
use App\Http\Controllers\ShowsFilmsController;
use App\Http\Controllers\ChangeUserController;
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

Route::get('/', function() {return view('cardTemplate');})->name('home');
Route::get('/profile', 'App\Http\Controllers\AuthController@showProfile')->middleware('auth')->name('profile');

//--------------------------------------------------------------------------
// CRUD
//--------------------------------------------------------------------------

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

//--------------------------------------------------------------------------
// Auth
//--------------------------------------------------------------------------

Auth::routes();

Route::post('/changeUser', 'App\Http\Controllers\ChangeUserController@changeUser')->middleware('auth')->name('changeUser');

?>
