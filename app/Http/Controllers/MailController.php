<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\TestMail;

class MailController extends Controller
{
    public function send(Request $request)
    {
//   // 配列の初期化
//   $data = array();

//   // データ格納
//   $data['name'] = $request->name;
//   $data['email'] = $request->email;
//   $data['where'] = $request->where;

$data = [
    'name' => $request->input('name'),
    'email' => $request->input('email'),
    'where' =>$request->input('where')
];


  dd($data);

        // Mail::send(new TestMail($name, $email,$where));
        // return view('welcome');
    }
}
 
 
 
