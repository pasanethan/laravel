<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\TestMail;

class MailController extends Controller
{
    public function send(Request $request)
    {
        $name = 'テスト ユーザー';
        $email = 'mahesuru.pasan@ethan-tech.jp';
        $where='hi';

        Mail::send(new TestMail($name, $email,$where));
        return view('welcome');
    }
}
 
 
 
