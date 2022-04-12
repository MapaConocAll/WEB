<?php

namespace App\Http\Controllers;

use App\Mail\contactoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class SendEmailController extends Controller
{
    public function index()
    {
        Mail::to('gustavito99gh@gmail.com')->send(new contactoMail());
    }
}
