<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Cart;
use App\Models\Checkout;
use App\Models\Detail;
use App\Models\profile;
use App\Models\Registration;
use Illuminate\Http\Request;

class paginationcontroller extends Controller
{
    public function book_pagination(){
        $books = Book::paginate(3);
        return view('crud.book_show', compact('books'));
      }
      public function index_pagination(){
        $books = Book::paginate(3);
        return view('crud.index', compact('books'));
      }

      public function profile_pagination(){
        $profiles = profile::paginate(8);
        return view('crud.profile_show', compact('profiles'));
      }

      public function registration_pagination()
      {
        $registrations = Registration::paginate(8);
        return view('crud.registration_show',compact('registrations'));

      }
      public function  detail_pagination()
      {
        $details = Detail::paginate(4);
        return view('crud.detail_show',compact('details'));
      }


       public function cart_pagination()
       {
        $carts = Cart::paginate(3);
        return view('crud.cart_show',compact('carts'));
       }

       public function chekout_pagination()
       {
        $checkouts = Checkout::paginate(3);
        return view('crud.checkout_show',compact('checkouts'));
       }
       
    
}

