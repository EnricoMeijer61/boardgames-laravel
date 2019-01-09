@extends('layout.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2>Alle games</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vitae ipsum non aliquet. Sed posuere, nisi
                vel condimentum ullamcorper, justo lectus posuere urna, a finibus justo massa sed metus. Curabitur sed feugiat urna.
                Suspendisse sagittis accumsan egestas. Proin pretium hendrerit augue et pulvinar.</p>
        </div>
    </div>
    @if ($message = Session::get('succes'))
        <div class="alert alert-succes">
            <p>{{$message}}</p>
        </div>
    @endif
    <div class="text-center">
    <br>
        @foreach ($gamedetails as $gamedetail)

            <p> {{ $gamedetail->name }}</p>

            @endforeach
        <div class="col-lg-12 text-center">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vitae ipsum non aliquet. Sed posuere, nisi
                vel condimentum ullamcorper, justo lectus posuere urna, a finibus justo massa sed metus. Curabitur sed feugiat urna.
                Suspendisse sagittis accumsan egestas. Proin pretium hendrerit augue et pulvinar.</p>
        </div>
    </div>
    <div class="row">
        <div class="col=sm-12">
            <div class="pull-right">
                <a class="btn btn-xs btn-succes" href="{{ route('gamedetails.create') }}">Nieuwe bordgame toevoegen</a>
            </div>
        </div>
    </div>
@endsection
