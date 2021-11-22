<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listeMediasController extends Controller
{
    //
    function helloWorld(){
        return view('template');
    }

    // function helloBanane(Request $request){
    //     $keys = $request->keys();
    //     foreach($keys as $key)
    //         echo $key;
    // }

    function helloBanane($idFilm){
        echo "HelloBanane" . $idFilm;
    }
}
