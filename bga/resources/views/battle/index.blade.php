@extends('layout.master')
    @section('content')
        <div class="text-center">
        <h1>Battle</h1>
            <p>Vult in wie het bordspel heeft gewonnen, <br> welke game je hebt gespeeld en wie
            je tegenstander(s) was/waren.</p>
        </div>

    {!! Form::open(['route' => 'battle.store', 'method' => 'POST']) !!}
    {{csrf_field()}}
    <div class="container-fluid ">
        <div class="collumn">
            <div class="col-12">
                <div class="form-group">
                    <div class="col-md-12 text-center">
                    <strong>Winnaar(*) </strong>
                            <select class="form-control" name="winnaar">
                                <option class ="form-control "></option>
                                @foreach($users as $user)
                                    <option class ="form-control" value="{{ $user->fname }}">{{ $user->fname }}</option>
                                @endforeach
                            </select>
                        </div>
                    <div class="col-md-12 text-center">
                        <strong>Game(*)</strong>
                        <select class="form-control" name="game">
                            <option class ="form-control"></option>
                            @foreach($gamedetails as $game)
                                <option class ="form-control" value="{{ $game->name }}">{{ $game->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12 text-center">
                        <strong>tegenstander 1(*) </strong>
                        <select class="form-control" name="lost">
                            <option class ="form-control"></option>
                            @foreach($users as $user)
                                <option class ="form-control" value="{{ $user->fname }}">{{ $user->fname }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12 text-center">
                        <strong>tegenstander 2 </strong>
                        <select class="form-control" name="lost02">
                            <option class ="form-control"></option>
                            @foreach($users as $user)
                                <option class ="form-control" value="{{ $user->fname }}">{{ $user->fname }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12 text-center">
                        <strong>tegenstander 3 </strong>
                        <select class="form-control" name="lost03">
                            <option class ="form-control"></option>
                            @foreach($users as $user)
                                <option class ="form-control" value="{{ $user->fname }}">{{ $user->fname }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col- text-center">
                        <br>
                        <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
                    </div>
                    <p>Invoervelden met een * zijn verplicht.</p>
                </div>
            </div>
        </div>
        <br>
    </div>
    {!! Form::close() !!}
@endsection
