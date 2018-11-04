@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 1)
        @foreach($posts as $post)
            <div class="well">
                <h3>{{$post->title}}</h3>
                <p>{{$post->body}}</p>
            </div>
        @endforeach
    @else
        <p>No posts found</p>
    @endif

@endsection
