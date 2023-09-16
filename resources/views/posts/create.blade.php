@extends('layout/main')

@section('content')
    <br>
    <h2>Create Post</h2>
    <form action="{{action('App\Http\Controllers\PostsController@store')}}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label value="title">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title">
        </div>
        <br>
        <div class="form-group">
            <label value="body">Body</label>
        </div>
        <textarea class="form-control" name="body" cols="30" rows="10" placeholder="Body Text"></textarea>
        <br>
        <button type="submit" class="btn btn-success">Submit</button>
        <a href="/posts" class="btn btn-danger">Go Back</a>
    </form>
@endsection