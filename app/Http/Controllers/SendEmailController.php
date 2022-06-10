<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use App\Mail\NotifyMail;


class SendEmailController extends Controller
{

    public function index()
    {

        $mailData = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp.'
        ];

        Mail::to('adrianwebtech@gmail.com')->send(new NotifyMail($mailData));



    }
}
