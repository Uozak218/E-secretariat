<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Courrier;
use App\Mail\CourrierMail;
use App\Models\MessageMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
 
class MailController extends Controller
{
    public function MailSend(Request $request)
    {

        $mail = new MessageMail();
    
        $mail->email = $request->input('email');
        $mail->subject = $request->input('subject');
        $mail->content = $request->input('content');
        $mail->save();

        $user = [
            'email' => $mail->email,
            'subject' => $mail->subject,
            'content' => $mail->content,
        ];

        Mail::to($user['email'])->send(new CourrierMail($user));

        return redirect('save_new_mail');
    } 
}
