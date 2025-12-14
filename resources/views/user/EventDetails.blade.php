@extends('layouts.user')
@section('content')
<div class="container-fluid mt-3">
    {{--        <div class="card"> --}}
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-9">
                <div class="car text-light" style="">
                    <div class="card-body">
                        <h1 class="colorIcon text-uppercase mb-4 text-center">{{ $showEventDetails->event_name }}</h1>
                        <img src="{{ asset($showEventDetails->image) }}"
                            alt="{{ $showEventDetails->event_name }}" class="img-fluid shadow-lg"
                            style="width: 100%; height: 200px; object-fit: cover; border-radius: 5px; border: 1px solid #19c357">
                        <div class="mt-5">
                            <p class="text-dark mt-3">
                               {{ $showEventDetails->event_description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-3 mt-3">

                <div class="card">
                    <div class="card-header colorIcon fw-bold">Similar Announcement</div>
                    @php
                        $counter = 1;
                    @endphp
                    @if ($similarEvents->count() > 0)
                        @foreach ($similarEvents as $similarEvent)
                            <div class="card-body"> {{ $counter++ }} . <strong class="">
                                    <a class="text-decoration-none colorIcon"
                                        href="{{ route('EventDetails', ['id' => $innerEvent->id]) }}">
                                        {{ $similarEvent->event_name }}
                                    </a></strong><br>
                                {{ $similarEvent->event_description }} <br>
                                <strong>Date:</strong> {{ $similarEvent->event_date }}
                            </div>
                        @endforeach

                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
