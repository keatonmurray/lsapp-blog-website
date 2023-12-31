@extends('layouts/app')

@section('content')
    <br>
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card" style="margin-bottom: 20px">
                <div class="card-body">
                    <h5 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
                    <p class="card-text">Written on {{$post->created_at}} by {{$post->user->name}}</p>
                </div>
            </div>
        @endforeach
    @else 
        <p>No posts found</p>
    @endif
@endsection