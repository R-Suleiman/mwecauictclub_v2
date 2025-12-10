<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-dark nav-modern sticky-top shadow-sm">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center gap-2">
            <img class="img-fluid rounded-circle d-none d-md-block d-sm-block" src="../../img/logo.png"
                style="width: 90px; border:none;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu"
            aria-controls="navmenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link nav-link-modern">Home</a></li>
                <li class="nav-item"><a href="{{ route('about.page') }}" class="nav-link nav-link-modern">About Us</a></li>
                <li class="nav-item"><a href="{{ route('department.page') }}" class="nav-link nav-link-modern">Our Divisions</a></li>
                <li class="nav-item"><a href="{{ route('contact.page') }}" class="nav-link nav-link-modern">Contact Us</a></li>
            </ul>
            <div class="d-flex align-items-center gap-2 ms-lg-3 mt-3 mt-lg-0">
                @guest
                    @if (Route::has('login'))
                        <a class="btn btn-ghost text-light px-3" href="{{ route('login') }}">Login</a>
                    @endif
                    @if (Route::has('register'))
                        <a class="btn btn-modern px-3" href="{{ route('register') }}">Register</a>
                    @endif
                @else
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="userMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->fullname }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenuButton">
                            <li class="dropdown-item-text fw-semibold">{{ Auth::user()->registration_number }}</li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </li>
                        </ul>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                @endguest
            </div>

        </div>
    </div>
</nav>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const navMenu = document.getElementById('navmenu');
        if (!navMenu || typeof bootstrap === 'undefined') return;

        const navLinks = navMenu.querySelectorAll('.nav-link, .dropdown-item');
        const navCollapse = new bootstrap.Collapse(navMenu, { toggle: false });

        navLinks.forEach((link) => {
            link.addEventListener('click', () => {
                if (navMenu.classList.contains('show')) {
                    navCollapse.hide();
                }
            });
        });
    });
</script>
<!--End Navbar-->
