<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">Inicio <span class="sr-only">(current)</span></a>
                </li>
                @guest('web')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Ingresar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Registrarse</a>
                </li>
                @endguest

                @auth('web')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                @endauth
            </ul>
            @auth('web')
            <form class="form-inline" method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-link text-decoration-none" type="submit">Salir</button>
            </form>
            @endauth
        </div>
    </div>
</nav>
