<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\order;
use App\Models\Checkout;
use App\Models\Book;

class Registration extends Model
{
   protected $fillable=[
    'username',
    'email',
    'phone',
    'password',
    
   ];

   public static function getPaginatedPosts($perPage = 10)
   {
       return self::paginate($perPage);
   }

   public function order()
   {
       return $this->belongsTo(Order::class);
   }
   public function checkout()
   {
    return $this->belongsTo(Checkout::class);
   }
   public function book()
   {
    return $this->belongsTo(Book::class);
   }

}
