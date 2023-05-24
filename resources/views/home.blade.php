@extends('layouts.app')

@section('content')
    <h1>Movies</h1>

    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 g-3">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card h-100 border-0 shadow">
                        <div class="card-header">
                            <h3>{{ $movie['title'] }}</h3>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li><b>Original Title:</b> {{ $movie['original_title'] }}</li>
                                <li><b>Nationality:</b> {{ $movie['nationality'] }}</li>
                                <li><b>Date of Prod:</b> {{ $movie['date'] }}</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-primary text-white d-flex justify-content-between">
                            <p><b>Vote:</b> {{ $movie['vote'] }}</p>
                            <button type="button" class="btn btn-outline-info text-white">Watch Now</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
