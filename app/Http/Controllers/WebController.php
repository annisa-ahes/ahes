<?php

namespace App\Http\Controllers;

use App\Repositories\Interface\RoomRepositoryInterface;
use App\Repositories\Interface\TransactionRepositoryInterface;
use App\Repositories\Interface\TypeRepositoryInterface;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function __construct(
        private TypeRepositoryInterface $typeRepository,
        private RoomRepositoryInterface $roomRepository,
        private TransactionRepositoryInterface $transactionRepository
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
        $fullyBookedDates = $this->getDisabledDateByTypeId($roomTypeId);

//        return response()->json(['roomku' => $roomId, 'detail' => $roomDetail]);
        return view('web.bookingRoomDetails', [
            'roomTypeDetail' => $roomTypeDetail,
            'fullyBookedDates' => $fullyBookedDates,
        ]);
    }

    private function getDisabledDateByTypeId($roomTypeId) {
        $roomIds = $this->roomRepository->getRoomIdsByTypeId($roomTypeId);
        $disabledDates = $this->transactionRepository->getDisabledDatesWithRoomIds($roomIds);
        return $disabledDates->filter(function ($roomIdsForDate) use ($roomIds) {
            return $roomIdsForDate->sort()->values()->all() === collect($roomIds)->sort()->values()->all();
        })->keys();
    }

    public function bookingHallDetails()
    {
        return view('web.bookingHallDetails');
    }
}
