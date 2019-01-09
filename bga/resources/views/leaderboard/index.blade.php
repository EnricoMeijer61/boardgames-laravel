@extends ('layout.master')
<title>Leaderboard</title>
@section ('content')
    <div class="row">
        <div class="col-12">
            <br>
            <h2>Leaderboard</h2>
                <br>
                <table class="table-striped text-center table-bordered table">
                    <tr>
                        <th class="text-center">Rank</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Total score</th>
                    </tr>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{ $user->fname . ' ' .  $user->lname}}</td>
                            <td>{{ $user->weight}}</td>
                        </tr>
                    @endforeach
                </table>
        </div>
    </div>          
@endsection