@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    <form method="POST" action="/poststore">
        @csrf
        <div class="input-group mb-3">
            <input name='title' type="text" class="form-control" placeholder="Title">
        </div>
        <div class="input-group">
            <textarea name='body' class="form-control" placeholder="Body"></textarea>
        </div>
        <p ></p>
            <button class="btn btn-primary">Submit</button>
    </form>
@endsection

