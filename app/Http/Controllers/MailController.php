<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;

class MailController extends Controller
{
    //berhasil kirim email,versi awal
    public function index()
    {
        $mailData = [
            'title' => 'ini header dari konten',
            'body' => 'harusnya ini awalan dr body'
        ];

        Mail::to('under.block22@gmail.com')->send(new DemoMail($mailData));

        dd("Email is sent successfully.");
    }
}
