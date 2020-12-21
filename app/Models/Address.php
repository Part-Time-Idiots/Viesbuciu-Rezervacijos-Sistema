<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Address as Authenticatable;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'country',
        'city',
        'street',
        'number'
    ];
}
