<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomImage extends Model
{
    protected $table = 'room_image';
    protected $primaryKey = 'ri_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable    = [
        'ri_id',
        'ri_image',
        'room_id',
    ];
}
