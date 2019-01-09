@extends('layout.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center">
                <h3>Nieuwsbericht aanmaken</h3>
            </div>
        </div>
    </div>
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <strong>error</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(['route' => 'message.store', 'method' => 'POST']) !!}
    {{csrf_field()}}
    @include('message.form')
    {!! Form::close() !!}
@endsection
