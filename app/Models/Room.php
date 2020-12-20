<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Room as Authenticatable;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'hotel',
        'roomnumber',
        'floor',
        'maxclient',
        'perks',
        'hotel_id',
        'created_at',
        'updated_at'
    ];

    protected $attributes = [
        'perks' => " "
    ];
}
