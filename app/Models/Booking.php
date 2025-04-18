<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $primaryKey = 'booking_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'booking_id',
        'customer_id',
        'room_id',
        'booking_code',
        'booking_date',
        'booking_start',
        'booking_end',
        'booking_desc',
        'booking_price',
        'booking_status',
    ];
}
