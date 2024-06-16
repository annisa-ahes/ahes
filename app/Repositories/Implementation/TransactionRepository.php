<?php

namespace App\Repositories\Implementation;

use App\Models\Customer;
use App\Models\Room;
use App\Models\Transaction;
use App\Repositories\Interface\TransactionRepositoryInterface;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

/**
 * @mixin Builder
 */

class TransactionRepository implements TransactionRepositoryInterface
{
    public function store($request, Customer $customer, Room $room)
    {
        return Transaction::create([
            'user_id' => auth()->user()->id,
            'customer_id' => $customer->id,
            'room_id' => $room->id,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'status' => 'Reservation',
        ]);
    }

    public function getTransaction($request)
    {
        return Transaction::with('user', 'room', 'customer')
            ->where('check_out', '>=', Carbon::now())
            ->when(! empty($request->search), function ($query) use ($request) {
                $query->where('id', '=', $request->search);
            })
            ->orderBy('check_out', 'ASC')->orderBy('id', 'DESC')->paginate(20)
            ->appends($request->all());
    }

    public function getTransactionExpired($request)
    {
        return Transaction::with('user', 'room', 'customer')->where('check_out', '<', Carbon::now())
            ->when(! empty($request->search), function ($query) use ($request) {
                $query->where('id', '=', $request->search);
            })
            ->orderBy('check_out', 'ASC')->paginate(20)
            ->appends($request->all());
    }

    public function getCheckedOutDateWithRoomIds(array $roomIds): Collection
    {
        $transactions = Transaction::whereIn('room_id', $roomIds)
            ->where(function ($query) {
                $query->where('check_in', '>=', now())  // Check-in is today or later
                ->orWhere('check_out', '>=', now()); // Check-out is today or later
            })->get();
        return $transactions;
    }

    public function getDisabledDatesWithRoomIds(array $roomIds): Collection
    {
        $transactions = Transaction::whereIn('room_id', $roomIds)->get();
        $disabledDates = collect();

        foreach ($transactions as $transaction) {
            $checkIn = Carbon::parse($transaction->check_in);
            $checkOut = Carbon::parse($transaction->check_out);

            // Create a period excluding the check-out date if it's not the next day
            if ($checkIn->diffInDays($checkOut) > 1) {
                $period = CarbonPeriod::create($checkIn, $checkOut->subDay());
            } else {
                $period = CarbonPeriod::create($checkIn, $checkIn); // Single day period
            }

            foreach ($period as $date) {
                $dateString = $date->toDateString();
                if (!isset($disabledDates[$dateString])) {
                    $disabledDates[$dateString] = collect();
                }
                $disabledDates[$dateString]->push($transaction->room_id);
            }
        }

        // Ensure room IDs are unique for each date
        foreach ($disabledDates as $date => $roomIds) {
            $disabledDates[$date] = $roomIds->unique();
        }

        return $disabledDates;
    }
}
