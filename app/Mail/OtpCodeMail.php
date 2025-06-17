<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OtpCodeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $otp;
    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($otp, User $user)
    {
        $this->otp =  $otp;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    
    public function build(){
    return $this->subject('Código de verificación')
                ->markdown('emails.otp')
                ->with([
                    'otp' => $this->otp,
                    'user' => $this->user,
                ]);
    }

}
