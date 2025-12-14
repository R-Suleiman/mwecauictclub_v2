@extends('layouts.admin')
@section('content')
    @include('admin.message')
    <div class="container">
        <h2 class="colorIcon">Resources Management Panel</h2>
        <hr>
        <a href="{{route('addResource')}}">
            <button class="btn btn-primary mb-3 mt-3"> <i class="fa fa-plus"
                aria-hidden="true"></i> Add
            Resource</button>
        </a>
        @if ($resources->count() > 0)
            <div class="row">
                @foreach ($resources as $resource)
                    <div class="col-12 col-ld-6 col-md-6 mt-3">
                        <div class="card">
                            <div class="card-header text-primary">{{ $resource->file_name }}</div>
                            <div class="card-body">
                                <img src="{{ asset($resource->thumbnail) }}"
                                    class="img-fluid w-100 mt-auto" alt="Profile Picture"
                                    style="height:130px; border-radius: 5px;">
                                <div class="card-text text-dark">{{ $resource->description }}</div>
                                <p class="mt3 fw-bold">Posted By: {{ $resource->user->fullname }}</p>
                                <div class="mt-3 d-flex">

                                    <a href="{{ route('admin.document.preview', $resource->file_name) }}" target="_blank">
                                        <button class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                            Preview</button>
                                    </a>

                                    <form method="POST" action="{{ route('resource.destroy', $resource->id) }}"
                                        enctype="multipart/form-data" class="delete-form d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-sm delete-button delete-btn"><i
                                                class="fa fa-trash-alt" aria-hidden="true"></i> Delete</button>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="alert alert-warning shadow mt-3 fw-bold">Currently no resource is available.
            </p>
        @endif
    </div>

    {{-- Notifications link --}}
    <script src="{{ route('admin') }}"></script>
@endsection
