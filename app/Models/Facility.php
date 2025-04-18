<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $table = 'facility';
    protected $primaryKey = 'facility_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable    = [
        'facility_id',
        'facility_icon',
        'facility_name',
        'room_id',
    ];
}
