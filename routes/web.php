<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\CompanyCRUDController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/home', function () {
//     return view('home');
// });

// Route::post("/users", [Users::class, 'getData']
// );

// Route::get('/', function (Request $request) {
//     //
// });

Route::view("home", "lesson1/users");
 Route::POST("confirm", [Users::class, 'passRequest']);
//  Route::POST("end ", [Users::class, 'outRequest']);
//  Route::POST("lesson1/end ", [Users::class, 'outRequest']);
 Route::POST("lesson1/confirm", [Users::class, 'passRequest']);
//  Route::view("lesson1/profile", "profile");
Route::view("back", "lesson1/users");
Route::view("lesson1/back", "lesson1/users");
 
//  Route::post('logout', function () {
//   if(session()->has('name'))
//   {
//   session()->pull('name');
//     return redirect('users');
//   }


//  });

Route::resource('companies', CompanyCRUDController::class);
Route::get('/mail/send', 'MailController@send');
Route::get('/mail/send', [MailController::class, 'send']);


