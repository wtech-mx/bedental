<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use App\Mail\NotifyMail;


class SendEmailController extends Controller
{

    public function index()
    {
        $emailSubject = 'Envio de Ticket';
        $emailBody = 'Detalles del Ticket  KLINMEXICO';

        //usar para un solo correo de destino
        $emaifor = "adrianwebtech@gmail.com";
        //usar para varios  correos de destino

        $arrayEmails = ['dinopiza@yahoo.com.mx','adrianwebtech@gmail.com'];


        Mail::send('emails.demoMail',['msg' => $emailBody], function($message) use($emailSubject,$arrayEmails){
            $message->from("contacto_webtech@yahoo.com.mx","KlinMexico");
            $message->subject($emailSubject);
            $message->to($arrayEmails);
        });

      if (Mail::failures()) {
           return response()->Fail('Sorry! Please try again latter');
      }else{
           return response()->success('Great! Successfully send in your mail');
         }
    }
}
