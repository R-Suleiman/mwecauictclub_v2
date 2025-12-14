@extends('layouts.user')
@section('content')
<style>
    /* Section Header */
    .section-header {
        font-size: 1.8rem;
        font-weight: 600;
        color: #1a1a1a;
        margin-bottom: 10px;
    }

    hr {
        border-top: 2px solid #183ccc;
        width: 50px;
        margin-left: 0;
        margin-bottom: 30px;
    }

    /* Resource Cards */
    .resourceCard {
        border-radius: 12px;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 8px 20px rgba(0,0,0,0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .resourceCard:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.2);
    }

    .resourceCard img {
        border-radius: 8px;
        transition: transform 0.3s ease;
    }

    .resourceCard img:hover {
        transform: scale(1.05);
    }

    .resourceCard .card-body {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 20px;
    }

    .resourceCard .card-text {
        margin-top: 10px;
        font-size: 0.95rem;
        color: #333;
    }

    .btn-preview {
        background-color: #183ccc;
        border: none;
        color: #fff;
        font-weight: 600;
        transition: background 0.3s ease, transform 0.2s ease;
    }

    .btn-preview:hover {
        background-color: #22d361;
        transform: translateY(-2px);
    }

    /* No resources message */
    .no-resources {
        text-align: center;
        font-size: 1.1rem;
        color: #856404;
        background-color: #fff3cd;
        padding: 20px;
        border-radius: 10px;
        margin-top: 20px;
    }
</style>

<div class="container mt-5">
    <h2 class="section-header">Resources Panel</h2>
    <hr>

    @if ($resources->count() > 0)
        <div class="row g-4">
            @foreach ($resources as $resource)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="resourceCard card h-100">
                        <div class="card-body d-flex flex-column">
                            <div class="text-center fw-bold fs-5 mb-3">{{ $resource->title }}</div>
                            <div class="card-text text-center mb-3">
                                <img src="{{ asset($resource->thumbnail) }}" class="img-fluid w-100" alt="Thumbnail"
                                     style="height: 180px; object-fit: cover; border-radius: 8px; border: 1px solid #19c357">
                            </div>

                            <div class="mt-2">
                                <small class="d-block">Posted By: {{ $resource->user->fullname }}</small>
                                <small class="text-warning d-block">Category: {{ $resource->category }}</small>
                            </div>

                            <a href="{{ route('resource.preview', $resource->file_name) }}" class="mt-auto">
                                <button class="btn btn-preview w-100 mt-3">Preview</button>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="no-resources">
            Currently no resources under <strong class="text-uppercase">{{ $authenticatedUser->category }}</strong> have been posted.
        </div>
    @endif
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"
    integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
