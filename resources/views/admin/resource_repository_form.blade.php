@extends('layouts.admin')
@section('content')
    @include('admin.message')
    <div class="container">
        <h2 class="colorIcon">Resources Management Panel</h2>
        <hr>
        <form action="{{ route('admin.upload.resources') }}" method="post" enctype="multipart/form-data">
            @method('post')
            @csrf
            <div class="form-group">
                <label class="mb-3 mt-3" for="title">Resource Name:</label>
                <input type="text" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror"
                    name="title" id="resourceTitle">
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="mb-3 mt-3" for="description">Resource Description:</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                    rows="3">{{ old('description') }}</textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label class="mb-3 mt-3" for="category">Resource Category:</label>
                <select class="form-control @error('category') is-invalid @enderror" id="department" name="category">
                    <option value="cyber security">Cyber Security</option>
                    <option value="programming">Programming</option>
                    <option value="graphics designing">graphics designing</option>
                </select>

                @error('category')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mt-3">
                <label class="mb-3 mt-3" for="file">Resource File:</label>
                <input type="file" value="{{ old('file') }}" class="form-control @error('file') is-invalid @enderror"
                    id="file" name="file">

                @error('file')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mt-3">
                <label class="mb-3 mt-3" for="thumbnail">Resource thumbnail</label>
                <input type="file" value="{{ old('thumbnail') }}"
                    class="form-control @error('thumbnail') is-invalid @enderror" id="thumbnail" name="thumbnail">

                @error('thumbnail')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mb-3 mt-3" id="submitBtn"> <i class="fa fa-upload"
                    aria-hidden="true"></i> Upload
                Resource</button>
        </form>
    </div>

    {{-- Notifications link --}}
    <script src="{{ route('admin') }}"></script>
@endsection
