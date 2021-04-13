<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(){
        $details = [
            'title' => 'Mail from Anelyas cosmetics store',
            'body' =>'Your order is accepted! Good day!'
        ];
        Mail::to('dareka1705@gmail.com')->send(new TestMail($details));
        return "Email Sent";
    }
}