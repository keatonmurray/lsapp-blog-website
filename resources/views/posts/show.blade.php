@extends('layouts/app')

@section('content')
    <div class="cancel-btn">
        <a href="/posts" class="btn btn-primary">Go back</a>
    </div>
    <br><br>
    <h2>{{$posts->title}}</h2>
    <div>
        {!!$posts->body!!}
    </div>   
    <hr>
    <small>Written on {{$posts->created_at}} by {{$posts->user->name}}</small>
    <hr>
@endsection