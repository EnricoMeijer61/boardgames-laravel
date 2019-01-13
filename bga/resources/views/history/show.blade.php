@extends('layout.master')

@section('content')
    <div>
        <table class="table-striped  text-center table-bordered table">
            <tr>
                <th class="text-center">Winnaar</th>
                <th class=" text-center">Spel</th>
                <th class=" text-center">Tegenstander 1</th>
                <th class=" text-center">Tegenstander 2</th>
                <th class=" text-center">Tegenstander 3</th>
            </tr>
            @foreach($battles as $battle)
                <tr>
                    <td>{{ $battle->winnaar }}</td>
                    <td>{{ $battle->game }}</td>
                    <td>{{ $battle->lost }}</td>
                    <td>{{ $battle->lost02 }}</td>
                    <td>{{ $battle->lost03 }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    @endsection