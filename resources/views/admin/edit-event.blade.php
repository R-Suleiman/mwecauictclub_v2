@extends('layouts.admin')

@section('content')
<div class="container mt-5">

    <h1 class="mb-3">Edit Event</h1>
    <hr>

    {{-- Validation Errors --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">

            <form action="{{ route('eventUpdate', $event->id) }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Event Name</label>
                    <input type="text"
                           name="event_name"
                           class="form-control"
                           value="{{ old('event_name', $event->event_name) }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Event Date</label>
                    <input type="date"
                           name="event_date"
                           class="form-control"
                           value="{{ old('event_date', $event->event_date) }}"
                           required>
                </div>

                {{-- CURRENT IMAGE --}}
                <div class="mb-3">
                    <label class="form-label d-block">Current Image</label>
                    <img src="{{ asset($event->image) }}"
                         alt="Event Image"
                         class="img-thumbnail mb-2"
                         style="max-width: 300px;">
                </div>

                {{-- NEW IMAGE --}}
                <div class="mb-3">
                    <label class="form-label">Change Image (optional)</label>
                    <input type="file"
                           name="image"
                           class="form-control"
                           accept="image/*">
                    <small class="text-muted">
                        Leave empty to keep current image.
                    </small>
                </div>

                <div class="mb-3">
                    <label class="form-label">Event Description</label>
                    <textarea name="event_description"
                              class="form-control"
                              rows="5"
                              required>{{ old('event_description', $event->event_description) }}</textarea>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-success">
                         Update Event
                    </button>

                    <a href="{{ route('AdminDashboard') }}"
                       class="btn btn-secondary">
                        Cancel
                    </a>
                </div>

            </form>

        </div>
    </div>

</div>
@endsection
