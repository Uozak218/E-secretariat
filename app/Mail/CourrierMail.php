<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CourrierMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public function __construct(array $user)
    {
        $this->user = $user;
    }
  
    public function build(User $user)
    {
        $user_arr = User::all();

        foreach ($user_arr as $users) {
            if ($users->id === auth()->id())
                $email_user = $users->email;
        }

        $senderMail = User::where('email', 'like', );
        return $this->from($email_user)
                    ->subject("Merci de nous avoir contacter")
                    ->view('emails.courrierMail');
    }
}
