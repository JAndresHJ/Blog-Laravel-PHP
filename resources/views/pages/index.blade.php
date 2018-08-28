
@extends('layouts.app')

    @section('content')
        <div class = "jumbotron text-center">
            <h1> {{$title}} </h1>
            <p> First app using Laravel</p>
            <p> <a class = "btn btn-primary btn-lg" href = "/login" role = "button"> LOGIN </a> </p>
            <p> <a class = "btn btn-success btn-lg" href = "/register" role = "button"> REGISTER </a> </p>
        </div>   
    @endsection
