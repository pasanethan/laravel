<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');
});

Route::post('/users', [Users::class, 'getData']
);

Route::view("login")

Route::view("/about", "about" );


youtube.com/watch?v=A-PCuzCTLWU&list=PL8p2I9GklV47Jszga434vZxOmY74Q1N_K&index=17