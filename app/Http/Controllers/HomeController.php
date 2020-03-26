<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use App\UserModel;

class HomeController extends Controller
{
    public function show(){

        $books = Book::all();


            return view('home' ,['name' => 'Vitaliy', 'books' => $books]);
    }

    public function get(){
        return view('home' ,['name' => UserModel::orderBy('id', 'desc')->first()->name]);
}
}
