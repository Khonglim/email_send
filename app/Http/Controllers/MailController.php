<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\HDTutoMail;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    public function send()
    {
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo One Value';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'SenderUserName';
        $objDemo->receiver = 'ReceiverUserName';
 
        Mail::to('tr.narathorn@nioachievers.com')->send(new HDTutoMail($objDemo));
        dd("Email is Send.");
    }
}
