<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookManagerController extends Controller
{
    public function show()
    {
        $books =  Book::all();
         return view('crud.index',['books'=>$books]);
    }
    
   public function details($id)
  {

   $BOOKS = Book::find($id);
   return view('imagedetail',['books'=>$BOOKS]);

  }
  public  function search(Request $request)
  {
     $data = Book::
        where('title','like','%'.$request->input('query').'%')->get();
        return view('search',['books'=>$data]);
  }
   
}
