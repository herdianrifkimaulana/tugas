<nav class="navbar navbar-expand-lg bg-warning navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="/asset/logo/logo.png" alt="Logo" style="width: 50px; height: 50px;" />
            Burger Draken
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Menu selalu tersedia -->
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('contact.form') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('menu') }}">Menu</a>
                </li>

                <!-- Menu untuk pengguna yang sudah login -->
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.create') }}">Create Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories.create') }}">Create Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.index') }}">Show</a>
                    </li>
                @endauth
            </ul>

            <!-- Keranjang -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cart.index') }}" id="cart-icon">
                        <img src="/asset/icon/keranjang.png" alt="Cart" style="width: 30px; height: 30px;">
                        <!-- Menampilkan jumlah item dari session cart_items_count -->
                        <span id="cart-count" class="badge bg-danger">
                            {{ session('cart_items_count', 0) }} <!-- Jika tidak ada, tampilkan 0 -->
                        </span>
                    </a>
                </li>

                <!-- Authentikasi -->
                <li class="nav-item dropdown">
                    @auth
                        <!-- Dropdown untuk pengguna yang sudah login -->
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

                        <!-- Form logout -->
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <!-- Dropdown untuk pengguna yang belum login -->
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Tamu
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="{{ route('login') }}">Log in</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                            </li>
                        </ul>
                    @endauth
                </li>
            </ul>
        </div>
    </div>
</nav>
