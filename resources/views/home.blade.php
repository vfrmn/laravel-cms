@extends('app')
@section('title_of_page')
    Home
@endsection

@section('content')
<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Hello, {{$name??'world'}}!</h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquam tellus id sodales aliquam. Ut ut mi eu felis lobortis euismod nec ut est. Proin facilisis laoreet orci. Phasellus sollicitudin volutpat neque, eget lobortis lectus ornare ut. Phasellus vestibulum in nunc sed venenatis. Vestibulum non libero at turpis convallis sodales sit amet sed ligula. Morbi tincidunt sodales dui, at rhoncus ipsum pharetra vulputate. </p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
          @foreach ($books as $book)
              <div class="col-md-4">
                  <h2>{{$book->name}}</h2>
                  <p>{{$book->desc}}</p>
                  <p>Автор: {{$book->author}}</p>
                  <p>Видавництво: {{$book->publisher->name}}</p>
                    <span>Жанри:</span>
                  @foreach($book->genres as $genre)
                      <span class="alert-light"><a class="btn-sm btn-info" href="{{route('books_by_genre',$genre->id)}}" role="button">{{$genre->name}}</a></span>
                      @endforeach
                  <p class="mt-1"><a class="btn btn-secondary" href="{{route('books_by_publisher',$book->publisher->id)}}" role="button">View others by this publisher »</a></p>
              </div>
          @endforeach

      </div>

      <hr>

    </div> <!-- /container -->

  </main>

@endsection
