<header>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark text-white">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link py-3 {{ Route::currentRouteName() === 'home' ? 'active' : '' }}"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-3 {{ Route::currentRouteName() === 'movies' ? 'active' : '' }}"
                            href="{{ route('movies') }}">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-3" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-3" href="#">Contacts</a>
                    </li>
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

</header>
