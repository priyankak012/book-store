<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Checkout;
use App\Models\Detail;
use App\Models\profile;
use App\Models\Registration;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function book_search(Request $request)
    {
     if (request('book_search')) {
         $book = Book::where('title', 'like', '%' . request('book_search') . '%')->get();
     } else {
         $book = Book::all();
     }
           return view('crud.book_show')->with('books',$book);
    }
 
    public function registration_search(Request $request)
    {
 
     if(Request('registration_search'))
     {
         $registration = Registration::where('username','like', '%' .request('registration_search') .'%')->get();
     }else
     {
         $registration = Registration::all();
     }
      return view('crud.registration_show')->with('registrations',$registration);
    }

     public function Detail_search(Request $request)
     {
        if(request('detail_search'))
        {
            $detail = Detail::where('address','like','%' .request('detail_search') .'%')->get();
        }else

        $detail = Detail::all();

        return view('crud.detail_show')->with('details',$detail);
     }
     public function checkout_search()
     {
        if(request('checkout_search'))
        {
            $checkout = Checkout::where('username','like','%' .request('checkout_search').'%')->get();
        }else
        {
            $checkout = Checkout::all();

        }
        return view('crud.checkout_show')->with('checkouts',$checkout);
        }

        public function profile_search()
        {
            if(require('profile_search'))
            {
                $profile_search = profile::where('email','like','%'.request('profile_search').'%')->get();
            }else{
                $profile_search = profile::all();
            }
            return view('crud.profile_show')->with('profile_search',$profile_search);
        }

}
