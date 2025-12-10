@extends('layouts.web')
@section('content')
<section class="hero-modern py-5">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <span class="pill-label mb-3 d-inline-flex align-items-center">
                    <i class="fas fa-bullhorn me-2"></i> Event highlight
                </span>
                <h1 class="display-4 fw-bold text-white lh-tight">{{ $showEventDetails->event_name }}</h1>
                <p class="lead text-light opacity-75 mt-3">
                    Explore details, dates, and related announcements from our community.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="section-shell py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-12 col-lg-8">
                <div class="project-card h-100">
                    <div class="project-thumb" style="background-image: url('{{ asset('images/events/' . $showEventDetails->image) }}'); height: 360px;"></div>
                    <div class="project-body">
                        <h3 class="fw-bold mb-2 text-dark">{{ $showEventDetails->event_name }}</h3>
                        <p class="text-muted mb-3">{{ $showEventDetails->event_description }}</p>
                        <div class="d-flex gap-2 flex-wrap">
                            <span class="chip chip-soft"><i class="far fa-calendar-alt me-1"></i> {{ $showEventDetails->event_date }}</span>
                            <span class="chip chip-soft"><i class="fas fa-map-marker-alt me-1"></i> On campus / virtual</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="side-card h-100">
                    <h5 class="fw-bold text-dark mb-3">Similar announcements</h5>
                    @php
                        $counter = 1;
                    @endphp
                    @if ($similarEvents->count() > 0)
                        @foreach ($similarEvents as $similarEvent)
                            <div class="mb-3 pb-3 border-bottom">
                                <div class="d-flex justify-content-between">
                                    <strong class="text-dark">
                                        {{ $counter++ }}.
                                        <a class="text-decoration-none colorIcon"
                                            href="{{ route('event.details', ['id' => $similarEvent->id]) }}">
                                            {{ $similarEvent->event_name }}
                                        </a>
                                    </strong>
                                    <span class="chip chip-soft">{{ $similarEvent->event_date }}</span>
                                </div>
                                <p class="text-muted mb-2">{{ $similarEvent->event_description }}</p>
                            </div>
                        @endforeach
                    @else
                        <p class="alert alert-warning mt-2 mb-0" role="alert">Currently, there are no similar events.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
