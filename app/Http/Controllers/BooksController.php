<?php

namespace App\Http\Controllers;

use App\Book;
use App\Genre;
use App\Publisher;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function booksbypublisher($publisher){
        $pub = Publisher::find($publisher);
        $books = $pub->books;
        return view('testsite.booksbypublisher', ['books'=> $books, 'pub_name' => $pub->name]);
    }

    public function booksbygenre($genre){
        $genre = Genre::find($genre);
        $books = $genre->books;
        return view('testsite.booksbygenre', ['books'=> $books, 'genre_name' =>$genre->name]);
    }
}
