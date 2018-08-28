@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-secondary"> Go back </a>
    
    <p> <h1> {{$post->title}} </h1> </p>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    <div>
    <small> Written on {{$post->created_at}} by {{$post->user->name}}</small>
        <hr>
        <p>{!!$post->body!!}</p>
    </div>
    
    
    <hr>
    @if (!Auth::guest())
        
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class = "btn btn-secondary">Edit</a>  
            <p>
            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
            </p>
        @endif
    @endif
@endsection