@extends('layouts.admin')

@section('content')
<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Event List</h1>
    </div>

    <hr>

    @if ($events->count() > 0)
        <div class="card">
            @foreach ($events as $event)
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <strong>Event Name:</strong> {{ $event->event_name }}

                    <div class="btn-group">
                        <a href="{{ route('eventEdit', $event->id) }}"
                           class="btn btn-sm btn-light">
                             Edit
                        </a>

                        <form action="{{ route('eventDestroy', $event->id) }}"
                              method="POST"
                              onsubmit="return confirm('Are you sure you want to delete this event?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                 Delete
                            </button>
                        </form>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img
                                src="{{ asset($event->image) }}"
                                alt="{{ $event->event_name }}"
                                class="img-fluid shadow-lg"
                                style="width: 100%; height: 200px; object-fit: cover; border-radius: 5px; border: 1px solid #19c357">
                        </div>

                        <div class="col-md-8">
                            <p class="card-text">
                                <strong>{{ $event->event_name }}</strong>
                                <span class="text-muted">— {{ $event->event_date }}</span>
                                <br><br>
                                <strong>Description:</strong>
                                {{ $event->event_description }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="alert alert-warning">
            No events found.
        </div>
    @endif

</div>
@endsection
