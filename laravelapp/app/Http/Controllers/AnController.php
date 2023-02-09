<?php

namespace App\Http\Controllers;

use App\Models\Prepod;
use Illuminate\Http\Request;
use App\Models\Post;

class AnController extends Controller
{
    public function stud(){
        $studs = Post::all();
        //return view('stud', compact($studs));
        //return view('stud')->withMessages($studs);
        return view('stud', ['studs'=>$studs]);
    }
    public function prepod(){
        $prepods = Prepod::all();
        //return view('stud', compact($studs));
        //return view('stud')->withMessages($studs);
        return view('prepod', ['prepods'=>$prepods]);
    }
    public function home(){
        return view('home');
    }
    public function contact(){
        return view('contact');
    }
    public function speciality(){
        return view('speciality');
    }
}
