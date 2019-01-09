@extends('layout.master')

@section('content')
    <br>
    <div class="container">
        <div class="row">
            <img class='img-fluid w-100' src="{{ $message->image }}" alt="" />
        </div>
    </div>
    <br>
    <div class="text-center">
        <h1>{{ $message->title }}</h1>
    </div>
    <div>
        <p>{{ $message->description }}</p>
    </div>

    @endsection
