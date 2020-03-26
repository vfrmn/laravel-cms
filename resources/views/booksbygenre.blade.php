@extends('app')
@section('content')
    <main  role="main">
        <div class="container mt-5 pt-5 align-content-center">
            <h1 class="text-center">Жанр: {{$genre_name}}</h1>
            <!-- Example row of columns -->
            <div class="row mt-5 justify-content-center">
                @foreach ($books as $book)
                    <div class="col-md-4 mb-5">
                        <h2>{{$book->name}}</h2>
                        <p>{{$book->desc}}</p>
                        <p>Автор: {{$book->author}}</p>
                    </div>
                @endforeach
            </div>
            <hr>
        </div> <!-- /container -->

    </main>
@endsection
