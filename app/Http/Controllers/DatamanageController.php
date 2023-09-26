<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Cart;
use App\Models\checkout;
use App\Models\Detail;
use App\Models\Registration;

use Illuminate\Http\Request;

class DatamanageController extends Controller
{
   public function registration_show()
   {
     $registration =  registration::all();
      return view('crud.registration_show',['registrations'=>$registration]);
   }

   public function cart_show()
   {
     $carts =  Cart::all();
      return view('crud.cart_show',['cart'=>$carts]);
   }

   public function detail_show()
   {
     $details =  Detail::all();
      return view('crud.detail_show',['details'=>$details]);
   }

   public function book_show()
   {
     $book =  Book::all();
      return view('crud.book_show',['books'=>$book]);
   }

   public function checkout_show()
   {
     $checkouts =  checkout::all();
     return view('crud.checkout_show',['checkouts'=>$checkouts]);
   }
   
}

