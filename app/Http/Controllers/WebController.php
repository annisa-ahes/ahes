<?php

namespace App\Http\Controllers;

use App\Repositories\Interface\TypeRepositoryInterface;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function __construct(
        private TypeRepositoryInterface $typeRepository
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
        $roomTypes = $this->typeRepository->getAllTypeRooms();
        return view('web.bookingRoom', ['roomTypes' => $roomTypes]);
    }

    public function bookingHall()
    {
        return view('web.bookingHall');
    }

    public function bookingManasik()
    {
        return view('web.bookingManasik');
    }

    public function bookingRoomDetails(Request $request, $roomTypeId)
    {
        $roomTypeDetail = $this->typeRepository->getTypeRoomById($roomTypeId);

//        return response()->json(['roomku' => $roomId, 'detail' => $roomDetail]);
        return view('web.bookingRoomDetails', ['roomTypeDetail' => $roomTypeDetail]);
    }

    public function bookingHallDetails()
    {
        return view('web.bookingHallDetails');
    }
}
