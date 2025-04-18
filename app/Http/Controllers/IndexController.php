<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        $tables = DB::select('SHOW TABLES');

        return 
        view('index/templates-header') . 
        view('index/index-index', [
            'tables' => $tables,
        ]) . 
        view('index/templates-footer');
    }

    public function api()
    {
        $info = [
            'page' => 'api',
            'title' => 'Pendahuluan'
        ];

        $tables = DB::select('SHOW TABLES');

        return 
        view('index/templates-header') . 
        view('index/templates-sidebar', [
            'info' => $info,
        ]) . 
        view('index/api-intro', [
            'info' => $info,
            'tables' => $tables,
        ]) . 
        view('index/templates-footbar') . 
        view('index/templates-footer');
    }

    public function token()
    {
        $info = [
            'page' => 'api-token',
            'title' => 'Token akses'
        ];

        $tables = DB::select('SHOW TABLES');

        return 
        view('index/templates-header') . 
        view('index/templates-sidebar', [
            'info' => $info,
        ]) . 
        view('index/api-token', [
            'info' => $info,
            'tables' => $tables,
        ]) . 
        view('index/templates-footbar') . 
        view('index/templates-footer');
    }

    public function customer()
    {
        $info = [
            'page' => 'api-customer',
            'title' => 'Akses data customer'
        ];

        $tables = DB::select('SHOW TABLES');

        return 
        view('index/templates-header') . 
        view('index/templates-sidebar', [
            'info' => $info,
        ]) . 
        view('index/api-customer', [
            'info' => $info,
            'tables' => $tables,
        ]) . 
        view('index/templates-footbar') . 
        view('index/templates-footer');
    }

    public function customer_all()
    {
        $info = [
            'page' => 'api-customer',
            'title' => 'Akses data customer → Lihat semua data customer'
        ];

        $tables = DB::select('SHOW TABLES');

        return 
        view('index/templates-header') . 
        view('index/templates-sidebar', [
            'info' => $info,
        ]) . 
        view('index/api-customer-all', [
            'info' => $info,
            'tables' => $tables,
        ]) . 
        view('index/templates-footbar') . 
        view('index/templates-footer');
    }

    public function customer_add()
    {
        $info = [
            'page' => 'api-customer',
            'title' => 'Akses data customer → Tambah data customer'
        ];

        $tables = DB::select('SHOW TABLES');

        return 
        view('index/templates-header') . 
        view('index/templates-sidebar', [
            'info' => $info,
        ]) . 
        view('index/api-customer-add', [
            'info' => $info,
            'tables' => $tables,
        ]) . 
        view('index/templates-footbar') . 
        view('index/templates-footer');
    }

    public function customer_delete()
    {
        $info = [
            'page' => 'api-customer',
            'title' => 'Akses data customer → Hapus data customer'
        ];

        $tables = DB::select('SHOW TABLES');
        $customers = Customer::get();

        return 
        view('index/templates-header') . 
        view('index/templates-sidebar', [
            'info' => $info,
        ]) . 
        view('index/api-customer-delete', [
            'info' => $info,
            'tables' => $tables,
            'customers' => $customers,
        ]) . 
        view('index/templates-footbar') . 
        view('index/templates-footer');
    }
}
