<div class="blue-bar"></div>
<div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        {{-- <a class="navbar-brand" href="#">DC</a> --}}
        <div class="logo">
            <img src="{{ Vite::asset('resources/assets/img/dc-logo.png') }}" alt="DC Logo">
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-uppercase fw-bold">
                <li class="nav-item">
                    <a class="nav-link" href="#">characters</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">comics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">movies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">tv</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">games</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">collectibles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">fans</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">news</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    shop
                    </a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>
</div>