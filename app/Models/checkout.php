<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $fillable =[
        'user_id',
        'username',
        'email',
        'address',
        'city',
        'zip',
        'cardnumber',
        'expmonth',
        'cvv',
    ];


}
