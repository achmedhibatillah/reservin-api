<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        return $data;
    }

    public function add(Request $request)
    {
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
                'message' => 'Customer not found.',
            ];
        }

        Customer::where('customer_id', $request->customer_id)->delete();

        return [
            'status' => 'success',
            'olddata' => $olddata,
        ];
    }
}
