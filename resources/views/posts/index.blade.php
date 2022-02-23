@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card">
                <h3><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h3>
                <p>{{ $post->body }}</p>
                <small>posted at {{ $post->created_at }}</small>
            </div>            
        @endforeach
        {{-- dodaje link za stranice na dnu --}}
        {{ $posts->links() }}  
    @else
        <h3>There are no posts</h3>
    @endif
@endsection