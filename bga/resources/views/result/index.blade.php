@extends('layout.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2>Alle games</h2>
            <p>Dit zijn alle games die we hebben op onze website.
            staat you spel er niet tussen neem dan contact op net onze admin's</p>
        </div>
    </div>
    <div class="text-center">
    <br>
        <table class="table-striped  text-center table-bordered table">
            <tr>
                <th class="text-center">Naam</th>
                <th class=" text-center">Aantal spelers</th>
                <th class=" text-center">Speeltijd(in minuten)</th>
                <th class=" text-center">beschrijving</th>
                @if ( Auth::user() )
                    <th></th>
                @endif
            </tr>
        @foreach ($gamedetails as $gamedetail)

            <tr>
                <td>{{ $gamedetail->name }}</td>
                <td>{{ $gamedetail->nop }}</td>
                <td>{{ $gamedetail->duration }}</td>
                <td>{{ $gamedetail->description }}</td>
                    <td>
                        <a class="btn btn-xs btn primary" href="{{ route('gamedetails.edit', $gamedetail->id) }}">Edit</a>
                        {!! Form::open(['method'=> 'DELETE', 'route'=>['gamedetails.destroy', $gamedetail->id],'style'=> 'display:inline']) !!}
                        {!! Form::submit('Delete',['class'=>'btn btn-xs btn-danger' ]) !!}
                        {!! Form::close() !!}
                    </td>

            </tr>

            @endforeach
        </table>
    </div>
@endsection
