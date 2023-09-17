@extends('layouts/app')

@section('content')
    <br>
    <h2>{{$posts->title}}</h2>
    <div>
        {!!$posts->body!!}
    </div>
    <hr>
    <small>Written on {{$posts->created_at}}</small>
    <hr>
@endsection