<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userdetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'doorno',
        'streetname',
        'landmark',
        'city',
        'district',
        'state',
        'phone',
        'pincode',
    ];
}
