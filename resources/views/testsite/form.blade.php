@extends('layouts.app')
@section('title_of_page')
    Form
@endsection
@section('content')
<form class="form-signin" style="max-width: 420px; margin: 5rem auto;" method="post" action="{{route('login')}}">
    @csrf
    <div class="text-center mb-4">
      <h1 class="h3 mb-3 font-weight-normal">Floating labels</h1>
    </div>

    <div class="form-label-group mb-4">
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
    </div>

    <div class="form-label-group mb-4">
        <input type="text" name="name" id="inputName" class="form-control" placeholder="Name" required="" autofocus="">
      </div>


    <div class="form-label-group mb-4">
      <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required="">
    </div>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  </form>
@endsection
