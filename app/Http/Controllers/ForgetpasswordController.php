<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;

class ForgetpasswordController extends Controller
{

    public function showForgetPasswordForm()
    {
        return view('forgetpassword');
    }


    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            "email" => 'required|email|exists:registrations',
        ]);

        $token  = Str::random(length: 64);

        Db::table(table: 'password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()

        ]);

        Mail::send('forgetpassword', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return back()->with('message', 'We have e-mailed your password reset link!');
    }



    public function showResetPasswordForm($token)
    {
        return view('forgetpassword', ['token' => $token]);
    }


    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:registrations',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('password_resets')
            ->where([
                'email' => $request->email,
                'token' => $request->token
            ])
            ->first();
        $user = Registration::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email' => $request->email])->delete();

        return redirect('/login')->with('message', 'Your password has been changed!');
    }

    // redirect()->route('forget.password.get');

}
