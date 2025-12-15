@extends('layouts.graphics-designing')
@section('content')

<form action="{{ route('password.update') }}" method="POST" class="card shadow-sm p-4 mt-4">
    @csrf

    <h5 class="mb-3 text-secondary">Change Password</h5>

    <div class="mb-3">
        <label class="form-label">Current Password</label>
        <input type="password" name="current_password"
               class="form-control @error('current_password') is-invalid @enderror"
               required>
        @error('current_password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">New Password</label>
        <input type="password" name="new_password"
               class="form-control @error('new_password') is-invalid @enderror"
               required>
        @error('new_password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Confirm New Password</label>
        <input type="password" name="new_password_confirmation"
               class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary w-100">
        Update Password
    </button>
</form>

@endsection
