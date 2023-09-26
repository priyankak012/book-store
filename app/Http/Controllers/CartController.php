<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
Use App\Models\order;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;


class CartController extends Controller
{
    public function cartlist()
    {
        $user_id = Session::get('user')['id'];
        $books = DB::table('carts')
            ->join('books', 'carts.book_id', '=', 'books.id')
            // ->where('cart.user_id'.$user_id)
            ->select('books.*', 'carts.id as cart_id')
            ->get();


        return view('cartlist', ['books' => $books]);

    }

    public function removecart($id)
    {
        $removecart = Cart::where('id',$id)->first();
        $removecart->delete(); 

        session()->flash('Remove_cart');
       return redirect()->route('cartlist');
       
    }
    public function ordernow(Request $request)
    {
        $user_id = Session::get('user')['id'];

        $total = DB::table('carts')
            ->join('books', 'carts.book_id', '=', 'books.id')
            ->select('books*.', 'carts.id as cart_id')
            ->sum('books.price');
            
        return view('order', ['total' => $total]);
    }

    
    public function orderplace(Request $request)
    {

        $request->validate([
            'address'=> 'required',
            'payment' =>'required',
            
        ]);

        $user_id = Session::get('user')['id'];
        $allcart = Cart::where('user_id', $user_id)->get();

      foreach ($allcart as $cart) {
          $order = new order;
          $order->book_id = $cart['book_id'];
          $order->user_id = $cart['user_id'];
          $order->status = "pending";
          $order->pyment_method = $request->payment;
          $order->payment_status="Complete";
          $order->address= $request->address;
          $order->save();
      }
         return redirect()->route('checkout');
    }
}

