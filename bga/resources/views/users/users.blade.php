@extends ('layout.master')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            <h1 class="text-center">Users</h1>
        </div>
        <br>
        <div>
            <table class="table-striped  text-center table-bordered table">
                <tr>
                    <th class="text-center">fname</th>
                    <th class=" text-center">lname</th>
                    <th class=" text-center">email</th>
                    <th class=" text-center">weight</th>
                    <th class=" text-center">role</th>
                </tr>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->fname }}</td>
                        <td>{{ $user->lname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->weight }}</td>
                        <td>{{ $user->role }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection