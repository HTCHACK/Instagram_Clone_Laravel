<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\ChirpAction;
use App\User;
use App\Post;
use App\LikeDislike;

class WelocomeController extends Controller
{
    public function index()
    {
        return view('welcome',[
            'users'=>User::all(),
            'posts'=>Post::orderby('created_at','desc')->get(),
            
        ]);
    }


}
