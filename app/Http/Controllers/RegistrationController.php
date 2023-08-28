<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class RegistrationController extends Controller
{
   public function index(Request $request)
   {

      $request->validate([
         'username' => 'required|unique:registrations',
         'email' => 'required|unique:registrations',
         'phone' => 'required|max:10',
         'password' => 'required|confirmed|min:6',
      ]);
      
      Registration::create([
         'username' => $request->username,
         'email' => $request->email,
         'phone' => $request->phone,
         'password' => Hash::make($request->password)
      ]);

      session()->flash('success', 'You have Successfully Registered');
      return redirect('/login');
   }

   public function login(Request $request)
   {
      $request->validate([
         'email' => 'required',
         'password' => 'required',
      ]);


      $user = registration::where(['email' => $request->email])->first();

      if (!$user || !Hash::check($request->password, $user->password)) {
         return "username and passwords does not match";
      } else {
         $request->session()->put('user', $user);
         return redirect()->to('http://127.0.0.1:8000/book');
      }
   }
}
