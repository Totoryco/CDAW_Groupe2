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
        return view('updateavatar');
    }

    public function avatarUpload(Request $req){
            if ($req->hasFile('avatar')) {
                $fileName = time().'_'.$req->avatar->getClientOriginalName();
                $filePath = $req->file('avatar')->move(public_path().'/images', $fileName);
                $user_id = Auth::user()->id;

                Avatar::create([
                    'name' => $fileName,
                    'path' => $filePath,
                    'user_id' => $user_id,
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

