@extends('layout.master')

@section('content')
    {!! Form::open(['route' => 'games.store', 'method' => 'POST']) !!}
    {{csrf_field()}}
    @include('games.form')
    {!! Form::close() !!}
@endsection
