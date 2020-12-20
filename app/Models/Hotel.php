<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Hotel as Authenticatable;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'web',
        'communication',
        'animals',
        'agerestriction',
        'created_at',
        'updated_at'
    ];

    protected $attributes = [
        'address_id' => 0,
        'rating' => 0,
    ];
}
