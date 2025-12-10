@extends('layouts.web')

@section('content')
    @php
        $cover = $department['dept_cover'] ?? 'img/pro.jpg';
        $accent = $department['accent'] ?? '#4f46e5';
    @endphp

    <section class="py-5" style="
        background: linear-gradient(135deg, {{ $accent }} 0%, rgba(16, 24, 40, 0.92) 55%),
        url('{{ asset($cover) }}') center/cover no-repeat;
        ">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-7 text-white">
                    <span class="badge rounded-pill mb-3" style="background: rgba(255,255,255,0.15);">
                        Learn. Build. Showcase.
                    </span>
                    <h1 class="display-4 fw-bold">{{ $department['dept_name'] ?? 'Department' }}</h1>
                    <div class="d-flex flex-wrap gap-3 mt-4">
                        <a href="{{ route('register') }}" class="btn btn-modern px-4">Join this track</a>
                        <a href="{{ route('contact.page') }}" class="btn btn-ghost text-light px-4">Talk to us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <section class="py-5 bg-light">
    <div class="container">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h5 class="fw-bold mb-2">{{ $department['dept_name'] ?? 'this track' }}</h5>
                <p class="text-muted mb-0">{{ $department['dept_description'] ?? '' }}</p>
            </div>
        </div>
    </div>
   </section>


    <section class="py-5 bg-light">
        <div class="container">
            <div class="card shadow-sm border-0">
                <div class="card-body d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center">
                    <div>
                        <h5 class="fw-bold mb-2">Ready to explore {{ $department['dept_name'] ?? 'this track' }}?</h5>
                        <p class="text-muted mb-0">Join the next session or reach out for mentorship details.</p>
                    </div>
                    <div class="d-flex gap-2 mt-3 mt-md-0">
                        <a href="{{ route('register') }}" class="btn btn-modern px-4">Join now</a>
                        <a href="{{ route('contact.page') }}" class="btn btn-outline-secondary px-4">Ask a question</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
