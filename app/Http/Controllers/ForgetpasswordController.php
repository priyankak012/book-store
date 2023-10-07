<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ForgetpasswordController extends Controller
{
    public function senddisplayforgetpassword()
    {
       return view('forgetpassword');
    }

    public function sendemailforgetpassword(Request $request)
    {
        $request->validate([
            'email' =>'required|email|exists:registrations,email',
        ]);

        $email = $request->input('email');


        Mail::send('mails.emailforgetpassword', ['email' => $email], function ($message) use ($email) {
            $message->to($email)->subject('Subject of the email');
        });

        return  dd('success');
    }

    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:registrations,email',
            'password' => 'required|string|min:6|confirmed',

        ]);


     Registration::where('email', $request->email)
     ->update(['password' => Hash::make($request->password)]);

       DB::table('registrations')
       ->where(['email' => $request->email])
       ->delete();

        return redirect('/login')->with('message', 'Your password has been changed!');
    }

}
