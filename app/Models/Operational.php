<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operational extends Model
{
    protected $table = 'operational';
    protected $primaryKey = 'operational_id';
    public $incrementing = false; // karena primary key bukan auto-increment
    protected $keyType = 'string';

    protected $fillable = [
        'operational_id',
        'operational_date',
    ];
}
