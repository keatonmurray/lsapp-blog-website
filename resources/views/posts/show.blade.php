@extends('layout/main')

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
        <a href="/posts/{{$posts->id}}/edit" class="btn btn-success">Edit</a>
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button class="btn btn-danger" type="submit">Delete</button>
    </form>
@endsection