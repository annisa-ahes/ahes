<?php

namespace App\Repositories\Interface;

use App\Models\Customer;
use App\Models\Room;
use Illuminate\Support\Collection;

interface TransactionRepositoryInterface
{
    public function store($request, Customer $customer, Room $room);

    public function getTransaction($request);

    public function getTransactionExpired($request);

    public function getCheckedOutDateWithRoomIds(array $roomIds);

    public function getDisabledDatesWithRoomIds(array $roomIds);
}
