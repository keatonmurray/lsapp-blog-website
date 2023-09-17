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
    <form action="{{action('App\Http\Controllers\PostsController@destroy', $posts->id)}}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <a href="/posts/{{$posts->id}}/edit" class="btn btn-success">Edit</a>
        <button class="btn btn-danger" type="submit">Delete</button>
        <a href="/posts" class="btn btn-secondary">Cancel</a>
    </form>
@endsection