@extends('layouts.admin')

@section('content')
    <div class="container py-4">
        <a href="{{ route('departments') }}" class="btn btn-outline-secondary mb-3"><i class="fa fa-arrow-left"></i> Back</a>

        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h4 class="fw-bold mb-3">Edit Department</h4>
                <form action="{{ route('admin.departments.update', $department->id) }}" method="POST" enctype="multipart/form-data"
                    autocomplete="off">
                    @csrf
                    @method('PUT')
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="dept_name">Department Name</label>
                            <input type="text" id="dept_name" name="dept_name"
                                class="form-control @error('dept_name') is-invalid @enderror"
                                value="{{ old('dept_name', $department->dept_name) }}">
                            @error('dept_name')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="dept_description">Short Description</label>
                            <textarea id="dept_description" name="dept_description" rows="4"
                                class="form-control @error('dept_description') is-invalid @enderror">{{ old('dept_description', $department->dept_description) }}</textarea>
                            @error('dept_description')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="dept_cover">Cover Image</label>
                            <input type="file" id="dept_cover" name="dept_cover"
                                class="form-control @error('dept_cover') is-invalid @enderror" accept="image/*">
                            @error('dept_cover')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                        @if ($department->dept_cover)
                            <div class="col-12 col-md-6">
                                <label class="form-label d-block">Current Cover</label>
                                <img src="{{ asset($department->dept_cover) }}" alt="{{ $department->dept_name }} cover"
                                    class="rounded" style="max-width: 220px; max-height: 140px; object-fit: cover;">
                            </div>
                        @endif
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary px-4">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection








