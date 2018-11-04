@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store']) !!}
    //
    {!! Form::close() !!}
@endsection
