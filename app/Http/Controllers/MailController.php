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

    $name = $request->name;
    $email = $request->email;
    $where = $request->where;


        Mail::send(new TestMail($name, $email,$where));
        return view('lesson1/profile');
    }

    public function companysend(Request $request)
    {
//   // 配列の初期化
//   $data = array();

//   // データ格納
//   $data['name'] = $request->name;
//   $data['email'] = $request->email;
//   $data['where'] = $request->where;

    $name = $request->name;
    $email = $request->email;
    $where = $request->where;


        Mail::send(new TestMail($name, $email,$where));
        return view('lesson1/profile');
    }

    function again()

{
    return redirect('/public/home')
                ->withInput();
 }

}
 
 
 
