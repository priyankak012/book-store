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
   
}
