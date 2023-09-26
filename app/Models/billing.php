<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class billing extends Model
{
    protected $fillable =[
        'username',
        'email',
        'address',
        'city',
        'zip',
    ];
}
