@extends('layouts/app')

@section('content')
  <br>
  <div class= "h-100 p-5 bg-light border rounded-3">
    <div class="jumbotron text-center">
      <h1>{{$title}}</h1>
      <p>{{$description}}</p>
      <a class="btn btn-success btn-lg" href="/about" role="button">{{$button}}</a>
    </div>
</div>
@endsection