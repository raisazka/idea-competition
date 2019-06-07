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
    protected $qr;

    public function __construct(ExpoMember $expo, $qr)
    {
        $this->expo = $expo;
        $this->qr = $qr;
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
                        'otp' => $this->expo->otp,
                        'qr' => $this->qr
                    ]);
    }
}
