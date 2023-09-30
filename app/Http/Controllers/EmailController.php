<?php

namespace App\Http\Controllers;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


class EmailController extends Controller
{

    public function mailsend(Request $request)
    {
        $details = [
            'title' => 'Online Book Store',
            'body' => 'Thank you for the visit online-book-store website',
        ];

      Mail::to('skeypriyankak@gmail.com')->send(new SendMail($details));

       return redirect('login');
    }

    public function sendEmail(Request $request)
    {
        $email = $request->input('email');
        $phone = $request->input('phone');

        Mail::send('emails.email', ['email' => $email, 'phone' => $phone], function ($message) use ($email) {
            $message->to($email)->subject('Subject of the email');
        });

        return  redirect('success');
    }

}
