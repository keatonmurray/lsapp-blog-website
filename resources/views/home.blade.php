@extends('layouts/app')

@section('content')
<div class="new-post-btn">
    <a href="/posts/create" class="btn btn-primary">Create New Post</a>
</div>
<br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                    <div class="jumbotron text-center">
                        <h3>Your Blog Posts</h3>
                        <table class="table table-striped">
                            <tr>
                                <th>Post Title</th>
                                <th>Action</th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td>
                                        <form action="{{action('App\Http\Controllers\PostsController@destroy', $post->id)}}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
