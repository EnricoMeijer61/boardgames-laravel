@extends('layout.master')
    @section('content')

    {!! Form::open(['route' => 'battle.store', 'method' => 'POST']) !!}
    {{csrf_field()}}
    <div class="container-fluid">
        <div class="collumn">
            <div class="col-">
                <div class="form-group">
                    <strong>Winnaar :</strong>
                        <div class="col-md-3">
                            <select name="winnaar">
                                @foreach($users as $user)
                                    <option class ="form-control" value="{{ $user->fname }}">{{ $user->fname }}</option>
                                @endforeach
                            </select>
                        </div>

                    <strong>Game :</strong>
                    <div class="col-md-3">
                        <select name="game">
                            @foreach($gamedetails as $game)
                                <option class ="form-control" value="{{ $game->name }}">{{ $game->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <strong>tegenstander 1 :</strong>
                    <div class="col-md-3">
                        <select name="lost">
                            @foreach($users as $user)
                                <option class ="form-control" value="{{ $user->fname }}">{{ $user->fname }}</option>
                            @endforeach
                        </select>
                    </div>
                    <strong>tegenstander 2 :</strong>
                    <div class="col-md-3">
                        <select name="lost02">
                            @foreach($users as $user)
                                <option class ="form-control" value="{{ $user->fname }}">{{ $user->fname }}</option>
                            @endforeach
                        </select>
                    </div>
                    <strong>tegenstander 3 :</strong>
                    <div class="col-md-3">
                        <select name="lost03">
                            @foreach($users as $user)
                                <option class ="form-control" value="{{ $user->fname }}">{{ $user->fname }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-">
                        <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
    {!! Form::close() !!}
@endsection
