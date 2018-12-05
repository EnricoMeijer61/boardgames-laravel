<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('home')}}">{{config('app.name', '999GAMES')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li>
                <a class="nav-link" href="{{route('home')}}">Home</a>
            </li>
            <li>
                <a class="nav-link" href="{{route('home')}}">Battle</a>
            </li>
        </ul>
    </div>
    {{--<div>--}}
        {{--<ul class="navbar-nav">--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{route('login')}}">Log in</a>--}}
            {{--</li>--}}
            {{--<li align="right" class="nav-item-right">--}}
                {{--<a class="nav-link" href="{{route('register')}}">Registreren</a>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</div>--}}
</nav>
