<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Registered;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Console\View\Components\Alert;

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
   

   public function register(Request $request)
   {
       $this->validator($request->all())->validate();
       event(new Registered($user = $this->create($request->all())));
       $this->guard()->login($user);
       return $this->registered($request, $user)
           ?: redirect($this->redirectPath());
   }


   public function login(Request $request)
   {
      $request->validate([
         'email' => 'required',
         'password' => 'required',
      ]);


      $user = registration::where(['email' => $request->email])->first();

      if (!$user || !Hash::check($request->password, $user->password)) {
         session()->flash('error');
         return redirect('/login');
      } else {
         $request->session()->put('user', $user);
         session()->flash('login_success');
         return redirect()->to('http://127.0.0.1:8000/index');
      }
   }
}
