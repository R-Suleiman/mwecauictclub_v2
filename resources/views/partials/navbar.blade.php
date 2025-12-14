<!--navbar-->
@php
    $user = Auth::user();

    if($user) {
        $dashboardRoute = match (true) {

            // ROOT USER
            $user->usertype === 'root'
                => route('AdminDashboard'),

            // ADMIN USER WITH DEPARTMENT
            $user->usertype === 'admin' && $user->admin && $user->admin->department
                => match ($user->admin->department->dept_name) {
                    'programming'        => route('programming.dashboard'),
                    'cyber security'     => route('cyberSecurity.department'),
                    'graphics designing' => route('graphics.dashboard'),
                    // default              => route('admin.dashboard'),
                },

            // NORMAL USER
            $user->usertype === 'user'
                => route('member.dashboard'),

            // FALLBACK
            default
                => route('login'),
        };
    }
@endphp



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
                    <a href="{{ $dashboardRoute }}"
                       class="btn btn-secondary rounded-circle gap-1"
                       >
                        <i class="fa fa-user"></i>
                    </a>
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
