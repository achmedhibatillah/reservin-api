<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OperationalToRoom extends Model
{
    protected $table = 'operational_to_room';
    protected $primaryKey = 'relation_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $allowedFields    = [
        'relation_id',
        'operational_id',
        'room_id',
    ];
}
