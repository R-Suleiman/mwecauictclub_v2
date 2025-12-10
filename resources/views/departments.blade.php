@extends('layouts.web')
@section('content')
<section class="hero-modern py-5">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <span class="pill-label mb-3 d-inline-flex align-items-center">
                        <i class="fas fa-layer-group me-2"></i> Our Departments
                    </span>
                    <h1 class="display-4 fw-bold text-white lh-tight">Pick a track, explore them all.</h1>
                    <p class="lead text-light opacity-75 mt-3">
                        Programming, Graphics, Networking, Web, Maintenance, and Cybersecurity—each with real projects and mentors.
                    </p>
                    <div class="d-flex flex-wrap gap-3 mt-4">
                        <a href="{{ route('register') }}" class="btn btn-modern px-4">Join now</a>
                        <a href="#tracks" class="btn btn-ghost text-light px-4">Browse tracks</a>
                    </div>
                </div>
                <div class="col-lg-5 mt-5 mt-lg-0">
                    <div class="hero-grid">
                        <div class="glass-card">
                            <div class="badge-soft mb-2"><i class="fas fa-bolt me-2"></i>Get benefited</div>
                            <p class="mb-0 text-light-70">Learn by doing with peers, sprints, and showcases.</p>
                        </div>
                        <div class="glass-card">
                            <div class="badge-soft mb-2"><i class="fas fa-chalkboard-teacher me-2"></i>Mentorship</div>
                            <p class="mb-0 text-light-70">Support from alumni, facilitators, and industry friends.</p>
                        </div>
                        <div class="glass-card">
                            <div class="badge-soft mb-2"><i class="fas fa-briefcase me-2"></i>Career ready</div>
                            <p class="mb-0 text-light-70">Portfolio pieces and demos you can showcase.</p>
                        </div>
                        <div class="glass-card">
                            <div class="badge-soft mb-2"><i class="fas fa-people-arrows me-2"></i>Community</div>
                            <p class="mb-0 text-light-70">Collaborate, get feedback, and improve fast.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-shell py-5" id="tracks">
        <div class="container">
            <div class="text-center mb-4">
                <h3 class="fw-bold text-dark">Explore each division</h3>
                <p class="text-muted mb-0">Deep dives with projects, labs, and peer reviews.</p>
            </div>
            <div class="row g-4">
                @foreach ($departments as $department)
                @php
                    $cover = $department['dept_cover'] ?? 'img/pro.jpg';
                @endphp
                    <div class="col-lg-4 col-md-6">
                        <div class="project-card h-100">
                            <div class="project-thumb"
                                style="background-image: url('{{ asset($cover) }}');">
                            </div>
                            <div class="project-body">
                                <h5 class="fw-bold mb-1">{{ $department['dept_name'] }}</h5>
                                <p class="text-muted mb-3">{{ substr($department['dept_description'], 0, 100) . '...' }}</p>
                                <a href="{{ route('single-department.page', $department['dept_name']) }}" class="btn btn-modern btn-sm">More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
