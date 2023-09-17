@extends('layouts/app')

@section('content')
    <br>
    <h2>Edit Post</h2>
    <form action="{{action('App\Http\Controllers\PostsController@edit', $post->id)}}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group">
            <label value="title">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title">
        </div>
        <br>
        <div class="form-group">
            <label value="body">Body</label>
        </div>
        <textarea class="form-control" id="summernote" name="body" cols="30" rows="10" placeholder="Body Text"></textarea>
        <br>
        <script>
            $('#summernote').summernote({
              placeholder: 'Body Text',
              tabsize: 2,
              height: 250,
              toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
              ]
            });
          </script>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="/posts" class="btn btn-danger">Cancel Edit</a>
    </form>
@endsection