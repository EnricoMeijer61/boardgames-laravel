@extends ('layout.master')
@section('content')

    <a href="{{ route('message.create')}}">Maak een nieuwsbericht aan</a>
    <a href="{{ route('register')}}">Gebruiker aanmaken</a>
    @endsection
