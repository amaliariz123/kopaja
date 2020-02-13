<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailtrapExample extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('view.name');

        // return $this->from('amalia.rizkia@mail.ugm.ac.id', 'Mailtrap')
        //             ->subject('Email Verifycation')
        //             ->markdown('mails.exmpl')
        //             ->with([
        //                 'name' => 'New mailtrap user',
        //                 'link' => 'https://mailtrap.io/inboxes'
        //             ]);
    }
}
