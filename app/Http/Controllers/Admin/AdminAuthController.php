<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\admin;
class AdminAuthController extends Controller
{
    public function getLogin(){
        return view('admin.loginauth');
    }
 
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        //    admin::create([
        //     'name'=> $request->name,
        //     'email' => $request->email,
        //     'password' =>encrypt($request->password),

        //    ]);

        //   return  $request->index();
 
        if(auth()->guard('admin')->attempt(['name' => $request->input('name'),'email' => $request->input('email'),  'password' => $request->input('password')])){
            $user = auth()->guard('admin')->user();
            if($user->is_admin == 1){
                return "thai gyu";
            }
        }else {
           return "nai thyu";
        }
    }
 
    public function adminLogout(Request $request)
    {
        auth()->guard('admin')->logout();
        Session::flush();

        Session::put('success', 'You are logout sucessfully');

        return redirect()->route('index');
    }

}
