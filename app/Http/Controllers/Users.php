<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
  function passRequest(Request $req)
   {
    $data = [
      'name' => $req->input('name'),
      'email' => $req->input('email'),
      'where' =>$req->input('where')
  ];

    $req->validate([
    'name' => 'required|max:7|min:2',
    'email' => 'required|email',
    'where' => 'required|max:7|min:2'
],
[
    'required' => ':attributeはご入力必須です。',
    'email' => ':attributeはメール形式である必要があります。',
    'max' => ':attributeは2文字以上と7文字以内でご入力してください',
    'min' => ':attributeは2文字以上と7文字以内でご入力してください'
],
[
    'name' => '名前',
    'email' => 'メールアドレス',
    'where' => '都道府県',
]);
    //return $req->input();
   return view('lesson1/users-confirm', $data);
}


}