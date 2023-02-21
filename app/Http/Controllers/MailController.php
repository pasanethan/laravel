<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\TestMail;

class MailController extends Controller
{
    public function send(Request $request)
    {
        $data = [
            'name' => $request('name'),
            'email' => $request('email'),
            'where' =>$request('where')
        ];
        

        Mail::send(new TestMail($name, $email,$where));
        return view('welcome');
    }
}
 
 
 
