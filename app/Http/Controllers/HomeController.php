<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('testsite.home');
    }

    public function show()
    {
        $user = User::latest()->first();
        $books = Book::all();
        return view('testsite.home', ['user' => $user, 'books' => $books]);
    }

    public function get(){
        return view('testsite.home' ,['name' => UserModel::orderBy('id', 'desc')->first()->name]);
    }
}
