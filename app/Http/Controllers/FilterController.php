<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Checkout;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public  function book_filter(Request $request)
    {
        

     $book = $request->get('book_book');
     if($book != ''){
     $books = Book::where('title','like', '%' .$book. '%')->paginate(2);

     $books->appends(array('book_search'=> $request->get('book_search'),));
     if(count($books )>0){
        return view('crud.book_show',['books'=>$books]);
     }
     return back()->with('error','No results Found');
 }
}

public function checkout_filting(Request $request)
{
    $checkout = $request->get('checkout_search');
    if($checkout != '')
    {
        $ceckout = Checkout ::where('username','like','%' .$checkout.'%')->paginate(3);
        $checkout->append(array('checkout_search' => $request->get('cgheckout_search'),));
        if(count($checkout)>0){
            return view('crud.checkout_show',['checkouts'=>$checkout]);

        }return back()->with('error','No result found ');
    }
    
}

    }

