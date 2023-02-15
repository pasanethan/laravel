<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
  function loadview()
   {
    $data=['anil','per', 'anif'];
    return view('users', ['user'=> $data]);
   }
}
