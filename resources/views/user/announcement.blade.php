@extends('layouts.user')
@section('content')
<style>
    /* Card Hover Effects */
    .event-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .event-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.2);
    }

    /* Dashboard Card */
    .DashboardCard {
        border-radius: 15px;
        overflow: hidden;
        background: linear-gradient(135deg, #1e3c72, #2a5298);
        color: #fff;
        min-height: 470px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        transition: background 0.3s ease;
    }

    .DashboardCard img {
        border-radius: 8px;
        transition: transform 0.3s ease, opacity 0.3s ease;
    }

    .DashboardCard img:hover {
        transform: scale(1.05);
        opacity: 0.9;
    }

    .card-body {
        padding: 20px;
    }

    .card-text {
        font-size: 0.95rem;
        color: #f0f0f0;
    }

    .btn-read-more {
        background-color: #ffb347;
        border: none;
        color: #fff;
        font-weight: 600;
        transition: background 0.3s ease, transform 0.2s ease;
    }

    .btn-read-more:hover {
        background-color: #ffcc66;
        transform: translateY(-2px);
    }

    /* Section Header */
    .section-header {
        font-size: 1.8rem;
        font-weight: 600;
        margin-bottom: 10px;
        color: #1a1a1a;
    }

    hr {
        border-top: 2px solid #ffb347;
        width: 50px;
        margin-left: 0;
        margin-bottom: 30px;
    }

    /* No events message */
    .no-events {
        text-align: center;
        font-size: 1.1rem;
        color: #856404;
        background-color: #fff3cd;
        padding: 20px;
        border-radius: 10px;
    }
</style>

<div class="container mt-5">
    <h2 class="section-header">Announcements</h2>
    <hr>
</div>

<div class="container">
    @if ($events->count() > 0)
        <div class="row g-4">
            @foreach ($events as $event)
                <div class="col-12 col-md-6 col-lg-4 event-card">
                    <div class="DashboardCard card shadow-sm">
                        <div class="card-body d-flex flex-column">
                            <a class="text-decoration-none mb-3" href="{{ route('EventDetails', ['id' => $event->id]) }}">
                                <img src="{{ asset($event->image) }}" alt="{{ $event->event_name }}"
                                    class="img-fluid shadow-sm" style="width: 100%; height: 200px; object-fit: cover;">
                            </a>
                            <h5 class="mb-2">{{ $event->event_name }}</h5>
                            <p class="card-text flex-grow-1">
                                <strong>Description:</strong> {{ $event->event_description }}
                            </p>
                            <a class="btn btn-read-more mt-3 align-self-start"
                                href="{{ route('EventDetails', ['id' => $event->id]) }}">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="no-events">
            <p>No events found.</p>
        </div>
    @endif
</div>
@endsection
