<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'room';
    protected $primaryKey = 'room_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable    = [
        'room_id',
        'room_name',
        'room_desc',
        'room_capacity',
        'room_price',
        'room_available',
        'room_start',
        'room_end',
        'created_at'
    ];
}
