<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Cart;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;



class BookController extends Controller
{
  public function create(Request $request)
  {
    $request->validate([
      'title' => 'required|min:5',
      'author' => 'required',
      'description' => 'required|max:40',
      'price' => 'required|numeric',
      'image' => 'required|image|mimes:png,jpg',

    ]);

    $imagePath = $request->file('image')->store('images');

    Book::create([
      'title' => $request->title,
      'author' => $request->author,
      'description' => $request->description,
      'price' => $request->price,
      'image' =>'storage/'.$imagePath,
    ]);

    session()->flash('store');
    return redirect('/index');
  }

  public function show()
  {
    $books = Book::all();
    return view('index', ['books' => $books]);
  }

  public function view($id)
  {
    $datas = Book::find($id);
    return view('cartlist', ['books' => $datas]);
   
  }

  function addcart(Request $request)
  {
    if ($request->session()->has('user')) {
      $cart = new Book;
      $cart->user_id = $request->session()->get('user')['id'];
      $cart->book_id = $request->product_id;
      $cart->save();

    } else {
      return view('project.login');
    }
  }

  public function addtocart(Request $request)
  {
    if ($request->session()->has('user')) {
      $cart = new Cart;
      $cart->user_id = $request->session()->get('user')['id'];
      $cart->book_id = $request->book_id;
      $cart->save();

    }
  }
  
  static public function cartiteam()
  {
    $user_id = Session::get('user')['id'];
    return Cart::where('user_id', $user_id)->count();
  }
  
}
