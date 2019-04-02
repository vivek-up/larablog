@extends('layout.app')

    @section('content')
    <div class="jumbotron text-center">
        <h2>{{$tile}}</h2>
        <p>This is home page for larablog.</p>
        <p>
            <a class="btn btn-primary" href="/login" role="button">Login</a>
            <a class="btn btn-success" href="/Register" role="button">Register</a>
        </p>
    </div>
    @endsection