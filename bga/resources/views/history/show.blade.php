@extends('layout.master')

@section('content')
    <div class="text-center">
        <h1>Laatste Battle's</h1>
        <p>Hier zien je de laatste 20 battle's zien.<br>
        Welke game word er gespeeld?<br>
        Wie heeft er gewonnen?<br>
        Wie waren de tegenstanders<br></p>
    </div>
    <div>
        {{--table with the recent battles played, last played battles are on top.--}}
        <table class="table-striped  text-center table-bordered table">
            <tr>
                <th class="text-center">Winnaar</th>
                <th class=" text-center">Spel</th>
                <th class=" text-center">Tegenstander 1</th>
                <th class=" text-center">Tegenstander 2</th>
                <th class=" text-center">Tegenstander 3</th>
                @if ( Auth::user() )
                <th></th>
                    @endif
            </tr>
            @foreach($battles as $battle)
                <tr>
                    <td>{{ $battle->winnaar }}</td>
                    <td>{{ $battle->game }}</td>
                    <td>{{ $battle->lost }}</td>
                    <td>{{ $battle->lost02 }}</td>
                    <td>{{ $battle->lost03 }}</td>
                    @if ( Auth::user() )
                    <td>
                        {!! Form::open(['method'=> 'DELETE', 'route'=>['battle.destroy', $battle->id],'style'=> 'display:inline']) !!}
                        {!! Form::submit('Delete',['class'=>'btn btn-xs btn-danger' ]) !!}
                        {!! Form::close() !!}
                    </td>
                        @endif
                </tr>
            @endforeach
        </table>
    </div>
    @endsection
