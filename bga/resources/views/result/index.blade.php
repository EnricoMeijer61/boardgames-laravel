@extends('layout.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2>Alle games</h2>
            <p>Dit zijn alle games die we hebben op onze website.
            staat you spel er niet tussen neem dan contact op net onze admin's</p>
        </div>
    </div>
    @if ($message = Session::get('succes'))
        <div class="alert alert-succes">
            <p>{{$message}}</p>
        </div>
    @endif
    <div class="text-center">
    <br>
        @foreach ($gamedetails as $gamedetail)

            <p> {{ $gamedetail->name }}</p>

            @endforeach
    </div>
    <div class="row">
        <div class="col=sm-12">
            <div class="pull-right">
                <a class="btn btn-xs btn-succes" href="{{ route('gamedetails.create') }}">Nieuwe bordgame toevoegen</a>
            </div>
        </div>
    </div>
@endsection
