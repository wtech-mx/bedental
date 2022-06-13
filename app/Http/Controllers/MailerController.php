<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use App\Models\Factura;

use Session;

class MailerController extends Controller {

    // =============== [ Email ] ===================
    public function email() {
        return view("email");
    }

    // ========== [ Compose Email ] ================
    public function composeEmail(Request $request) {
        require base_path("vendor/autoload.php");

        $mail = new PHPMailer(true);     // Passing `true` enables exceptions

        try {
            $mail->SMTPDebug = 1;
            $mail->isSMTP();
            $mail->Host = env('MAIL_HOST');
            $mail->SMTPAuth = true;
            $mail->Username =  env('MAIL_USERNAME');   //  sender username
            $mail->Password = env('MAIL_PASSWORD');       // sender password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;   // encryption - ssl/tls
            $mail->Port = 465;
            // port - 587/465
            $mail->setFrom('bedentalconsultorio@gmail.con', 'Bedental');
            $mail->addAddress($request->emailRecipient);
            $mail->addCC($request->emailCc);
            $mail->addBCC($request->emailBcc);

             $fileAttach = $request->get("file_name");
             $fileAttach2 = $request->get("file_name2");
             $mail->AddAttachment($fileAttach);
             $mail->AddAttachment($fileAttach2);
              // si no se especifico un archivo adjunto cargamos uno por defecto


            $mail->AddAttachment($fileAttach);
//            $mail->addReplyTo('josue.adrian.ramirezhernandez@gmail.com');

            if ($request->hasFile("emailAttachments")){
                for ($i=0; $i < count($_FILES['emailAttachments']['tmp_name']); $i++) {
                    $mail->addAttachment($_FILES['emailAttachments']['tmp_name'][$i], $_FILES['emailAttachments']['name'][$i]);
                }
            }

            $mail->isHTML(true);                // Set email content format to HTML
            $mail->Subject = $request->emailSubject;
            $mail->Body    = $request->emailBody;
            // $mail->AltBody = plain text version of email body;

            if( !$mail->send() ) {
                Session::flash('failed', 'Email not sent.');
                return back()->with("failed", "Email not sent.")->withErrors($mail->ErrorInfo);
            }

            else {

                 $id = $request->id;
                 $estatus = $request->estatus;

                 if ($estatus == 1){
                    $facturas = Factura::findorfail($id);
                    $facturas->estatus = 1;
                    $facturas->update ();
                 }

                Session::flash('success', 'Se ha Creado  con exito');
                return back()->with("email", "Email has been sent.");
            }

        } catch (Exception $e) {
                 $id = $request->id;
                 $estatus = $request->estatus;
                 $facturas = Factura::findorfail($id);
                 $facturas->estatus = 3;
                 $facturas->update ();
              Session::flash('error', 'Message could not be sent');
             return back()->with('error','Message could not be sent.');
        }
    }
}
