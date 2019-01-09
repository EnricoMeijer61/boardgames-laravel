@extends('layout.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h3>Resultaat details</h3><a class="btn btn-xs btn primary" href="{{ route('gamedetails.index') }}">Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <strong>Speeltijd :</strong>
                {{ $gamedetail->playtime }}
            </div>
        </div>
        <div class="col-xs-12">
            <div class="form-group">
                <strong>Tafel :</strong>
                {{ $gamedetail->table }}
            </div>
        </div>
        <div class="col-xs-12">
            <div class="form-group">
                <strong>Rondes :</strong>
                {{ $gamedetail->round }}
            </div>
        </div>
        <div class="col-xs-12">
            <div class="form-group">
                <strong>Beschrijving :</strong>
                {{ $gamedetail->description }}
            </div>
        </div>
        <div class="col-xs-12">
            <div class="form-group">
                <strong>speler 1 :</strong>
                {{ $gamedetail->user01 }}
            </div>
        </div>
        <div class="col-xs-12">
            <div class="form-group">
                <strong>Speler 1 punten :</strong>
                {{ $gamedetail->points01 }}
            </div>
        </div>
        <div class="col-xs-12">
            <div class="form-group">
                <strong>speler 2 :</strong>
                {{ $gamedetail->user02 }}
            </div>
        </div>
        <div class="col-xs-12">
            <div class="form-group">
                <strong>Speler 2 punten :</strong>
                {{ $gamedetail->points02 }}
            </div>
        </div>
        <div class="col-xs-12">
            <div class="form-group">
                <strong>speler 3 :</strong>
                {{ $gamedetail->user03 }}
            </div>
        </div>
        <div class="col-xs-12">
            <div class="form-group">
                <strong>Speler 3 punten :</strong>
                {{ $gamedetail->points03 }}
            </div>
        </div>
        <div class="col-xs-12">
            <div class="form-group">
                <strong>speler 4 :</strong>
                {{ $gamedetail->user04 }}
            </div>
        </div>
        <div class="col-xs-12">
            <div class="form-group">
                <strong>Speler 4 punten :</strong>
                {{ $gamedetail->points04 }}
            </div>
        </div>
    </div>


@endsection
