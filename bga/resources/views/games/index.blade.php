@extends('layout.master')

@section('content')
    <a class="btn btn-xs btn-succes" href="{{ route('games.create') }}">create new game</a>
    <div>
        <h1>Games</h1>
        <p>alle games</p>

        <ul>
            @foreach ($games as $game)
                <li>{{ $games->naam }}</li>
                @endforeach
        </ul>
    </div>
    @endsection