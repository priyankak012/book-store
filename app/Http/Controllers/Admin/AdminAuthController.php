<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function getLogin()
{
    return view('admin.loginauth');
}

public function postRegister(Request $request)
{
    $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email|unique:admins',
        'password' => 'required|confirmed',
    ]);

    $admin = Admin::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    Session::put('success', 'Registration successful');
    return  redirect('admin.login');
}

public function postLogin(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $admin = Admin::where('email', $request->email)->first();

    if (!$admin || !Hash::check($request->password, $admin->password)) {
        session()->flash('error', 'Invalid email or password');
        return redirect('admin.login');
    } else {
        $request->session()->put('admin', $admin);
        session()->flash('login_success');
       return redirect()->to('http://127.0.0.1:8000/crud.index');
    }
}

public function adminLogout(Request $request)
{
    $request->session()->forget('admin');
    Session::put('success', 'You are logged out successfully');
    return redirect()->route('index');
}

}
