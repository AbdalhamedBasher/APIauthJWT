<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth')->get('/user', function (Request $request) {
    return $request->user();
});
//create user route
Route::get('/user-create',function (Request $request){
    App\User::create([
        'name'=>'Abdalhameed',
        'email'=>'myemail@gmail.com',
        'password'=>'mypassword'
    ]);
});

//login user
Route::get('/login',function (Request $request){
    $credientials=[
        'name'=>'Abdalhameed',
        'email'=>'myemail@gmail.com',

    ];
    $token=auth()->attempt($credientials);
    return $token;
}
);


//logout user
