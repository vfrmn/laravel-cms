@extends('layouts.app')

@section('title_of_page')
    {{$page->title}}
@endsection
@section('content')
    <br>
    <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">{{$page->title}}</h1>
            <p class="lead my-3">{{$page->content}}</p>
            <p class="lead mb-0"><a href="" class="text-white font-weight-bold">{{$page->intro}}</a></p>
        </div>
    </div>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal">{{$page->title}}</h1>
            <p class="lead font-weight-normal">{{$page->content}}</p>
            <a class="btn btn-outline-secondary" href="">{{$page->intro}}</a>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>
<div class="container marketing" style="margin-top: 5rem;">
    <!-- Three column -->
    @each('testsite.include.'.$page->container_type, $page->children, 'child')
    <hr class="featurette-divider">

    <!-- /END  -->
  </div>
@endsection
