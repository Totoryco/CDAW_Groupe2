<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avatar;
use App\Repositories\AvatarRepository;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class UploadAvatarController extends Controller {
    private $avatarRepository;

    public function avatarForm(){
        return view('test');
    }

    public function avatarUpload(Request $req){
            if ($req->hasFile('avatar')) {
                $fileName = time().'_'.$req->avatar->getClientOriginalName();
                $filePath = $req->file('avatar')->move(public_path().'/images', $fileName);

                Avatar::create([
                    'name' => $fileName,
                    'path' => $filePath,
                  ]);
                
                  

                return view('profile');
            }
            else {                          
                Session::flash('msg','Please Check the data');
                Session::flash('type','fail');
                return redirect('test');
                 }
    }

}

