<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Facility;
use Illuminate\Http\Request;

class API_FacilityController extends Controller
{
    public function add(Request $request)
    {
        $roomdata = Room::where('room_id', $request->room_id)->first();

        if (!$roomdata) {
            return [
                'status' => 'error',
                'message' => 'Room which id = "' . $request->room_id . '" not found.',
            ];
        }

        $data = [
            'facility_id' => LogicController::generateUniqueId('facility', 'facility_id'),
            'facility_name' => $request->facility_name,
            'room_id' => $request->room_id
        ];

        Facility::create($data);

        return [
            'status' => 'success',
            'data' => $data,
        ];
    }

    public function delete(Request $request)
    {
        $olddata = Facility::where('facility_id', $request->facility_id)->first();

        if (!$olddata) {
            return [
                'status' => 'error',
                'message' => 'Facility not found.',
            ];
        }

        Facility::where('facility_id', $request->facility_id)->delete();

        return [
            'status' => 'success',
            'olddata' => $olddata,
        ];
    }
}
