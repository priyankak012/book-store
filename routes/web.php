<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\RegistrationController;
use App\Models\Registration;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Models\book;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function()
{
    return view('home');
});

Route::get('/login',function()
{
    return view('login');
});
Route::post('/login',[RegistrationController::class,'login'])->name('login');
Route::get('/detail',function()
{
    return view('detail');
});
// Route::get('/book',function()
// {

//     return  book::all();
//     // book::create([
//     //     'title'=> 'technology[iit]',
//     //     'author' => 'mk-shah',
//     //     'description'=>"this book help to make a knowledge skill",
//     //     'price'=>3100,
//     //     'image' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmj7EZ-KLgcR4LYZsiJBRvdD14aTb30gqeAKP4W2KOiw&s",
//     // ]);
// });

Route::get('/book',function()
{
    return view('book');
});
Route::post('/bookdetail',[BookController::class,'create'])->name('bookstore');

Route::get('/bookdetail',function()
{
    return view('bookdetail');
})->name('bookstore');


Route::get('/registration',function()
{
    return view('registration');
});
Route::post('/registration',[RegistrationController::class,'index'])->name('storedata');
Route::get('/index',function()
{
    return view('index');
});
Route::get('/index',[BookController::class,'show']);
Route::post('/cart',[BookController::class,'addcart'])->name('addtocart');
Route::get('/cart',function()
{
    return view('cart');
});

Route::get('/cart',function()
{
    Book::create([
    'title'=>'Classics',
    'author'=>'made by Charles Dickens',
    'description'=>'Classics are the most read books and are even taught in schools and colleges.',
    'price'=>2800,
    'image'=>"public/image/",
    ]);
});