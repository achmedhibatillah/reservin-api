<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomImage;
use Illuminate\Http\Request;

class API_RoomImageController extends Controller
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
            'ri_id' => LogicController::generateUniqueId('room_image', 'ri_id'),
            'ri_image' => $request->ri_image,
            'room_id' => $request->room_id,
        ];

        RoomImage::create($data);

        return [
            'status' => 'success',
            'data' => $data,
        ];
    }

    public function delete(Request $request)
    {
        $olddata = RoomImage::where('ri_id', $request->ri_id)->first();

        if (!$olddata) {
            return [
                'status' => 'error',
                'message' => 'Room Image not found.',
            ];
        }

        RoomImage::where('ri_id', $request->ri_id)->delete();

        return [
            'status' => 'success',
            'olddata' => $olddata,
        ];
    }
}
