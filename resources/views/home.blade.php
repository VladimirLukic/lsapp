@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- <h3>{{ __('You are logged in!') }}</h3> --}}
                    <h3>{{ __($user->name."'s posts") }}</h3>

                </div>
                @if (count($user->posts)>0)
                    <table class="table">
                        <tr scope='column'>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($user->posts as $post)
                            <tr scope='row'>
                                <td>{{$post->title}}</td>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                                <td>
                                    <form class='float-end' method="POST" action="/posts/{{$post->id}}">
                                    @csrf
                                    {{-- na ovaj nacin ubacujemo metodu 'PUT', 'PATCH' i 'DELETE' u Laravelu --}}
                                        @method('DELETE') 
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                            </tr>
                        @endforeach
                    </table>
                @else
                    <h3>You have no posts!</h3>   
                @endif

                <div class="card-body">
                    <a class="btn btn-primary" href="/posts/create">Create Post</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
