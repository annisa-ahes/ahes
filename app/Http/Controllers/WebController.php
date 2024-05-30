<?php

namespace App\Http\Controllers;

use App\Repositories\Interface\RoomRepositoryInterface;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function __construct(
        private RoomRepositoryInterface $roomRepository
    ) {
    }
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
        $rooms = $this->roomRepository->getAllRooms();
        return view('web.bookingRoom', ['rooms' => $rooms]);
    }

    public function bookingHall()
    {
        return view('web.bookingHall');
    }

    public function bookingManasik()
    {
        return view('web.bookingManasik');
    }

    public function bookingRoomDetails(Request $request, $roomId)
    {
        $roomDetail = $this->roomRepository->getRoom($roomId);

//        return response()->json(['roomku' => $roomId, 'detail' => $roomDetail]);
        return view('web.bookingRoomDetails', ['roomDetail' => $roomDetail]);
    }

    public function bookingHallDetails()
    {
        return view('web.bookingHallDetails');
    }
}
