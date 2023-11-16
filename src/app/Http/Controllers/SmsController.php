<?php

namespace App\Http\Controllers;

use Illuminate\Notifications\Facades\Vonage;

class SmsController extends Controller
{
    public function index()
    {
        Vonage::messge()->send([
            'to' => env('SMS_TO'),
            'from' => env('SMS_FROM'),
            'text' => 'Test SMS'
        ]);

        echo "Message sent!";
    }
}
