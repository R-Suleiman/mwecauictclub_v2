@extends('layouts.web')
@section('content')
{{-- hero --}}
    <section class="hero-modern py-5">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <span class="pill-label mb-3 d-inline-flex align-items-center">
                        <i class="fas fa-compass me-2"></i> About Mwenge Catholic University ICT Club
                    </span>
                    <h1 class="display-4 fw-bold text-white lh-tight">Learn, build, and serve together.</h1>
                    <p class="lead text-light opacity-75 mt-3">
                        We empower students to explore programming, networking, graphics, maintenance, and cybersecurity
                        through hands-on practice, mentorship, and community impact.
                    </p>
                    <div class="d-flex flex-wrap gap-3 mt-4">
                        <a href="{{ route('register') }}" class="btn btn-modern px-4 py-2">Join the club</a>
                        <a href="#why-us" class="btn btn-ghost text-light px-4 py-2">Why join us</a>
                    </div>
                    <div class="d-flex flex-wrap gap-3 mt-4 hero-stats">
                        <div class="stat-chip">
                            <i class="fas fa-calendar-check"></i>
                            <span>Weekly labs & meetups</span>
                        </div>
                        <div class="stat-chip">
                            <i class="fas fa-hands-helping"></i>
                            <span>Mentors & peer support</span>
                        </div>
                        <div class="stat-chip">
                            <i class="fas fa-certificate"></i>
                            <span>Portfolio-ready work</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="hero-grid">
                        <div class="glass-card">
                            <div class="badge-soft mb-2"><i class="fas fa-code me-2"></i>Programming</div>
                            <p class="mb-0 text-light-70">From fundamentals to shipping apps and automation.</p>
                        </div>
                        <div class="glass-card">
                            <div class="badge-soft mb-2"><i class="fas fa-network-wired me-2"></i>Networking</div>
                            <p class="mb-0 text-light-70">Design and secure campus-grade networks.</p>
                        </div>
                        <div class="glass-card">
                            <div class="badge-soft mb-2"><i class="fas fa-pen-nib me-2"></i>Graphics & UI</div>
                            <p class="mb-0 text-light-70">Create visuals, brands, and interfaces that engage.</p>
                        </div>
                        <div class="glass-card">
                            <div class="badge-soft mb-2"><i class="fas fa-tools me-2"></i>Maintenance</div>
                            <p class="mb-0 text-light-70">Keep labs reliable with diagnostics and repairs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- mission --}}
    <section class="section-shell py-5">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <span class="pill-label mb-3 d-inline-flex align-items-center">
                        <i class="fas fa-bullseye me-2"></i> Our mission
                    </span>
                    <h2 class="text-dark fw-bold lh-tight mb-3">Learn, innovate, and create real-world impact.</h2>
                    <p class="text-muted mb-4">
                        We offer students a platform to explore and master ICT disciplines with peers and mentors.
                        Expect practical workshops, project sprints, design critiques, and security drills that build
                        confidence and capability.
                    </p>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="chip">Hands-on learning</span>
                        <span class="chip">Peer mentorship</span>
                        <span class="chip">Industry-inspired projects</span>
                        <span class="chip">Community service</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="feature-card h-100">
                                <div class="feature-icon bg-primary-subtle text-primary">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <h5 class="fw-bold mb-2">Grow faster</h5>
                                <p class="text-muted mb-0">Workshops and clinics focused on skills employers value.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card h-100">
                                <div class="feature-icon bg-success-subtle text-success">
                                    <i class="fas fa-people-carry"></i>
                                </div>
                                <h5 class="fw-bold mb-2">Collaborate</h5>
                                <p class="text-muted mb-0">Team-based challenges where everyone contributes.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card h-100">
                                <div class="feature-icon bg-warning-subtle text-warning">
                                    <i class="fas fa-lightbulb"></i>
                                </div>
                                <h5 class="fw-bold mb-2">Experiment</h5>
                                <p class="text-muted mb-0">Prototype AI, IoT, robotics, and design concepts quickly.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card h-100">
                                <div class="feature-icon bg-danger-subtle text-danger">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <h5 class="fw-bold mb-2">Give back</h5>
                                <p class="text-muted mb-0">Serve campus and local partners with practical tech solutions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- why join --}}
    <section class="section-shell py-5" id="why-us">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <h3 class="fw-bold text-dark">Why should you join us?</h3>
                    <p class="text-muted">Unlock your potential with a supportive community, modern tooling, and real briefs.</p>
                    <ul class="list-unstyled">
                        <li class="mb-3"><span class="chip chip-soft me-2">1</span> Resources and opportunities to sharpen your skills and reach your goals.</li>
                        <li class="mb-3"><span class="chip chip-soft me-2">2</span> Network with tech enthusiasts, alumni, and industry allies.</li>
                        <li class="mb-3"><span class="chip chip-soft me-2">3</span> Stay current with exclusive events, webinars, and training.</li>
                    </ul>
                    <a href="{{ route('register') }}" class="btn btn-modern px-4">Join now</a>
                </div>
                <div class="col-lg-6">
                    <div class="feature-card h-100">
                        <div class="feature-icon bg-info-subtle text-info">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h5 class="fw-bold mb-2">We are on campus</h5>
                        <p class="text-muted mb-3">Visit Mwenge Catholic University and experience the energy of our community.</p>
                        <div class="map-embed rounded">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.1936153681027!2d37.32347790000001!3d-3.302208199999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1839df349756f46f%3A0x611a580d0cca73ed!2sMwenge%20Catholic%20University!5e0!3m2!1sen!2stz!4v1687271316323!5m2!1sen!2stz"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- team --}}
    <section class="section-shell py-5">
        <div class="container">
            <div class="text-center mb-4">
                <span class="pill-label mb-2 d-inline-flex align-items-center">
                    <i class="fas fa-users me-2"></i> Our Entire Team
                </span>
                <h3 class="fw-bold text-dark">Meet the people powering the club.</h3>
                <p class="text-muted mb-0">Leads, mentors, and contributors working together.</p>
            </div>
            <div class="row g-4 team-sliderAbout">
                @foreach ($teamMembers as $member)
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="team-cardAbout card-with-border shadow-lg">
                            <div class="team-member-img">
                                <img src="{{ asset('images/profilePictures/' . $member->profile_image) }}"
                                    class="shadow-lg mb-4 img-fluid rounded-circle mx-auto" alt="{{ $member->name }}">
                            </div>

                            <div class="card-body text-center">
                                <div class="fw-bold">{{ $member->name }}</div>
                                <div class="text-info fst-italic  mb-3">{{ $member->title }}</div>
                                <div class="social-icons">
                                    <a href="{{ $member->x ?? '#' }}"><i class="fab fa-twitter fs-4"></i></a>
                                    <a href="{{ $member->whatsApp ?? '#' }}"><i class="fab fa-whatsapp mx-1 fs-4"></i></a>
                                    <a href="{{ $member->email ? 'mailto:'.$member->email : '#' }}"><i
                                            class="fab fa-google mx-1 fs-4"></i></a>
                                    <a href="{{ $member->facebook ?? '#' }}"><i
                                            class="fab fa-facebook-f mx-1 fs-4"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
