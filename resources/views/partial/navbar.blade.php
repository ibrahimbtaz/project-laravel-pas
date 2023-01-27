<nav class="navbar navbar-expand-lg bg-dark sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="/about">Rumah Sakit</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link text-light" href="/pasien/all">Pasien</a>
                <a class="nav-link text-light" href="/dokter/all">Dokter</a>
                {{-- <a class="nav-link text-light" href="/admin/all">Admin</a> --}}
                {{-- <a class="nav-link text-light" href="/session/login/all">Login</a>
                <a class="nav-link text-light" href="/session/register/all">Register</a> --}}
                <a class="nav-link text-light" href="/about">About</a>
            </div>
        </div>
        {{-- <ul class="nav nav-pills">
            <li class="nav-item"><a href="/session/logout" class="nav-link active text-light">Logout</a></li>
        </ul> --}}
        <ul class="nav-pills navbar-nav ms-auto">
            @auth
                <li class="nav-link dropdown">
                    <a class="text-light nav-link dropdown-toggle bg-primary" href="#" role="button"
                        data-bs-toggle="dropdown">
                        Hi, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li> <a class="dropdown-item" href="/admin/all"><i
                                    class="bi bi-layout-text-sidebar-reverse">Dashboard</i></a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="/session/logout" method="get">
                                @csrf
                                <button type="submit" class="dropdown-item"><i
                                        class="bi bi-box-arrow-right">Logout</i></button>
                            </form>
                        </li>
                    </ul>
                </li>
            @else
                <li class="nav-item">
                    <a href="/session/login/all" class="text-light nav-link bg-primary bi bi-box-arrow-right">Login</a>
                </li>
            @endauth
        </ul>

    </div>
</nav>
