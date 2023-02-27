<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email,$address)
    {
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to($this->email)
            ->subject('株式会社からのご案内')
            ->view('lesson1.mail')
            ->with([
                'name' => $this->name,
                'email' => $this->email,
                'address'=> $this->address,
            ]);
    }
}