<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\order;


class AdminController extends Controller
{
    public function getLogin(){
        return view('admin.login');
    }
 
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
 
        if(auth()->guard('admins')->attempt(['name' => $request->input('name'),'email' => $request->input('email'),  'password' => $request->input('password')])){
            $user = auth()->guard('admins')->user();
            if($user->is_admin == 1){
                return redirect()->route('adminDashboard')->with('success','You are Logged in sucessfully.');
            }
        }else {
            return back()->with('error','Whoops! invalid email and password.');
        }
    }
 
    public function adminLogout(Request $request)
    {
        auth()->guard('admin')->logout();
        Session::flush();

        Session::put('success', 'You are logout sucessfully');

        return redirect(route('adminLogin'));
    }

}

