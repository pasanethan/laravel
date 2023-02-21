<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\TestMail;

class MailController extends Controller
{
    public function send(Request $req)
    {
        $data = [
            'name' => $req->input('name'),
            'email' => $req->input('email'),
            'where' =>$req->input('where')
        ];
        

        Mail::send(new TestMail($name, $email,$where));
        return view('welcome');
    }
}
 
 
 
