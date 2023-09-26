<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable=[
        'user_id',
        'book_id',
        'address',
        'pincode',
        'cancel_id',
        'review',
        'verify',
    ];
}
