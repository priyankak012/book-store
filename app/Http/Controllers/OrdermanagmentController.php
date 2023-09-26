<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\checkout;
use App\Models\order;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrdermanagmentController extends Controller
{

    public function store()
    {
        checkout::all();
        {
            return view('checkout');
        }
    }
    public function checkout_create(Request $request)
    {
             $request->validate([
            'username' =>'required',
            'email' => 'required',
            'address' => 'required|min:5',
            'city' => 'required',
            'zip' => 'required',
            'cardnumber'=> 'required',
            'expmonth'=>'required',
            'cvv'=>'required',

        ]);

        $user_id = Session::get('user')['id'];
        $checkout = Cart::where('user_id', $user_id)->get();

      foreach ($checkout as $cart) {
         
            $checkout = new order();
            checkout::create([
            $checkout = new checkout,
           'user_id'=> $cart->user_id = $request->session()->get('user')['id'],
            'username' => $request->username,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'zip' => $request->zip,
            'cardnumber'=> $request->cardnumber,
            'expmonth'=>$request->expmonth,
            'cvv'=>$request->cvv,

               
    
        ]);
      

         return redirect()->to('http://127.0.0.1:8000/checkoutdetail');
    }
}
   public function show($id)
   {
      
      $check_out = checkout::where('id',$id);
      return view('',['check_out'=>$check_out]);
   }

   public function datashow($id)
   {
       $registration = Registration::with(['orders', 'checkouts', 'books'])->find($id);
       return view('checkoutdetail', compact('registration'));
   }
}
