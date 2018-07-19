<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    //new static pages controller define by me
    public function home(){
        return view('staticPages.home');
    }

    public function help(){
        return view('staticPages.help');
    }

    /*
    public function about(){
        return view(view:'staticPages/about');
    }*/
}
