@extends('layout.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2>Resultaten Overzicht</h2>
        </div>
    </div>
    <div class="row">
        <div class="col=sm-12">
            <div class="pull-right">
                <a class="btn btn-xs btn-succes" href="{{ route('gamedetails.create') }}">create new result</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('succes'))
        <div class="alert alert-succes">
            <p>{{$message}}</p>
        </div>
    @endif
    <table class="table-striped  text-center table-bordered table">
        <tr>
            <th>Tafel #</th>
            <th>Speler 1</th>
            <th>Speler 2</th>
            <th>Speler 3</th>
            <th>Speler 4</th>
            <th></th>
        </tr>
        @foreach ($gamedetails as $gamedetail)
            <tr>
                <td>{{++$i}}</td>
                <td>{{ $gamedetail->user01 }}</td>
                <td>{{ $gamedetail->user02 }}</td>
                <td>{{ $gamedetail->user03 }}</td>
                <td>{{ $gamedetail->user04 }}</td>
                <td>
                    <a class="btn btn-xs btn info" href="{{ route('gamedetails.show', $gamedetail->id) }}">Show</a>
                    <a class="btn btn-xs btn primary" href="{{ route('gamedetails.edit', $gamedetail->id) }}">Edit</a>

                    {!! Form::open(['method'=> 'DELETE', 'route'=>['gamedetails.destroy', $gamedetail->id],'style'=> 'display:inline']) !!}
                    {!! Form::submit('Delete',['class'=>'btn btn-xs btn-danger' ]) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
{{--    {!! $gamedetails->links() !!}--}}
@endsection
