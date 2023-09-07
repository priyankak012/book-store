<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
Use App\Models\order;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;


class CartController extends Controller
{
    public function cartlist()
    {
        $user_id = Session::get('user')['id'];
        $books = DB::table('cart')
            ->join('books', 'cart.book_id', '=', 'books.id')
            // ->where('cart.user_id'.$user_id)
            ->select('books.*', 'cart.id as cart_id')
            ->get();


        return view('cartlist', ['books' => $books]);
        return redirect()->back()->withSuccess('IT WORKS!');
    }

    public function removecart($id)
    {
        Cart::destroy($id);
        Redirect()->to('http://127.0.0.1:8000/cartlist');
    }


    public function ordernow()
    {
        $user_id = Session::get('user')['id'];

        $total = DB::table('cart')
            ->join('books', 'cart.book_id', '=', 'books.id')
            ->select('books.*', 'cart.id as cart_id')
            ->sum('books.price');

        return view('order', ['total' => $total]);
    }
    public function orderplace(Request $request)
    {
        $user_id = Session::get('user')['id'];
        $allcart = Cart::where('user_id',$user_id)->get();

      foreach ($allcart as $cart) {
          $order = new order;
          $order->book_id= $cart['book_id'];
          $order->user_id = $cart['user_id'];
          $order->status = "pending";
          $order->pyment_method = $request->payment;
          $order->payment_status="Complete";
          $order->address= $request->address;
          $order->save();
        //   return "data insert succesfully";  
      }
    }
    public function showForgetPasswordForm()
    {
        return view('forgetpassword');

    }


    public function submitForgetPasswordForm(Request $request)
    { 
        $request->validate([
         "email"=>'required|email|exists:registrations',
        ]);

         $token  = Str::random(length:64);

         Db::table(table:'password_reset_tokens')->insert([
            'email' => $request->email, 
              'token' => $token, 
              'created_at' => Carbon::now()
        
         ]);

         Mail::send('forgetpassword', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return back()->with('message', 'We have e-mailed your password reset link!');
    }



    public function showResetPasswordForm($token) { 
        return view('resetpassword', ['token' => $token]);
     }
     

     public function submitResetPasswordForm(Request $request)
     {
         $request->validate([
             'email' => 'required|email|exists:registrations',
             'password' => 'required|string|min:6|confirmed',
             'password_confirmation' => 'required'
         ]);

         redirect()->route('forget.password.get');

    }
    
}

