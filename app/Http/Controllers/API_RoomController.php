<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\Room;
use App\Models\RoomImage;
use Illuminate\Http\Request;

class API_RoomController extends Controller
{
    public function all()
    {
        $data = Room::get();

        foreach ($data as $x) {
            $x['images'] = RoomImage::where('room_id', $x['room_id'])->get();
            $x['facility'] = Facility::where('room_id', $x['room_id'])->get();
        }

        return $data;
    }

    public function detail($room_id)
    {
        $data = Room::where('room_id', $room_id)->first();

        $data['images'] = RoomImage::where('room_id', $room_id)->first();

        return $data;
    }

    public function add(Request $request)
    {
        $data = [
            'room_id' => LogicController::generateUniqueId('room', 'room_id'),
            'room_name' => $request->room_name,
            'room_desc' => $request->room_desc,
            'room_capacity' => $request->room_capacity,
            'room_price' => $request->room_price,
            'room_available' => $request->room_available,
            'room_start' => $request->room_start,
            'room_end' => $request->room_end,
        ];

        Room::create($data);

        return [
            'status' => 'success',
            'data' => $data,
        ];
    }

    public function update(Request $request)
    {
        $olddata = Room::where('room_id', $request->room_id)->first();

        $data = [
            'room_name' => ($request->room_name) ? $request->room_name : $olddata->room_name,
            'room_desc' => ($request->room_desc) ? $request->room_desc : $olddata->room_desc,
            'room_capacity' => ($request->room_capacity) ? $request->room_capacity : $olddata->room_capacity,
            'room_price' => ($request->room_price) ? $request->room_price : $olddata->room_price,
            'room_available' => ($request->room_available) ? $request->room_available : $olddata->room_available,
            'room_start' => ($request->room_start) ? $request->room_start : $olddata->room_start,
            'room_end' => ($request->room_end) ? $request->room_end : $olddata->room_end,
        ];

        Room::where('room_id', $request->room_id)->update($data);
        $newdata = Room::where('room_id', $request->room_id)->first();

        return [
            'status' => 'success',
            'olddata' => $olddata,
            'newdata' => $newdata,
        ];
    }

    public function delete(Request $request)
    {
        $olddata = Room::where('room_id', $request->room_id)->first();

        if (!$olddata) {
            return [
                'status' => 'error',
                'message' => 'Room not found.',
            ];
        }

        Room::where('room_id', $request->room_id)->delete();

        return [
            'status' => 'success',
            'olddata' => $olddata,
        ];
    }
}
