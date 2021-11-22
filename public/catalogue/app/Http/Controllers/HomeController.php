<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function index(){
        return view('helloWorld');
    }
    
    public function getCategories(){
        $categories = Category::all();
        // $categories = Category::where('id',1);
        return view('categories',$categories);
    }
}

