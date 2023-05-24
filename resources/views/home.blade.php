@extends('layouts.app')

@section('content')
    <h1>Movie welcome</h1>
    @foreach ($movies as $movie)
        <ul>
            <li>{{ $movie['title'] }}</li>
        </ul>
    @endforeach
@endsection
