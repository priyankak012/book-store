<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
   
    protected $fillable =[
        'book_id',
        'user_id',
        'status',
        'pyment_method',
        'payment_status',
        'address',
    ];  

    
}
