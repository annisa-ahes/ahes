<?php

namespace App\Http\Controllers;

class WebController extends Controller
{
    public function index()
    {
        return view('web.index');
    }

    public function room()
    {
        return view('web.room');
    }

    public function gallery()
    {
        return view('web.gallery');
    }

    public function contact()
    {
        return view('web.contact');
    }

    public function about()
    {
        return view('web.about');
    }
}
