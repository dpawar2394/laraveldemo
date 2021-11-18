<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Http\Requests\StudentAddRequest;

use Illuminate\Support\Facades\Mail;
use App\Mail\EmailSender;

class EmailController extends Controller
{
    public function Test(){

       Mail::to('dspknw@gmail.com')->send(new EmailSender());

    }
}