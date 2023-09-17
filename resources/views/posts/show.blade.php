@extends('layouts/app')

@section('content')
    <br>
    <h2>{{$posts->title}}</h2>
    <div>
        {!!$posts->body!!}
    </div>
    <hr>
    <small>{{$posts->created_at}}</small>
    <hr>
    <a href="/posts" class="btn btn-primary">Go back</a>
@endsection