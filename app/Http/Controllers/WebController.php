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

    public function booking()
    {
        return view('web.booking');
    }

    public function bookingRoom()
    {
        return view('web.bookingRoom');
    }

    public function bookingHall()
    {
        return view('web.bookingHall');
    }

    public function bookingRoomDetails()
    {
        return view('web.bookingRoomDetails');
    }

    public function bookingHallDetails()
    {
        return view('web.bookingHallDetails');
    }
}
