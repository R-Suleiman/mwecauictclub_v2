@extends('layouts.admin')
@section('content')

    <div class="container mt-5 ">
    <form action="{{ route('store') }}" method="POST" class="container my-5"> @csrf <h2 class="mb-4 text-secondary">Registration Numbers</h2> <hr> <div id="registration-numbers"> <div class="row mb-3 registration-number-field"> <div class="col-md-10"> <input type="text" name="registration_numbers[]" value="{{ old('registration_numbers.0') }}" placeholder="Registration Number" required class="form-control @error('registration_numbers.0') is-invalid @enderror"> @error('registration_numbers.0') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror </div> <div class="col-md-2"> <button type="button" class="btn btn-danger remove-registration-number">Remove</button> </div> </div> </div> <div class="row"> <div class="col-12"> <button type="submit" class="btn btn-success">Submit</button> </div> </div> </form> </div>

    <div class="container mt-4">
    <form action="{{ route('admin.register.number') }}" method="GET" class="d-flex mb-3">
        <input type="text" name="search" value="{{ $search ?? '' }}" class="form-control me-2" placeholder="Search registration numbers">
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>

{{-- Verified Registration Numbers Table --}}
<div class="container mt-3">
    <h2 class="mb-4 text-secondary">Verified Registration Numbers</h2>
    <hr>
    @if($verifiedNumbers->count() > 0)
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Registration Number</th>
                        <th>Date Verified</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($verifiedNumbers as $index => $number)
                        <tr>
                            <td>{{ $verifiedNumbers->firstItem() + $index }}</td>
                            <td>{{ $number->registration_number }}</td>
                            <td>{{ $number->created_at->format('Y-m-d H:i:s') }}</td>
                            <td>
                                <form action="{{ route('admin.delete.registration.number', $number->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this registration number?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- Pagination links --}}
        <div class="mt-3 d-flex justify-content-between align-items-center">
            <p class="text-muted mb-0">Showing {{ $verifiedNumbers->firstItem() }} to {{ $verifiedNumbers->lastItem() }} of {{ $verifiedNumbers->total() }} numbers</p>
            {{ $verifiedNumbers->links('pagination::bootstrap-5') }}
        </div>

    @else
        <div class="alert alert-info">
            <p class="mb-0">No verified registration numbers found.</p>
        </div>
    @endif
</div>
@endsection
