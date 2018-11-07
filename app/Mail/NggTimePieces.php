<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;

use Illuminate\Mail\Mailable;

use Illuminate\Queue\SerializesModels;

use Illuminate\Contracts\Queue\ShouldQueue;



class NggTimePieces extends Mailable

{

    use Queueable, SerializesModels;

    /**

     * The user instance.

     *

     * @var Order

     */

     public $objDemo;

    /**

     * Create a new message instance.

     *

     * @return void

     */

    public function __construct($objDemo)
    {
        $this->objDemo =$objDemo;
    }
 

    /**

     * Build the message.

     *

     * @return $this

     */

    public function build()

    {
      
        return $this->view('emails.NggTimePieces');

    }

}