@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    <form method="POST" action="/posts/{{$post->id}}">
        @csrf
        <div class="input-group mb-3">
            <input name='title' type="text" class="form-control" value='{{$post->title}}'>
        </div>
        <div class="input-group">
            <textarea name='body' class="form-control">{{$post->body}}</textarea>
        </div>
        {{-- na ovaj nacin ubacujemo metodu 'PUT' ili 'PATCH' u Laravelu --}}
            @method('PUT') 
        <p ></p>
        <button class="btn btn-primary">Submit</button>
    </form>
@endsection