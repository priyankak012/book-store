<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
    public function create(Request $request)
    {
      $request->validate([
        'title' => 'required|min:5',
        'author' => 'required',
        'description'=> 'required|max:20',
        'price' => 'required|numeric',
        'image' => 'required|image',

      ]);
      
         Book::create([
        'title' => $request->title,
        'author' => $request->author,
        'description'=> $request->description,
        'price'=>$request->price,
        'image'=> $request->image->store('public/image'),
         $path = $request->file('image')->storeAs(
          'public/image', $request->image->getClientOriginalName())
      
        
       ]);

        
       if($request)
       {
         return "data successfully";
       }
    }
    public function show()
    {
       $books = Book::all();
       return view('index',['books' => $books]);
       
    }
    public function view($id)
    {
      $datas = Book::find($id);
     return view('cart',['products'=>$datas]);
      
    }
    
    function addcart(Request $request)
    {
       if( $request->session()->has('user'))
       {
         $cart = new Book;
         $cart->user_id= $request->session()->get('user')['id'];
         $cart->book_id= $request->product_id;
         $cart->save();
    }
    else
    {
     return view('project.login');
    }

}
}
