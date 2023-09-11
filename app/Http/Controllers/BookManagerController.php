<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\profile;
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

  public function view($id)
  {
    $datas = Book::find($id);
    return view('crud.view', ['books' => $datas]);
   
  }

  
  public  function edit($id)
  {
    
    $book = Book::where('id', $id)->first();
    return view('crud.update', ['books' => $book]);
    
    
  }
  
  public function update(Request $request, $id)
    {
        $request->validate([
          'title' => 'required|min:5',
          'author' => 'required',
          'description' => 'required|max:40',
          'price' => 'required|numeric',
          'image' => 'required|image|mimes:png,jpg',
        ]);
    
       
        $books = Book::find($id);
        $books->update($request->all());
        
        return redirect('book_show'); 
    }
    public function destroy($id)
    {
      $books = Book::where('id', $id)->first();
      $books->delete();

      session()->flash('delete', 'Data Delete Successfully');
      return redirect('book_show');
    }

    public function profile_display()
    {
       $profile = profile::all();
       return view('crud.index',['profiles'=> $profile]);
    }
    }

