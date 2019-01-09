@extends('layout.master')

@section('content')
    <h1>Toernooi aanmaken</h1>
    <form method="POST" action="/tournaments">

        {{ csrf_field() }}


        <div>
            <input type="text" name="title" placeholder="Toernooi titel">
        </div>
        <br>
        <div>
            <textarea name="description" placeholder="Toernooi omschrijving"></textarea>
        </div>
        <br>
        <div>
            <input type="date" name="date" placeholder="date">
        </div>
        <div>
            <button type="submit">Aanmaken</button>
        </div>
    </form>
@endsection
