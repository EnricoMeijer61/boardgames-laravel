@extends ('layout.master')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            Edit Game
        </div>
        <div>
            <form method="POST" action="/users/{{ $user->id }}">
                @csrf
                @method('PATCH')
                <div>
                    <input type="text" name="fname"  value="{{ $user->fname }}" placeholder="Voornaam">
                </div>
                <div>
                    <input type="text" name="lname"  value="{{ $user->lname }}"placeholder="Achternaam">
                </div>
                <div>
                    <input type="email" name="email"  value="{{ $user->email }}"placeholder="Email">
                </div>
                <div>
                    <input type="password" name="password" value="{{ $user->password }}" placeholder="Wachtwoord">
                </div>
                <div>
                    <input type="text" name="weight" value="{{ $user->weight }}"placeholder="Gewicht">
                </div>
                <div>
                    <input type="text" name="role" value="{{ $user->role }}"placeholder="Soort gebruiker">
                </div>
                <div>
                <button type="submit">edit</button>
                </div>
            </form>
        </div>
    </div>
@endsection




