@extends('layouts.user')
@section('content')

{{-- Page-level styles (clean + minimal) --}}

<style>
    :root {
        --primary: #2C3592;
        --accent: #19c357;
    }

    .bg-primary-soft {
        background: linear-gradient(135deg, var(--primary), #1f256b);
    }

    .text-primary-soft { color: var(--primary); }

    .profile-avatar {
        width: 140px;
        height: 140px;
        object-fit: cover;
        border: 4px solid var(--accent);
    }

    .info-label { color: #6c757d; font-size: .9rem; }
    .info-value { font-weight: 600; }

    .dashboard-card {
        border: none;
        border-radius: 14px;
    }

    .dashboard-card .card-header {
        border-radius: 14px 14px 0 0;
    }
</style>

<div class="container py-5">


{{-- Flash Messages --}}
@foreach (['success' => 'success', 'fail' => 'danger'] as $key => $type)
    @if (session()->has($key))
        <div class="alert alert-{{ $type }} alert-dismissible fade show" role="alert">
            {{ session($key) }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
@endforeach

{{-- Profile reminder --}}
@if (!Auth::user()->profile_picture)
    <div class="alert alert-warning text-center">
         Hi <strong>{{ Auth::user()->fullname }}</strong>, please update your profile picture for a better experience.
    </div>
@endif

<div class="row g-4 align-items-stretch">

    {{-- PROFILE CARD --}}
    <div class="col-lg-5">
        <div class="card dashboard-card shadow-sm h-100">
            <div class="card-header bg-primary-soft text-white">
                <strong>Member Profile</strong>
            </div>

            <div class="card-body text-center">
                <img
                    src="{{ Auth::user()->profile_picture
                        ? asset(Auth::user()->profile_picture)
                        : asset('img/logo.jpg') }}"
                    class="rounded-circle profile-avatar mb-3"
                    alt="Profile Picture">

                <h5 class="fw-bold text-muted mb-1">{{ Auth::user()->fullname }}</h5>
                <p class="text-muted mb-3">{{ Auth::user()->registration_number }}</p>

                <div class="row text-start px-3">
                    <div class="col-6 mb-2">
                        <div class="info-label">Course</div>
                        <div class="info-value">{{ Auth::user()->course }}</div>
                    </div>
                    <div class="col-6 mb-2">
                        <div class="info-label">Category</div>
                        <div class="info-value text-uppercase">{{ Auth::user()->category }}</div>
                    </div>
                    <div class="col-12 mt-2">
                        <div class="info-label">Payment Status</div>
                        <span class="badge bg-success fs-6">{{ Auth::user()->payment_status }}</span>
                    </div>
                </div>
            </div>

            <div class="card-footer bg-white d-grid gap-2">
                <a href="{{ route('member.profile.update.form', [$authenticatedUser->id]) }}"
                   class="btn btn-outline-primary">
                    Update Profile
                </a>
                <a href="{{ route('membership.card.print') }}" class="btn btn-primary">
                    Print Membership Card
                </a>
            </div>
        </div>
    </div>

    {{-- WELCOME / INFO --}}
    <div class="col-lg-7">
        <div class="card dashboard-card shadow-sm h-100">
            <div class="card-body">
                <h3 class="fw-bold mb-3">
                    Welcome back, <span class="text-primary-soft text-uppercase">{{ Auth::user()->fullname }}</span>
                </h3>

                <p class="text-muted">
                    This is your ICT Club member dashboard. From here, you can manage your profile,
                    track your membership status, and stay connected with fellow members.
                </p>

                <hr>

                <h5 class="fw-bold text-muted mb-3">Fellow {{ ucfirst(Auth::user()->category) }} Members</h5>

                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Registration No</th>
                                <th>Category</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fellowMembers as $index => $member)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $member->registration_number }}</td>
                                    <td class="text-uppercase">{{ $member->category }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

{{-- Footer note --}}
<div class="alert alert-info mt-5">
    <strong>Note:</strong> If any of your information is missing or incorrect,
    please contact the <strong>Club Chairperson</strong> for assistance.
</div>

</div>
@endsection
