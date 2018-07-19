<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMailCodigoRojo(){
        $data = array(
            'name' => "Mohit Sharma",
        );

        Mail::send('mailtemplate', $data, function ($message) {
            $message->from('jekar.6630@live.com', 'Learning Laravel');
            $message->to('etb.losencinos@gmail.com')->subject('There is a new ticket!');
        });
    }
}
