<header class="p-3 text-bg-dark mb-3">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
            </ul>

            <div class="text-end">
                @if(Auth::check())
                    <a href="{{ url('logout') }}" class="btn btn-outline-light me-2">Logout</a>
                @else
                    <a href="{{ url('register') }}" class="btn btn-outline-light me-2">Register</a>
                    <a href="{{ url('login') }}" class="btn btn-outline-light me-2">Login</a>
                @endif
            </div>
        </div>
    </div>
</header>