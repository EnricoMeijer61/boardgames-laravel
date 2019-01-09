@extends('layout.master')

@section('content')

    <div class="row">
        <div class="text-center col-8">
            <h1>Welkom bij Boardgames!</h1>
            <br>
            <p>Via deze website kun jij je boardgames spelen.</p>
            <p>Nog geen account? <a class="nav-link" href="{{route('register')}}">Registreer je hier!</a></p>
        </div>
    </div>
@endsection
