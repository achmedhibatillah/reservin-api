<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [IndexController::class, 'index']);
Route::get('dokumentasi/api', [IndexController::class, 'api']);
Route::get('dokumentasi/api/token', [IndexController::class, 'token']);

Route::get('dokumentasi/api/customer', [IndexController::class, 'customer']);
Route::get('dokumentasi/api/customer/all', [IndexController::class, 'customer_all']);
Route::get('dokumentasi/api/customer/detail', [IndexController::class, 'customer_detail']);
Route::get('dokumentasi/api/customer/add', [IndexController::class, 'customer_add']);
Route::get('dokumentasi/api/customer/update', [IndexController::class, 'customer_update']);
Route::get('dokumentasi/api/customer/delete', [IndexController::class, 'customer_delete']);

Route::get('dokumentasi/api/admin', [IndexController::class, 'admin']);
Route::get('dokumentasi/api/admin/all', [IndexController::class, 'admin_all']);
Route::get('dokumentasi/api/admin/detail', [IndexController::class, 'admin_detail']);
Route::get('dokumentasi/api/admin/add', [IndexController::class, 'admin_add']);
Route::get('dokumentasi/api/admin/update', [IndexController::class, 'admin_update']);
Route::get('dokumentasi/api/admin/delete', [IndexController::class, 'admin_delete']);

Route::get('dokumentasi/api/room', [IndexController::class, 'room']);
Route::get('dokumentasi/api/room/all', [IndexController::class, 'room_all']);
Route::get('dokumentasi/api/room/detail', [IndexController::class, 'room_detail']);
Route::get('dokumentasi/api/room/add', [IndexController::class, 'room_add']);
Route::get('dokumentasi/api/room/image/add', [IndexController::class, 'room_image_add']);
Route::get('dokumentasi/api/room/facility/add', [IndexController::class, 'room_facility_add']);
Route::get('dokumentasi/api/room/update', [IndexController::class, 'room_update']);
Route::get('dokumentasi/api/room/delete', [IndexController::class, 'room_delete']);
Route::get('dokumentasi/api/room/image/delete', [IndexController::class, 'room_image_delete']);
Route::get('dokumentasi/api/room/facility/delete', [IndexController::class, 'room_facility_delete']);

Route::get('dokumentasi/api/booking', [IndexController::class, 'booking']);
Route::get('dokumentasi/api/booking/all', [IndexController::class, 'booking_all']);
Route::get('dokumentasi/api/booking/detail', [IndexController::class, 'booking_detail']);
Route::get('dokumentasi/api/booking/add', [IndexController::class, 'booking_add']);
Route::get('dokumentasi/api/booking/update', [IndexController::class, 'booking_update']);
Route::get('dokumentasi/api/booking/delete', [IndexController::class, 'booking_delete']);

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
