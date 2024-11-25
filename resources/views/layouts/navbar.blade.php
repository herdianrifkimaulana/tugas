<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand">Restorant</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('users.create') }}">Create Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('categories.create') }}">Create Data</a>
                </li>
            </ul>
            @if (Auth::check())
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset(Auth::user()->profile_picture ?? 'default-profile.jpg') }}"
                            alt="{{ Auth::user()->name }}" class="rounded-circle me-2"
                            style="width: 40px; height: 40px;">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                    </ul>
                </div>

                <!-- Form logout tersembunyi -->
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
                <!-- Tampilkan link login dan register jika pengguna belum login -->
                <a class="btn btn-outline-primary me-2" href="{{ route('login') }}">Log in</a>
                <a class="btn btn-primary" href="{{ route('register') }}">Register</a>
            @endif
        </div>
    </div>
    </div>
</nav>
