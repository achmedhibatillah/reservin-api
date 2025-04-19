<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class API_AdminController extends Controller
{
    public function all()
    {
        $data = Admin::get();
        return $data;
    }

    public function detail($admin_id)
    {
        $data = Admin::where('admin_id', $admin_id)->first();
        return $data;
    }

    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'admin_fullname' => 'required|max:255',
            'admin_email' => 'required|max:255|email|unique:admin,admin_email',
            'admin_pass' => 'required|max:255'
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        $data = [
            'admin_id' => LogicController::generateUniqueId('admin', 'admin_id'),
            'admin_fullname' => $request->admin_fullname,
            'admin_email' => $request->admin_email,
            'admin_pass' => Hash::make($request->admin_pass),
        ];

        Admin::create($data);

        return [
            'status' => 'success',
            'data' => $data,
        ];
    }

    public function update(Request $request)
    {
        $olddata = Admin::where('admin_id', $request->admin_id)->first();

        $validator = Validator::make($request->all(), [
            'admin_fullname' => 'max:255',
            'admin_email' => 'email|max:255|unique:admin,admin_email,' . $olddata->admin_id . ',admin_id',
            'admin_pass' => 'max:255'
        ]);        
    
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        $data = [
            'admin_fullname' => ($request->admin_fullname) ? $request->admin_fullname : $olddata->admin_fullname,
            'admin_email' => ($request->admin_email) ? $request->admin_email : $olddata->admin_email,
            'admin_pass' => ($request->admin_pass) ? Hash::make($request->admin_pass) : $olddata->admin_pass,
        ];

        Admin::where('admin_id', $request->admin_id)->update($data);
        $newdata = Admin::where('admin_id', $request->admin_id)->first();

        return [
            'status' => 'success',
            'olddata' => $olddata,
            'newdata' => $newdata,
        ];
    }

    public function delete(Request $request)
    {
        $olddata = Admin::where('admin_id', $request->admin_id)->first();

        if (!$olddata) {
            return [
                'status' => 'error',
                'message' => 'Admin not found.',
            ];
        }

        Admin::where('admin_id', $request->admin_id)->delete();

        return [
            'status' => 'success',
            'olddata' => $olddata,
        ];
    }
}
