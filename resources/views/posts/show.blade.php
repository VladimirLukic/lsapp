@extends('layouts.app')

@section('content')

    <a href="/posts" class="btn btn-secondary">Go Back</a>
    <p></p>
    <div class="card">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body  }}</p>
        {{-- <small>{{ $post->created_at }}</small>     --}}
        <small>{{ $post->created_at }} by {{ $post->user->name }}</small>    
    </div>
    <p></p>
    {{-- proverava da li je user ulogovan i prikazuje buttone ako nije guest --}}
    @if (!Auth::guest())
        {{-- proverava dodatno i koji user je u pitanju i shodno tome prikazuje buttone --}}
        @if (Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
            
            <form class='float-end' method="POST" action="/posts/{{$post->id}}">
                @csrf
                {{-- na ovaj nacin ubacujemo metodu 'PUT', 'PATCH' i 'DELETE' u Laravelu --}}
                    @method('DELETE') 
                <button class="btn btn-danger">Delete</button>
            </form>
        @endif
    @endif

@endsection