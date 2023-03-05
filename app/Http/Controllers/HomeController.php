<?php

namespace App\Http\Controllers;
use Illuminate\Http\Requests;

class HomeController extends Controller
{
    public function welcome () {
        return view ('welcome');
    }

    public function home () {
        return view('home');
    }
    
    public function messages () {
        return view('messages');
    }
    
    public function profile () {
        return view('profile');
    }
    
    public  function society () {
        return view('society');
    }
    public function profile1 () {
        return view('profile1');
    }
    public function profile2 () {
        return view('profile2');
    }
    
    public function profile3 () {
        return view('profile3');
    }
    
    public function dashboard () {
        return view ('dashboard');
    }

    public function about () {
        return view ('about');
    }

    public function contact () {
        return view ('contact');
    }

    public function policy () {
        return view ('policy');
    }

    public function help () {
        return view ('terms');
    }
    
}