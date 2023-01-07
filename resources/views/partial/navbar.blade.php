<nav class="navbar navbar-expand-lg bg-dark ">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="/">Rumah Sakit</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link text-light" href="/pasien/all">Pasien</a>
                <a class="nav-link text-light" href="/dokter/all">Dokter</a>
                {{-- <a class="nav-link text-light" href="/login/all">Login</a>
                <a class="nav-link text-light" href="/register/all">Register</a> --}}
                <a class="nav-link disabled text-light">About</a>
            </div>
        </div>
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/session/logout" class="nav-link active text-light">Logout</a></li>
        </ul>
    </div>
</nav>
