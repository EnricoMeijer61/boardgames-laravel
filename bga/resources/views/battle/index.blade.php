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
                            <select>
                                @foreach($users as $user)
                                <option class ="form-control" value="{{ $user->fname }}">
                                @endforeach
                            </select>
                        </div>




                </div>
            </div>
        </div>
        <br>
    </div>
    {!! Form::close() !!}
@endsection
{{--@foreach($users as $user)--}}
{{--{{ $user->fname }}--}}
{{--@endforeach--}}
{{--{!! Form::text('name', null, ['placeholder' =>'Naam game', 'class' => 'form-control'] ) !!}--}}