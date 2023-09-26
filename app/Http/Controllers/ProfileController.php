<?php

namespace App\Http\Controllers;

use Illuminate\Session\Store;
use App\Models\profile;
Use Illuminate\Support\Facades\Session;


use Illuminate\Http\Request;


class ProfileController extends Controller
{
  public function create(Request $request)
  {

    $profile = $request->file('profile')->store('images');

    profile::create([


      'email' => $request->email,
      'profile' => 'storage/' . $profile,
    ]);
    
    $request->session()->put('profile', $profile);
    return redirect()->route('show_data');
  }

  public function show()
  {

    $profile = profile::all();
    return view('crud.profile_show', ['profiles' => $profile]);
    
  }

}
