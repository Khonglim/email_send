<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;

use Illuminate\Mail\Mailable;

use Illuminate\Queue\SerializesModels;

use Illuminate\Contracts\Queue\ShouldQueue;

use App\User;

class HDTutoMail extends Mailable

{

    use Queueable, SerializesModels;

    /**

     * The user instance.

     *

     * @var Order

     */

     public $demo;

    /**

     * Create a new message instance.

     *

     * @return void

     */

    public function __construct($demo)
    {
        $this->demo = $demo;
    }
 

    /**

     * Build the message.

     *

     * @return $this

     */

    public function build()

    {
      
        return $this->view('emails.HDTutoMail');

    }

}