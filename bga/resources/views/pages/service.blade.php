@extends('layout.master')

@section('content')
    <h2>{{$title}}</h2>
    @if(count($games) > 0)
        <ul class="list-group">
            @foreach($games as $game)
                <li class="list-group-item">{{$game}}</li>
            @endforeach
        </ul>
    @endif
@endsection
