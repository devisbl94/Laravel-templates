<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
    	return view('home');
    }

    public function courses(){
    	return view('courses');
    }

    public function teachers(){
    	return view('teachers');
    }

    public function events(){
        return view('events');
    }

    public function about(){
        return view('about');
    }

    public function coursesingle(){
        return view('coursesingle');
    }

    public function gallery(){
        return view('gallery');
    }

    public function news(){
        return view('news');
    }
}
