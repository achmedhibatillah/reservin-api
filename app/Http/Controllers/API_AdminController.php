<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

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
        $data = [
            'admin_id' => LogicController::generateUniqueId('admin', 'admin_id'),
            'admin_fullname' => $request->admin_fullname,
            'admin_email' => $request->admin_email,
            'admin_pass' => $request->admin_pass,
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

        $data = [
            'admin_fullname' => ($request->admin_fullname) ? $request->admin_fullname : $olddata->admin_fullname,
            'admin_email' => ($request->admin_email) ? $request->admin_email : $olddata->admin_email,
            'admin_pass' => ($request->admin_pass) ? $request->admin_pass : $olddata->admin_pass,
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
