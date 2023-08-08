<?php

namespace App\Http\Controllers\Reservations;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReservationRequest;
use App\Models\Car;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservasionController extends Controller
{
    //

    public function store(StoreReservationRequest $request)
    {
        $car_price = Car::find($request->car_id)->price;

        $startDate = Car::parse('2023-08-01');
        $endDate = Car::parse('2023-08-08');
        $day = $startDate->diffInDays($endDate);

        $data = $request->validate();



        $reservation = Reservation::create(array_merge($data, [
            'total_amount' => $car_price * $day,
            'status' => 0
        ]));


        // TOTAL AMOUNT
        //1. Get dulu harga car dari tabel car : car id
        // 2. Total hari = End date - start date 
        // 3. Total_amount = total hari * harga car

        // $a = [1,2,3];
        // $b = [4,5,6];

        // $array_merge = array_merge($a, $b);
        // result [1,2,3,4,5,6]



        return response()->json([
            'data' => $reservation,
            'status' => 'true'
        ]);
    }

    public function show(Reservation $reservation)
    {

        return response()->json([
            'data' => $reservation,
            'status' => 'true'
        ]);
    }
}
