@extends('layouts.app')

@section('content')
    <h1 class="text-center py-5">Contact Us</h1>
    <div class="container">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="your@email.">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write a message"></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Send</button>
        </div>
    </div>
@endsection
