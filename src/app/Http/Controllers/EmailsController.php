<?php

namespace App\Http\Controllers;

use App\Mail\AttachmentMail;
use Attribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailsController extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function email()
    {
        Mail::to('info@gruuw.com')->send(new AttachmentMail());
    }
}
