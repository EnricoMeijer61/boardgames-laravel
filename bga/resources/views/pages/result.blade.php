@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <br />
            <h2 aling="center">{{$title}}</h2>
            <br />
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div>
            @endif

            <form method="post" action="{{url('gamedetails')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Beschrijving game</label>
                    <input type="text" name="description" class="form-control" placeholder="Description" />
                </div>
                <div class="form-group">
                    <label>Duur game(in minuten)</label>
                    <input type="number" name="playtime" class="form-control" placeholder="playtime" />
                </div>
                <div class="form-group">
                    <label>Aantal spelers</label>
                    <input type="number" name="table" class="form-control" placeholder="table" />
                </div>
                <div class="form-group">
                    <label>Aantal rondes</label>
                    <input type="number" name="round" class="form-control" placeholder="round" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" />
                </div>
            </form>
        </div>
    </div>
@endsection

