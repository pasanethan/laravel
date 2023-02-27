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
//   $data['address'] = $request->address;

    $name = $request->name;
    $email = $request->email;
    $address = $request->address;

    if($request->input('back') == 'back'){
        return redirect('home')
                    ->withInput();
    } else{
        Mail::send(new TestMail($name, $email,$address));
        return view('lesson1/profile');
    }

        
       
         }


    public function companysend(Request $request)
    {
//   // 配列の初期化
//   $data = array();

//   // データ格納
//   $data['name'] = $request->name;
//   $data['email'] = $request->email;
//   $data['address'] = $request->address;

    $name = $request->name;
    $email = $request->email;
    $address = $request->address;


        Mail::send(new TestMail($name, $email,$address));
        return view('lesson1/profile');
    }

    

}
 
 
 
