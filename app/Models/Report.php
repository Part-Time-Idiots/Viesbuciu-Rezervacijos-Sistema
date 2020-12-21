<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Report as Authenticatable;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'createdate',
        'datefrom',
        'dateto',
        'text',
        'hotel_id',
        'created_at',
        'updated_at'
    ];
}
