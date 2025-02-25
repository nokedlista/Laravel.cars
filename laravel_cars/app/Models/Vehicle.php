<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = ['name', 'registration_number', 'VIN', 'maker_ID', 'body_ID'];
    public $timestamps = false;
}
