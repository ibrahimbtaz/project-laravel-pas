<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow ">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/admin/all">Dashboard Admin</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search"
        aria-label="Search">
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="/session/logout">Sign out</a>
        </div>
    </div>

    <ul class="drop-admin navbar-nav ms-auto px-3">
        @auth
            <li class="nav-link dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                    Hi, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
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
                <a href="/sesion/login/create" class="bi bi-box-arrow-right">Login</a>
            </li>
        @endauth
    </ul>


</header>
