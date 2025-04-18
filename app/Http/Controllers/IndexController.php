<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Booking;
use App\Models\Customer;
use App\Models\Facility;
use App\Models\Room;
use App\Models\RoomImage;
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

    public function customer_detail()
    {
        $info = [
            'page' => 'api-customer',
            'title' => 'Akses data customer → Lihat detail data customer'
        ];

        $tables = DB::select('SHOW TABLES');
        $customers = Customer::get();

        return 
        view('index/templates-header') . 
        view('index/templates-sidebar', [
            'info' => $info,
        ]) . 
        view('index/api-customer-detail', [
            'info' => $info,
            'tables' => $tables,
            'customers' => $customers,
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

    public function customer_update()
    {
        $info = [
            'page' => 'api-customer',
            'title' => 'Akses data customer → Ubah data customer'
        ];

        $tables = DB::select('SHOW TABLES');
        $customers = Customer::get();

        return 
        view('index/templates-header') . 
        view('index/templates-sidebar', [
            'info' => $info,
        ]) . 
        view('index/api-customer-update', [
            'info' => $info,
            'tables' => $tables,
            'customers' => $customers,
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

    public function admin()
    {
        $info = [
            'page' => 'api-admin',
            'title' => 'Akses data admin'
        ];

        $tables = DB::select('SHOW TABLES');

        return 
        view('index/templates-header') . 
        view('index/templates-sidebar', [
            'info' => $info,
        ]) . 
        view('index/api-admin', [
            'info' => $info,
            'tables' => $tables,
        ]) . 
        view('index/templates-footbar') . 
        view('index/templates-footer');
    }

    public function admin_all()
    {
        $info = [
            'page' => 'api-admin',
            'title' => 'Akses data admin → Lihat semua data admin'
        ];

        $tables = DB::select('SHOW TABLES');

        return 
        view('index/templates-header') . 
        view('index/templates-sidebar', [
            'info' => $info,
        ]) . 
        view('index/api-admin-all', [
            'info' => $info,
            'tables' => $tables,
        ]) . 
        view('index/templates-footbar') . 
        view('index/templates-footer');
    }

    public function admin_detail()
    {
        $info = [
            'page' => 'api-admin',
            'title' => 'Akses data admin → Lihat detail data admin'
        ];

        $tables = DB::select('SHOW TABLES');
        $admins = Admin::get();

        return 
        view('index/templates-header') . 
        view('index/templates-sidebar', [
            'info' => $info,
        ]) . 
        view('index/api-admin-detail', [
            'info' => $info,
            'tables' => $tables,
            'admins' => $admins,
        ]) . 
        view('index/templates-footbar') . 
        view('index/templates-footer');
    }

    public function admin_add()
    {
        $info = [
            'page' => 'api-admin',
            'title' => 'Akses data admin → Tambah data admin'
        ];

        $tables = DB::select('SHOW TABLES');

        return 
        view('index/templates-header') . 
        view('index/templates-sidebar', [
            'info' => $info,
        ]) . 
        view('index/api-admin-add', [
            'info' => $info,
            'tables' => $tables,
        ]) . 
        view('index/templates-footbar') . 
        view('index/templates-footer');
    }

    public function admin_update()
    {
        $info = [
            'page' => 'api-admin',
            'title' => 'Akses data admin → Ubah data admin'
        ];

        $tables = DB::select('SHOW TABLES');
        $admins = Admin::get();

        return 
        view('index/templates-header') . 
        view('index/templates-sidebar', [
            'info' => $info,
        ]) . 
        view('index/api-admin-update', [
            'info' => $info,
            'tables' => $tables,
            'admins' => $admins,
        ]) . 
        view('index/templates-footbar') . 
        view('index/templates-footer');
    }

    public function admin_delete()
    {
        $info = [
            'page' => 'api-admin',
            'title' => 'Akses data admin → Hapus data admin'
        ];

        $tables = DB::select('SHOW TABLES');
        $admins = Admin::get();

        return 
        view('index/templates-header') . 
        view('index/templates-sidebar', [
            'info' => $info,
        ]) . 
        view('index/api-admin-delete', [
            'info' => $info,
            'tables' => $tables,
            'admins' => $admins,
        ]) . 
        view('index/templates-footbar') . 
        view('index/templates-footer');
    }

    public function room()
    {
        $info = [
            'page' => 'api-room',
            'title' => 'Akses data room'
        ];

        $tables = DB::select('SHOW TABLES');

        return 
        view('index/templates-header') . 
        view('index/templates-sidebar', [
            'info' => $info,
        ]) . 
        view('index/api-room', [
            'info' => $info,
            'tables' => $tables,
        ]) . 
        view('index/templates-footbar') . 
        view('index/templates-footer');
    }

    public function room_all()
    {
        $info = [
            'page' => 'api-room',
            'title' => 'Akses data room → Lihat semua data room'
        ];

        $tables = DB::select('SHOW TABLES');

        return 
        view('index/templates-header') . 
        view('index/templates-sidebar', [
            'info' => $info,
        ]) . 
        view('index/api-room-all', [
            'info' => $info,
            'tables' => $tables,
        ]) . 
        view('index/templates-footbar') . 
        view('index/templates-footer');
    }

    public function room_detail()
    {
        $info = [
            'page' => 'api-room',
            'title' => 'Akses data room → Lihat detail data room'
        ];

        $tables = DB::select('SHOW TABLES');
        $rooms = Room::get();

        return 
        view('index/templates-header') . 
        view('index/templates-sidebar', [
            'info' => $info,
        ]) . 
        view('index/api-room-detail', [
            'info' => $info,
            'tables' => $tables,
            'rooms' => $rooms,
        ]) . 
        view('index/templates-footbar') . 
        view('index/templates-footer');
    }

    public function room_add()
    {
        $info = [
            'page' => 'api-room',
            'title' => 'Akses data room → Tambah data room'
        ];

        $tables = DB::select('SHOW TABLES');

        return 
        view('index/templates-header') . 
        view('index/templates-sidebar', [
            'info' => $info,
        ]) . 
        view('index/api-room-add', [
            'info' => $info,
            'tables' => $tables,
        ]) . 
        view('index/templates-footbar') . 
        view('index/templates-footer');
    }

    public function room_image_add()
    {
        $info = [
            'page' => 'api-room',
            'title' => 'Akses data room → Tambah data gambar room'
        ];

        $tables = DB::select('SHOW TABLES');
        $rooms = Room::get();

        return 
        view('index/templates-header') . 
        view('index/templates-sidebar', [
            'info' => $info,
        ]) . 
        view('index/api-room-image-add', [
            'info' => $info,
            'tables' => $tables,
            'rooms' => $rooms,
        ]) . 
        view('index/templates-footbar') . 
        view('index/templates-footer');
    }

    public function room_facility_add()
    {
        $info = [
            'page' => 'api-room',
            'title' => 'Akses data room → Tambah data fasilitas room'
        ];

        $tables = DB::select('SHOW TABLES');
        $rooms = Room::get();

        return 
        view('index/templates-header') . 
        view('index/templates-sidebar', [
            'info' => $info,
        ]) . 
        view('index/api-room-facility-add', [
            'info' => $info,
            'tables' => $tables,
            'rooms' => $rooms,
        ]) . 
        view('index/templates-footbar') . 
        view('index/templates-footer');
    }

    public function room_update()
    {
        $info = [
            'page' => 'api-room',
            'title' => 'Akses data room → Ubah data room'
        ];

        $tables = DB::select('SHOW TABLES');
        $rooms = Room::get();

        return 
        view('index/templates-header') . 
        view('index/templates-sidebar', [
            'info' => $info,
        ]) . 
        view('index/api-room-update', [
            'info' => $info,
            'tables' => $tables,
            'rooms' => $rooms,
        ]) . 
        view('index/templates-footbar') . 
        view('index/templates-footer');
    }

    public function room_delete()
    {
        $info = [
            'page' => 'api-room',
            'title' => 'Akses data room → Hapus data room'
        ];

        $tables = DB::select('SHOW TABLES');
        $rooms = Room::get();

        return 
        view('index/templates-header') . 
        view('index/templates-sidebar', [
            'info' => $info,
        ]) . 
        view('index/api-room-delete', [
            'info' => $info,
            'tables' => $tables,
            'rooms' => $rooms,
        ]) . 
        view('index/templates-footbar') . 
        view('index/templates-footer');
    }

    public function room_image_delete()
    {
        $info = [
            'page' => 'api-room',
            'title' => 'Akses data room → Hapus data gambar room'
        ];

        $tables = DB::select('SHOW TABLES');
        $ri = RoomImage::get();

        return 
        view('index/templates-header') . 
        view('index/templates-sidebar', [
            'info' => $info,
        ]) . 
        view('index/api-room-image-delete', [
            'info' => $info,
            'tables' => $tables,
            'ri' => $ri,
        ]) . 
        view('index/templates-footbar') . 
        view('index/templates-footer');
    }

    public function room_facility_delete()
    {
        $info = [
            'page' => 'api-room',
            'title' => 'Akses data room → Hapus data fasilitas room'
        ];

        $tables = DB::select('SHOW TABLES');
        $facilities = Facility::get();

        return 
        view('index/templates-header') . 
        view('index/templates-sidebar', [
            'info' => $info,
        ]) . 
        view('index/api-room-facility-delete', [
            'info' => $info,
            'tables' => $tables,
            'facilities' => $facilities,
        ]) . 
        view('index/templates-footbar') . 
        view('index/templates-footer');
    }

    public function booking()
    {
        $info = [
            'page' => 'api-booking',
            'title' => 'Akses data booking'
        ];

        $tables = DB::select('SHOW TABLES');

        return 
        view('index/templates-header') . 
        view('index/templates-sidebar', [
            'info' => $info,
        ]) . 
        view('index/api-booking', [
            'info' => $info,
            'tables' => $tables,
        ]) . 
        view('index/templates-footbar') . 
        view('index/templates-footer');
    }

    public function booking_all()
    {
        $info = [
            'page' => 'api-booking',
            'title' => 'Akses data booking → Lihat semua data booking'
        ];

        $tables = DB::select('SHOW TABLES');

        return 
        view('index/templates-header') . 
        view('index/templates-sidebar', [
            'info' => $info,
        ]) . 
        view('index/api-booking-all', [
            'info' => $info,
            'tables' => $tables,
        ]) . 
        view('index/templates-footbar') . 
        view('index/templates-footer');
    }

    public function booking_detail()
    {
        $info = [
            'page' => 'api-booking',
            'title' => 'Akses data booking → Lihat detail data booking'
        ];

        $tables = DB::select('SHOW TABLES');
        $bookings = Booking::get();

        return 
        view('index/templates-header') . 
        view('index/templates-sidebar', [
            'info' => $info,
        ]) . 
        view('index/api-booking-detail', [
            'info' => $info,
            'tables' => $tables,
            'bookings' => $bookings,
        ]) . 
        view('index/templates-footbar') . 
        view('index/templates-footer');
    }

    public function booking_add()
    {
        $info = [
            'page' => 'api-booking',
            'title' => 'Akses data booking → Tambah data booking'
        ];

        $tables = DB::select('SHOW TABLES');

        return 
        view('index/templates-header') . 
        view('index/templates-sidebar', [
            'info' => $info,
        ]) . 
        view('index/api-booking-add', [
            'info' => $info,
            'tables' => $tables,
        ]) . 
        view('index/templates-footbar') . 
        view('index/templates-footer');
    }

    public function booking_update()
    {
        $info = [
            'page' => 'api-booking',
            'title' => 'Akses data booking → Ubah data booking'
        ];

        $tables = DB::select('SHOW TABLES');
        $bookings = Booking::get();

        return 
        view('index/templates-header') . 
        view('index/templates-sidebar', [
            'info' => $info,
        ]) . 
        view('index/api-booking-update', [
            'info' => $info,
            'tables' => $tables,
            'bookings' => $bookings,
        ]) . 
        view('index/templates-footbar') . 
        view('index/templates-footer');
    }

    public function booking_delete()
    {
        $info = [
            'page' => 'api-booking',
            'title' => 'Akses data booking → Hapus data booking'
        ];

        $tables = DB::select('SHOW TABLES');
        $bookings = Booking::get();

        return 
        view('index/templates-header') . 
        view('index/templates-sidebar', [
            'info' => $info,
        ]) . 
        view('index/api-booking-delete', [
            'info' => $info,
            'tables' => $tables,
            'bookings' => $bookings,
        ]) . 
        view('index/templates-footbar') . 
        view('index/templates-footer');
    }
}
