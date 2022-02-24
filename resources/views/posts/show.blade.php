@extends('layouts.app')

@section('content')

    <a href="/posts" class="btn btn-secondary">Go Back</a>
    <p></p>
    <div class="card">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body  }}</p>
        <small>{{ $post->created_at }}</small>    
    </div>
    <p></p>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-secondary">Edit</a>
    
    <form class='float-end' method="POST" action="/posts/{{$post->id}}">
        @csrf
        {{-- na ovaj nacin ubacujemo metodu 'PUT', 'PATCH' i 'DELETE' u Laravelu --}}
            @method('DELETE') 
        <button class="btn btn-danger">Delete</button>
    </form>

@endsection