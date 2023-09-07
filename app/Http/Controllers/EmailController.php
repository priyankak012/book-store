<?php

namespace App\Http\Controllers;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{

    public function mailsend()
    {
        $details = [
            'title' => 'Test Email From AllPHPTricks.com',
            'body' => 'This is the body of test email.'
        ];
        
      Mail::to('priyabpccs@gmail.com')->send(new SendMail($details));

        return 'Success! Email has been sent successfully.';
    }
}
