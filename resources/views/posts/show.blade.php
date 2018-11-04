@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go back</a>
    <div class="card">
        <div class="card-header">
            <h2>{{$post->title}}</h2>
            <small>Written on {{$post->created_at}}</small>
        </div>

        <div class="card-body">
            <p>{{$post->body}}</p>
        </div>
    </div>



@endsection
