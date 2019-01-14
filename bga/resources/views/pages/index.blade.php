@extends('layout.master')

@section('content')

    <div class="row">
        <div class="text-center col-12">
            <h1>Welkom bij Boardgames!</h1>
            <br>
            <p>Via deze website kun uw de uitslagen van uw boardgames bijhouden.</p>
            <p>Er zijn verschllende bordgames op deze website die je kan spelen, zit jou favorite bordgame er niet tussen?
            Voeg deze dan zelf toe! <br>
            Dit kan via de volgende link:</p>
            <a class="nav-link" href="{{route('gamedetails.create')}}">Game toevoegen!</a>
        </div>
    </div>
@endsection
