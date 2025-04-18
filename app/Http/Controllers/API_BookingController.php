<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Customer;
use App\Models\Room;
use Illuminate\Http\Request;

class API_BookingController extends Controller
{
    public function all()
    {
        $data = Booking::get();

        return $data;
    }

    public function detail($booking_id)
    {
        $data = Booking::where('booking_id', $booking_id)->first();

        return $data;
    }

    public function add(Request $request)
    {
        if (!Customer::where('customer_id', $request->customer_id)->exists()) {
            return [
                'status' => 'error',
                'message' => 'Customer not found.',
            ];
        }

        if (!Room::where('room_id', $request->room_id)->exists()) {
            return [
                'status' => 'error',
                'message' => 'Room not found.',
            ];
        }

        $data = [
            'booking_id' => LogicController::generateUniqueId('booking', 'booking_id'),
            'customer_id' => $request->customer_id,
            'room_id' => $request->room_id,
            'booking_code' => LogicController::generateUniqueNumber('booking', 'booking_code', 6),
            'booking_date' => $request->booking_date,
            'booking_start' => $request->booking_start,
            'booking_end' => $request->booking_end,
            'booking_desc' => $request->booking_desc,
            'booking_price' => $request->booking_price,
            'booking_status' => $request->booking_status,
        ];

        Booking::create($data);

        return [
            'status' => 'success',
            'data' => $data,
        ];
    }

    public function update(Request $request)
    {
        $olddata = Booking::where('booking_id', $request->booking_id)->first();

        $data = [
            'booking_status' => $request->booking_status,
        ];

        Booking::where('booking_id', $request->booking_id)->update($data);
        $newdata = Booking::where('booking_id', $request->booking_id)->first();

        return [
            'status' => 'success',
            'olddata' => $olddata,
            'newdata' => $newdata,
        ];
    }

    public function delete(Request $request)
    {
        $olddata = Booking::where('booking_id', $request->booking_id)->first();

        if (!$olddata) {
            return [
                'status' => 'error',
                'message' => 'Booking not found.',
            ];
        }

        Booking::where('booking_id', $request->booking_id)->delete();

        return [
            'status' => 'success',
            'olddata' => $olddata,
        ];
    }
}
