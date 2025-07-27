<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Helpers\LogoHelper;


class Enquiry extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $data['logo'] = LogoHelper::getBase64Logo();

        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('New Enquiry Received')
            ->markdown('emails.enquiry');
    }
}

