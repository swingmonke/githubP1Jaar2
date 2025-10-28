<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function contact()
    {
        return view('contact');
    }

    public function aboutUs()
    {
        return view('about_us');
    }

    public function ourTeam()
    {
        return view('our_team');
    }
}

