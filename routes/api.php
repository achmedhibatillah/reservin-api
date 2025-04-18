<?php

use App\Http\Controllers\API_AdminController;
use App\Http\Controllers\API_BookingController;
use App\Http\Controllers\API_CustomerController;
use App\Http\Controllers\API_FacilityController;
use App\Http\Controllers\API_RoomController;
use App\Http\Controllers\API_RoomImageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('room/all', [API_RoomController::class, 'all']);
Route::get('room/detail/{slug}', [API_RoomController::class, 'detail']);
Route::post('room/add', [API_RoomController::class, 'add']);
Route::put('room/update', [API_RoomController::class, 'update']);
Route::delete('room/delete', [API_RoomController::class, 'delete']);

Route::post('room-image/add', [API_RoomImageController::class, 'add']);
Route::delete('room-image/delete', [API_RoomImageController::class, 'delete']);

Route::post('room-facility/add', [API_FacilityController::class, 'add']);
Route::delete('room-facility/delete', [API_FacilityController::class, 'delete']);

Route::get('booking/all', [API_BookingController::class, 'all']);
Route::get('booking/detail/{slug}', [API_BookingController::class, 'detail']);
Route::post('booking/add', [API_BookingController::class, 'add']);
Route::put('booking/update', [API_BookingController::class, 'update']);
Route::delete('booking/delete', [API_BookingController::class, 'delete']);

Route::get('customer/all', [API_CustomerController::class, 'all']);
Route::get('customer/detail/{slug}', [API_CustomerController::class, 'detail']);
Route::post('customer/add', [API_CustomerController::class, 'add']);
Route::put('customer/update', [API_CustomerController::class, 'update']);
Route::delete('customer/delete', [API_CustomerController::class, 'delete']);

Route::get('admin/all', [API_AdminController::class, 'all']);
Route::get('admin/detail/{slug}', [API_AdminController::class, 'detail']);
Route::post('admin/add', [API_AdminController::class, 'add']);
Route::put('admin/update', [API_AdminController::class, 'update']);
Route::delete('admin/delete', [API_AdminController::class, 'delete']);