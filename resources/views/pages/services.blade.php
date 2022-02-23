@extends('layouts.app')

    @section('content')
    {{-- takes 'title' value from array $data --}}
        {{-- <h1>{{ $title }}</h1>   --}}
        <h1>{{ $title }}</h1>  
        <p>{{ $service }}</p>
        {{-- <p>{{ $services['data'] }}</p> --}}
        @if($services > 0)
        <ul class="list-group">
            @foreach($services as $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>
        @endif
    @endsection