<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailSender;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function store(Request $request){
        Mail::to("fanny.hunin@hotmail.com")->send(new MailSender($request));
        return redirect()->back();
    }
}
