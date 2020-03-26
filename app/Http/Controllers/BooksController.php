<?php

namespace App\Http\Controllers;

use App\Book;
use App\Genre;
use App\PublisherModel;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function booksbypublisher($publisher){
        $pub = PublisherModel::find($publisher);
        $books = $pub->books;
        return view('booksbypublisher', ['books'=> $books, 'pub_name' => $pub->name]);
    }

    public function booksbygenre($genre){
        $genre = Genre::find($genre);
        $books = $genre->books;
        return view('booksbygenre', ['books'=> $books, 'genre_name' =>$genre->name]);
    }
}
