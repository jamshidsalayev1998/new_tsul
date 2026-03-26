<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderCall extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $user_phone;
    protected $fish;
    public function __construct($user_phone , $fish)
    {
        $this->user_phone = $user_phone;
        $this->fish = $fish;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('jmlaravel@gmail.com')->view('simple.mail_text' , ['user_phone' => $this->user_phone , 'fish' => $this->fish]);
    }
}
