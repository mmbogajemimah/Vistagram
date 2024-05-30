@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-8 offset-md-2">
        <div class="">
            <div class="card-header text-center">
                <h1 class="h3 mb-3 font-bold">Edit Profile</h1>
            </div>
            <div class="card-body">
                <form action="/profile/{{ $user->id }}" method="post" enctype="multipart/form-data">
                    @csrf <!-- Ensure you have CSRF protection enabled -->
                    @method('PATCH')

                    <div class="form-group mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ??  $user->profile->title }}" autocomplete="title" autofocus>
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}" autocomplete="description" autofocus>
                        @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="url" class="form-label">URL</label>
                        <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url }}" autocomplete="url" autofocus>
                        @error('url')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-5">
                        <label for="image" class="form-label">Profile Image</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-success btn-block">Save Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
