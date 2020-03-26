<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserModel;

class LoginController extends Controller
{
 public function submit(Request $req){

    $user = new UserModel();

    $user->email = $req->input('email');
    $user->name = $req->input('name');
    $user->pass = $req->input('pass');
    $user->save();

    // if($req->input('email') == 'vfrmn@gmail.com' && $req->input('pass') == '12345678')
    // return redirect()->route('welcome_page');
    // else
    return redirect()->route('home_page');

 }
}
