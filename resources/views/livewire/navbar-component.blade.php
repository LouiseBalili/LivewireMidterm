<div>
    <nav class="navbar navbar-expand-lg navbar-light py-3" style="background-color: #191919;">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('music.png') }}" width="40" height="40" alt="MusicBarLogo">
            </a>
            <a class="navbar-brand text-light fs-semibold" href="{{ url('/') }}" style="font-family: 'Rockwell'; font-size: 24px;">MusicBar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0 d-flex align-items-center">
                    <li class="nav-item">
                        <a class="nav-link text-light mx-2" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light mx-2" aria-current="page" href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light mx-2" aria-current="page" href="{{ url('/featured') }}">Featured</a>
                    </li>
                </ul>

                <div class="flex items-center">
                    <button class="btn btn-outline-primary" style="margin-right: 5px;">
                        <a href="{{ url('/signup') }}" class="text-decoration-none text-primary">Sign up</a>
                        </button>
                    <button class="btn btn-outline-secondary" style="margin-right: 5px;">
                        <a href="{{ url('/login') }}" class="text-decoration-none text-secondary">Log in</a>
                        </button>
                </div>
            </div>
        </div>
    </nav>
</div>

<style>
.navbar-nav {
    height: 100%;
}

.navbar-nav > li {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 10px;
    height: 100%;
}

.navbar-nav > li > a {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
}

.btn-outline-primary:hover a,
.btn-outline-secondary:hover a {
  color: #f8f9fa !important;
}
</style>
