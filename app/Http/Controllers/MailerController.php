<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
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

            // Email server settings
//            $mail->SMTPDebug = 1;
//            $mail->isSMTP();
//            $mail->Host = 'smtp.gmail.com';             //  smtp host
//            $mail->SMTPAuth = true;
//            $mail->Username = 'pruebaswebtech@gmail.com';   //  sender username
//            $mail->Password = 'Ytumamatambien1';       // sender password
//            $mail->SMTPSecure = 'tls';                  // encryption - ssl/tls
//            $mail->Port = 587;

            $mail->SMTPDebug = 1;
            $mail->isSMTP();
            $mail->Host = env('MAIL_HOST');
            $mail->SMTPAuth = true;
            $mail->Username =  env('MAIL_USERNAME');   //  sender username
            $mail->Password = env('MAIL_PASSWORD');       // sender password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;   // encryption - ssl/tls
            $mail->Port = 587;

            // port - 587/465


            $mail->setFrom('pruebaswebtech@gmail.com', 'WebTech');
            $mail->addAddress($request->emailRecipient);
            $mail->addCC($request->emailCc);
            $mail->addBCC($request->emailBcc);

            $mail->addReplyTo('josue.adrian.ramirezhernandez@gmail.com');


            if(isset($_FILES['emailAttachments'])) {
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
                Session::flash('success', 'Se ha Creado  con exito');
                return back()->with("success", "Email has been sent.");

            }

        } catch (Exception $e) {
                Session::flash('error', 'Message could not be sent');
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
             return back()->with('error','Message could not be sent.');
        }
    }
}
