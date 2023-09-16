@extends('layout/main')

@section('content')
    <br><br>
    <h1>{{$title}}</h1>
    <br>
    @if (count($services) > 0)
        <div class="card">
            <ul class="list-group list-group-flush">
                @foreach ($services as $service) 
                    <li class="list-group-item">{{$service}}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection