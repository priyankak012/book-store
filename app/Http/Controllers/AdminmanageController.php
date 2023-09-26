<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Detail;
use App\Models\Registration;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\checkout;
use App\Models\order;
use App\Models\profile;
use Illuminate\View\View;
use PhpParser\Node\Stmt\Return_;

class AdminmanageController extends Controller
{
  public function edit(Request $request, $id)
  {
    $registration = registration::find($id);
    return view('admin_manage.reg_view', ['registrations' => $registration]);
  }
  public function  cart_view(Request $request, $id)
  {
    $carts = Cart::find($id);
    return view('admin_manage.cart_view', ['carts' => $carts]);
  }
  public function detail_view(Request $request, $id)
  {
    $details = Detail::find($id);
    return view('admin_manage.Detail_view', ['details' => $details]);
  }
  public function destroy($id)
  {
    $books = Registration::where('id', $id)->first();
    $books->delete();

    return redirect('registration_show');
  }
  public function cart_delete($id)
  {
    $cart = Cart::where('id', $id)->first();
    $cart->delete();
    return redirect('cart_show');
  }
  public function detail_delete($id)
  {
    $details = Detail::where('id', $id)->first();
    $details->delete();
    return redirect('detail_show');
  }
  public function image_details($id)
  {
    $BOOKS = Book::find($id);
    return view('crud.profiledetail', [$BOOKS]);
  }
  public function checkout_view($id)
  {
    return view('admin_manage.checkout_view', [
      'checkouts' =>  checkout::where('id', $id)->get(),
    ]);
  }

  public function checkout_delete($id)
  {
      $check_delete = checkout::where('id',$id)->first();
      $check_delete->delete();
      return view('crud.checkout_show');
  }

    public function profile_view($id)
    {
         $profiles = profile::find($id);
        return view('admin_manage.profile', ['profiles' => $profiles]);
    }

    public function checkoutdetail()
    {
       $checkoutdetails = checkout::latest()->first();
       return view('checkoutdetail',['checkoutdetails'=> $checkoutdetails]);
    }

    }

