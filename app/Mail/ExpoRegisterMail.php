<?php

namespace App\Mail;

use App\ExpoMember;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ExpoRegisterMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected $expo;

    public function __construct(ExpoMember $expo)
    {
        $this->expo = $expo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.email-expo')
                    ->with([
                        'otp' => $this->expo->otp
                    ]);
    }
}
