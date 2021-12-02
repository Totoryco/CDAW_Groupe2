<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avatar;
use App\Repositories\AvatarRepository;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class UploadAvatarController extends Controller {
    private $avatarRepository;

    public function avatarForm(){
        return view('updateavatar');
    }

    public function avatarUpload(Request $req){
            if ($req->hasFile('avatar')) {
                $fileName = time().'_'.$req->avatar->getClientOriginalName();
                $filePath = $req->file('avatar')->move(public_path().'/images', $fileName); //->resize(200,200)
                $user = Auth::user();
                $user_id = Auth::user()->id;
                DB::table('users')->where('id', $user_id)->update(['avatar' => $fileName]);
                $user->avatar = $fileName;
                return redirect(route('profile'));
            }
            else {                          
                Session::flash('msg','Please Check the data');
                Session::flash('type','fail');
                return redirect(route('test'));
                 }
    }

}

