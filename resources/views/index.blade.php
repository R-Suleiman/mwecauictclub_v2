@extends('layouts.web')

@section('content')
{{-- hero --}}
    <section class="hero-modern py-5">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <span class="pill-label mb-3 d-inline-flex align-items-center">
                        <i class="fas fa-bolt me-2"></i> Mwenge Catholic University ICT Club
                    </span>
                    <h1 class="display-4 fw-bold text-white lh-tight">Build, secure, design & deploy together.</h1>
                    <p class="lead text-light opacity-75 mt-3">
                        A future-focused community turning ideas into products through programming, cybersecurity,
                        design, maintenance, and robotics.
                    </p>
                    <div class="d-flex flex-wrap gap-3 mt-4">
                        <a href="{{ route('register') }}" class="btn btn-modern px-4 py-2">
                            Join our community
                        </a>
                        <a href="#news" class="btn btn-ghost text-light px-4 py-2">
                            See updates
                        </a>
                    </div>
                    <div class="d-flex flex-wrap gap-3 mt-4 hero-stats">
                        <div class="stat-chip">
                            <i class="fas fa-users"></i>
                            <span>Inclusive, student-led</span>
                        </div>
                        <div class="stat-chip">
                            <i class="fas fa-microchip"></i>
                            <span>4 skill tracks</span>
                        </div>
                        <div class="stat-chip">
                            <i class="fas fa-rocket"></i>
                            <span>Hands-on projects</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="hero-grid">
                        <div class="glass-card">
                            <div class="badge-soft mb-2"><i class="fas fa-code me-2"></i>Programming</div>
                            <p class="mb-0 text-light-70">Ship real apps, automation scripts, and MVPs with peers.</p>
                        </div>
                        <div class="glass-card">
                            <div class="badge-soft mb-2"><i class="fas fa-shield-alt me-2"></i>Cyber & Networking</div>
                            <p class="mb-0 text-light-70">Secure networks, practice blue team drills, and harden systems.</p>
                        </div>
                        <div class="glass-card">
                            <div class="badge-soft mb-2"><i class="fas fa-pen-nib me-2"></i>Graphics & UI</div>
                            <p class="mb-0 text-light-70">Design interfaces and brand visuals that feel premium.</p>
                        </div>
                        <div class="glass-card">
                            <div class="badge-soft mb-2"><i class="fas fa-tools me-2"></i>Maintenance</div>
                            <p class="mb-0 text-light-70">Keep labs reliable with troubleshooting, repair, and tuning.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- about --}}
    <section class="section-shell py-5">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-5">
                    <span class="pill-label mb-3 d-inline-flex align-items-center">
                        <i class="fas fa-globe-africa me-2"></i> About the club
                    </span>
                    <h2 class="text-dark fw-bold lh-tight mb-3">Welcome to the Mwenge Catholic University ICT Club!</h2>
                    <p class="mb-4 text-muted">
                        We are a community of technology enthusiasts dedicated to learning, innovating, and collaborating.
                        Expect weekly labs, peer mentorship, hack nights, design critiques, and real deployments that grow
                        your portfolio.
                    </p>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="chip">Weekly meetups</span>
                        <span class="chip">Peer mentoring</span>
                        <span class="chip">Career-ready projects</span>
                        <span class="chip">Cert prep support</span>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="feature-card h-100">
                                <div class="feature-icon bg-primary-subtle text-primary">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <h5 class="fw-bold mb-2">Skill accelerators</h5>
                                <p class="text-muted mb-0">Deep dives into programming, networking, graphics, and maintenance with mentors.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card h-100">
                                <div class="feature-icon bg-success-subtle text-success">
                                    <i class="fas fa-people-arrows"></i>
                                </div>
                                <h5 class="fw-bold mb-2">Collaboration first</h5>
                                <p class="text-muted mb-0">Pair up on real briefs, present demos, and get feedback that levels you up.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card h-100">
                                <div class="feature-icon bg-warning-subtle text-warning">
                                    <i class="fas fa-lightbulb"></i>
                                </div>
                                <h5 class="fw-bold mb-2">Innovation culture</h5>
                                <p class="text-muted mb-0">Prototype ideas quickly—AI, IoT, robotics, and more are welcome.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card h-100">
                                <div class="feature-icon bg-danger-subtle text-danger">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <h5 class="fw-bold mb-2">Community & impact</h5>
                                <p class="text-muted mb-0">Serve campus and local partners with tech that matters.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Departments -->
    <section class="section-shell py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
                <div>
                    <span class="pill-label mb-2 d-inline-flex align-items-center">
                        <i class="fas fa-layer-group me-2"></i> Departments
                    </span>
                    <h3 class="fw-bold mb-1 text-dark">Pick your craft, explore them all.</h3>
                    <p class="text-muted mb-0">Hands-on tracks guided by peers and mentors.</p>
                </div>
                <a href="{{ route('register') }}" class="btn btn-modern px-3">Become a member</a>
            </div>
            <div class="row g-4">
                @foreach ($departments as $department)
                    @php
                        $cover = $department['dept_cover'] ?? 'img/pro.jpg';
                    @endphp
                    <div class="col-12 col-md-6 col-lg-3">
                        <a href="{{ route('single-department.page', $department['dept_name']) }}"
                            class="text-decoration-none">
                            <div class="department-card" style="background-image: url('{{ asset($cover) }}')">
                                <div class="department-overlay">
                                    <p class="badge-soft mb-2">{{ $department['dept_name'] }}</p>
                                    <h5 class="text-white fw-bold">{{ \Illuminate\Support\Str::words($department['dept_description'], 6, '...') }}</h5>
                                    <p class="mb-0 text-white-50">{{ \Illuminate\Support\Str::limit($department['dept_description'], 90, '...') }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Projects -->
    <section class="section-shell py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
                <div>
                    <span class="pill-label mb-2 d-inline-flex align-items-center">
                        <i class="fas fa-rocket me-2"></i> Ongoing projects
                    </span>
                    <h3 class="fw-bold mb-1 text-dark">Build a portfolio that speaks for you.</h3>
                    <p class="text-muted mb-0">Real deliverables, shipped as a team.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="project-card h-100">
                        <div class="project-thumb" style="background-image: url('img/pro.jpg');"></div>
                        <div class="project-body">
                            <div class="d-flex gap-2 mb-2 flex-wrap">
                                <span class="chip chip-soft">Laravel</span>
                                <span class="chip chip-soft">Bootstrap</span>
                                <span class="chip chip-soft">JS</span>
                            </div>
                            <h5 class="fw-bold mb-1">Web development project</h5>
                            <p class="text-muted mb-3">E-commerce, blogs, and informational sites to solve campus needs.</p>
                            <span class="badge-soft">Educational website</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="project-card h-100">
                        <div class="project-thumb" style="background-image: url('img/c.png');"></div>
                        <div class="project-body">
                            <div class="d-flex gap-2 mb-2 flex-wrap">
                                <span class="chip chip-soft">Robotics</span>
                                <span class="chip chip-soft">C/C++</span>
                            </div>
                            <h5 class="fw-bold mb-1">Robotics project</h5>
                            <p class="text-muted mb-0">Build bots, program controllers, and test in real scenarios.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="project-card h-100">
                        <div class="project-thumb" style="background-image: url('img/cybersec_640.jpg');"></div>
                        <div class="project-body">
                            <div class="d-flex gap-2 mb-2 flex-wrap">
                                <span class="chip chip-soft">Security</span>
                                <span class="chip chip-soft">IoT</span>
                            </div>
                            <h5 class="fw-bold mb-1">Home appliance projects</h5>
                            <p class="text-muted mb-0">Explore cybersecurity and automation for smart, safer homes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Membership -->
    <section class="section-shell py-5" id="membership">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="membership-card h-100">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <span class="pill-label mb-2 d-inline-flex align-items-center">
                                    <i class="fas fa-id-card me-2"></i> Membership categories
                                </span>
                                <h3 class="fw-bold mb-0">Find your place, start building.</h3>
                            </div>
                            <a href="{{ route('register') }}" class="btn btn-modern btn-sm">Join now</a>
                        </div>
                        <p class="mb-4">Choose the path that fits you. All members collaborate on cross-track projects.</p>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="membership-pill">
                                    <i class="fas fa-award me-2 text-warning"></i> Honorary membership
                                    <p class="small mb-0">Computer science and ICT students leading the way.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="membership-pill">
                                    <i class="fas fa-handshake me-2 text-info"></i> Associate members
                                    <p class="small mb-0">Individuals or institutions supporting the club.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="membership-pill">
                                    <i class="fas fa-user-graduate me-2 text-success"></i> Expert members
                                    <p class="small mb-0">Graduates sharing advanced knowledge and mentorship.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="membership-pill">
                                    <i class="fas fa-lightbulb me-2 text-primary"></i> Contributors
                                    <p class="small mb-0">Designers, writers, and volunteers helping launches succeed.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="video-card">
                        <div class="ratio ratio-16x9">
                            <iframe class="video-border" src="https://www.youtube.com/embed/Dm-5LJc03rM"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                        <div class="d-flex gap-2 flex-wrap mt-3">
                            <span class="chip chip-soft">Workshops</span>
                            <span class="chip chip-soft">Bootcamps</span>
                            <span class="chip chip-soft">Showcases</span>
                            <span class="chip chip-soft">Community</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News and Feeds -->
    <section class="section-shell py-5" id="news">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
                <div>
                    <span class="pill-label mb-2 d-inline-flex align-items-center">
                        <i class="fas fa-broadcast-tower me-2"></i> News & Feeds
                    </span>
                    <h3 class="fw-bold mb-1 text-dark">Stay updated with our latest events.</h3>
                    <p class="text-muted mb-0">Workshops, demos, and community moments.</p>
                </div>
                <a href="{{ route('register') }}" class="btn btn-ghost text-primary">Subscribe</a>
            </div>
            <div class="row g-4">
                <div class="col-12 col-lg-8">
                    <div class="news-scroll">
                        @if ($news->count() > 0)
                            @foreach ($news as $item)
                                <div class="news-modern card mb-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div>
                                                <h5 class="card-title text-uppercase mb-1">{{ $item->event_name }}</h5>
                                                <span class="text-muted small">{{ $item->event_date }}</span>
                                            </div>
                                            <span class="chip chip-soft">Event</span>
                                        </div>
                                        <p class="card-text mt-3 mb-3">{{ $item->event_description }}</p>
                                        <a href="{{ route('event.details', $item->id) }}" class="btn btn-modern btn-sm">Read more</a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="text-muted">No news yet. Stay tuned for upcoming events.</div>
                        @endif
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="side-card h-100">
                        <h5 class="fw-bold mb-2 text-dark">Why join?</h5>
                        <ul class="list-unstyled mb-0 text-muted">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Access mentors & peers</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Build with modern stacks</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Showcase your portfolio</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Serve real community needs</li>
                        </ul>
                        <a href="{{ route('register') }}" class="btn btn-modern btn-sm mt-3">Join the next intake</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section class="section-shell py-5">
        <div class="container">
            <div class="text-center mb-4">
                <span class="pill-label mb-2 d-inline-flex align-items-center">
                    <i class="fas fa-users me-2"></i> Meet the team
                </span>
                <h3 class="fw-bold text-dark">Leaders, mentors, and makers.</h3>
                <p class="text-muted mb-0">Connect with the people behind the club’s momentum.</p>
            </div>
            <div class="team-slider row">
                @foreach ($teamMembers as $member)
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="team-card text-center">
                            @if ($member->profile_image)
                                <div class="team-member-img">
                                    <img src="{{ asset($member->profile_image) }}"
                                        class="shadow-lg mb-4 img-fluid rounded mx-auto" alt="{{ $member->name }}">
                                </div>
                            @else
                                <div class="team-member-img">
                                    <img src="{{ asset('../public/img/logo.png') }}"
                                        class="shadow-lg mb-4 img-fluid rounded mx-auto" alt="{{ $member->name }}">
                                </div>
                            @endif
                            <div class="card-body text-center">
                                <div class="fw-bold">{{ $member->name }}</div>
                                <div class="text-info fst-italic mb-2">{{ $member->title }}</div>
                                <p class="text-light-70 mb-3">{{ $member->professionalism }}</p>
                                <div class="social-icons">
                                    <a href="{{ $member->x ?? '#' }}"><i class="fab fa-twitter fs-4"></i></a>
                                    <a href="{{ $member->whatsApp ?? '#' }}"><i class="fab fa-whatsapp mx-1 fs-4"></i></a>
                                    <a href="{{ $member->email ? 'mailto:'.$member->email : '#' }}"><i
                                            class="fab fa-google mx-1 fs-4"></i></a>
                                    <a href="{{ $member->facebook ?? '#' }}"><i class="fab fa-facebook-f mx-1 fs-4"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Partners -->
    <section class="section-shell py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
                <div>
                    <span class="pill-label mb-2 d-inline-flex align-items-center">
                        <i class="fas fa-handshake me-2"></i> Our partners
                    </span>
                    <h4 class="fw-bold text-dark mb-0">Collaborating for bigger impact.</h4>
                </div>
            </div>
            <div class="row g-3 align-items-center partner-row">
                <div class="col-6 col-md-3 d-flex justify-content-center">
                    <div class="partner-card">
                        <img src="img/mwecau.png" alt="Partner" class="img-fluid">
                    </div>
                </div>
                <div class="col-6 col-md-3 d-flex justify-content-center">
                    <div class="partner-card">
                        <img src="img/misitu2.png" alt="Partner" class="img-fluid rounded-circle">
                    </div>
                </div>
                <div class="col-6 col-md-3 d-flex justify-content-center">
                    <div class="partner-card">
                        <img src="img/univer.jpg" alt="Partner" class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-6 col-md-3 d-flex justify-content-center">
                    <div class="partner-card">
                        <img src="img/ternet.png" alt="Partner" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
