<?php

namespace App\Http\Controllers;

use App\Repositories\Interface\RoomRepositoryInterface;
use App\Repositories\Interface\TransactionRepositoryInterface;
use App\Repositories\Interface\TypeRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

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
        $roomIds = $this->roomRepository->getRoomIdsByTypeId($roomTypeId);
        $disabledDates = $this->transactionRepository->getDisabledDatesWithRoomIds($roomIds);
        $fullyBookedDates = $this->getDisabledDateByTypeId($roomIds, $disabledDates);
        $availableRoomCounts = $this->getAvailableRoomCounts($roomIds, $disabledDates);

        $newTrx = $this->transactionRepository->getCheckedOutDateWithRoomIds($roomIds);

        $fullyBookedDatesNew = [];
        $checkoutOnlyDates = [];

        foreach ($newTrx as $transaction) {
            $startDate = Carbon::parse($transaction->check_in);
            $endDate = Carbon::parse($transaction->check_out);

            $currentDate = $startDate->copy();
            while ($currentDate < $endDate) {
                $fullyBookedDates[] = $currentDate->format('Y-m-d\TH:i:s.v\Z');
                $currentDate->addDay();
            }
            $checkoutOnlyDates[] = $endDate->format('Y-m-d\TH:i:s.v\Z');
        }


//        return response()->json(['roomku' => $roomId, 'detail' => $roomDetail]);
        return view('web.bookingRoomDetails', [
            'roomTypeDetail' => $roomTypeDetail,
            'fullyBookedDates' => $fullyBookedDates,
            'availableRoomCounts' => $availableRoomCounts,
            'checkoutOnlyDates' => $checkoutOnlyDates,
            'fullyBookedDatesNew' => $fullyBookedDatesNew,
        ]);
    }

    private function getDisabledDateByTypeId(array $roomIds, Collection $disabledDates) {
        return $disabledDates->filter(function ($roomIdsForDate) use ($roomIds) {
            return $roomIdsForDate->sort()->values()->all() === collect($roomIds)->sort()->values()->all();
        })->keys();
    }

    private function getAvailableRoomCounts(array $roomIds, Collection $disabledDates): array
    {
        $totalRoomCount = count($roomIds);
        $availableRoomCounts = [];

        foreach ($disabledDates as $date => $bookedRooms) {
            $availableRoomCounts[$date] = $totalRoomCount - $bookedRooms->count();
        }

        return $availableRoomCounts;
    }

    public function bookingHallDetails()
    {
        return view('web.bookingHallDetails');
    }
}
