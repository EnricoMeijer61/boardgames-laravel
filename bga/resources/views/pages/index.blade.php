@extends('layout.master')

@section('content')

    <div class="row">
        <div class="text-center jumbotron col-8">
            <h1>Welkom bij het NK Carcassonne 2019!</h1>
            <br>
            <p>Via deze website kun jij je voortgang binnen het NK volgen en bijhouden.</p>
            <p>Nog geen account? <a class="nav-link" href="{{route('register')}}">Registreer je hier!</a></p>
        </div>
        <div class="col-4">
            @foreach ($messages as $message)
                <div class="card text-center">
                    <p>{{ $message->title }} </p>
                    <p>{{ $message->short_description }} </p>
                    <a class="btn btn-xs btn primary" href="{{ route('message.show', $message->id) }}">Lees meer</a>
                    {{--@if(Auth::admin()->user_role == "role")--}}
                    <a class="btn btn-xs btn primary" href="{{ route('message.edit', $message->id) }}">Edit</a>
                    {!! Form::open(['method'=> 'DELETE', 'route'=>['message.destroy', $message->id],'style'=> 'display:inline']) !!}
                    {!! Form::submit('Delete',['class'=>'btn btn-xs btn-danger' ]) !!}
                    {!! Form::close() !!}
                    {{--@endif--}}
                </div>
                <br>
            @endforeach
        </div>
    </div>
@endsection
