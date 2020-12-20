<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Review as Authenticatable;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'rating',
        'clientcomment',
        'hotelcomment',
        'createdate',
        'responsedate',
        'hotel_id',
        'user_id',
        'hoteladmin_id'
    ];

    protected $attributes = [
        'hotelcomment' => "",
        'responsedate' => "",
        'hoteladmin_id' => 0
    ];
}
