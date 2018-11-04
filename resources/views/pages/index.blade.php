@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome to Front page</h1>
        <p>This is playground application</p>
        <p>
            <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
            <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
        </p>
    </div>
@endsection
