<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ForgetpasswordController extends Controller
{
    public function showForgetPasswordForm()
    {
        return view('emails.resetpassword');
    }

    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            "email" => 'required|email|exists:registrations',
        ]);

        $token = Str::random(64);

        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);

        Mail::send('emails.resetpassword', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email)->subject('Reset Password');
        });

        // return back()->with('message', 'We have emailed your password reset link!');
        return dd('click link');
    }

    public function showResetPasswordForm($token)
    {

        $tokenRecord = DB::table('password_reset_tokens')
            ->where('token', $token)
            ->first();

        if (!$tokenRecord) {
            return redirect('/login')->with('error', 'Invalid token.');
        }

        return view('emails.resetpassword', ['token' => $token]);
    }

    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:registrations',
            'password' => 'required|string|min:6|confirmed',
        ]);


        $tokenRecord = DB::table('password_reset_tokens')
            ->where([
                'email' => $request->email,
                'token' => $request->token,
            ])
            ->first();

        if (!$tokenRecord) {
            return redirect('/login')->with('error', 'Invalid token.');
        }

        $user = Registration::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);

        DB::table('password_reset_tokens')
            ->where(['email' => $request->email])
            ->delete();

        return redirect('/login')->with('message', 'Your password has been changed!');
    }
}
