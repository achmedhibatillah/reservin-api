<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class API_CustomerController extends Controller
{
    public function all()
    {
        $data = Customer::get();
        return $data;
    }

    public function detail($customer_id)
    {
        $data = Customer::where('customer_id', $customer_id)->first();

        if (!$data) {
            return [
                'status' => 'error',
                'message' => 'Data not found.',
            ];
        }

        return $data;
    }

    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'customer_fullname' => 'required|max:255',
            'customer_email' => 'required|max:255|email|unique:customer,customer_email',
            'customer_pass' => 'required|max:255'
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        $data = [
            'customer_id' => LogicController::generateUniqueId('customer', 'customer_id'),
            'customer_fullname' => $request->customer_fullname,
            'customer_email' => $request->customer_email,
            'customer_pass' => Hash::make($request->customer_pass),
        ];

        Customer::create($data);

        return [
            'status' => 'success',
            'data' => $data,
        ];
    }

    public function update(Request $request)
    {
        $olddata = Customer::where('customer_id', $request->customer_id)->first();

        $validator = Validator::make($request->all(), [
            'customer_fullname' => 'max:255',
            'customer_email' => 'email|max:255|unique:customer,customer_email,' . $olddata->customer_id . ',customer_id',
            'customer_pass' => 'max:255'
        ]);        
    
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        $data = [
            'customer_fullname' => ($request->customer_fullname) ? $request->customer_fullname : $olddata->customer_fullname,
            'customer_email' => ($request->customer_email) ? $request->customer_email : $olddata->customer_email,
            'customer_pass' => ($request->customer_pass) ? $request->customer_pass : $olddata->customer_pass,
        ];

        Customer::where('customer_id', $request->customer_id)->update($data);
        $newdata = Customer::where('customer_id', $request->customer_id)->first();

        return [
            'status' => 'success',
            'olddata' => $olddata,
            'newdata' => $newdata,
        ];
    }

    public function delete(Request $request)
    {
        $olddata = Customer::where('customer_id', $request->customer_id)->first();

        if (!$olddata) {
            return [
                'status' => 'error',
                'message' => 'Data not found.',
            ];
        }

        Customer::where('customer_id', $request->customer_id)->delete();

        return [
            'status' => 'success',
            'olddata' => $olddata,
        ];
    }
}
