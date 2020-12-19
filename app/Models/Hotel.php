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
        'agerestriction'
    ];

    protected $attributes = [
        'adress_id' => NULL,
        'user_id' => NULL
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated' => 'datetime'
    ];

}
