@extends('layouts.admin')

@section('content')
    <div class="container py-4">
        <a href="{{ route('departments') }}" class="btn btn-outline-secondary mb-3"><i class="fa fa-arrow-left"></i> Back</a>

        <div class="card shadow-sm border-0">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                        <h4 class="fw-bold mb-1">{{ $department->dept_name }}</h4>
                        <p class="text-muted mb-0">Created: {{ $department->created_at?->format('M d, Y') }}</p>
                    </div>
                    @if ($department->dept_cover)
                        <img src="{{ asset($department->dept_cover) }}" alt="{{ $department->dept_name }} cover"
                            class="rounded" style="max-width: 180px; max-height: 120px; object-fit: cover;">
                    @endif
                </div>

                <div class="mb-4">
                    <h6 class="fw-bold">Description</h6>
                    <p class="text-muted mb-0">{{ $department->dept_description }}</p>
                </div>

                <div>
                    <h6 class="fw-bold">Assigned Admins</h6>
                    @if ($department->admins->isEmpty())
                        <p class="text-danger mb-0">No admin assigned</p>
                    @else
                        <ul class="mb-0">
                            @foreach ($department->admins as $admin)
                                <li>{{ $admin->user->fullname ?? 'N/A' }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection




