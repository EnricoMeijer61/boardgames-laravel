@extends('layout.master')

@section('content')
    <div class="row">
        <div class="text-center">
            <h1>Welkom bij het NK Carcassonne 2019!</h1>
            <br>
            <p>Via deze website kun jij je voortgang binnen het NK volgen en bijhouden.</p>
            <p>Nog geen account? <a class="nav-link" href="{{route('register')}}">Registreer je hier!</a></p>
        </div>
    </div>
@endsection
