@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="col-md-8 offset-md-2">
        <div class="">
            <div class="card-header text-center">
                <h1 class="h3 mb-3 font-bold">Add New Post</h1>
            </div>
            <div class="card-body">
                <form action="/p" method="post" enctype="multipart/form-data">
                    @csrf <!-- Ensure you have CSRF protection enabled -->

                    <div class="form-group mb-3">
                        <label for="caption" class="form-label">Post Caption</label>
                        <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus>
                        @error('caption')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-5">
                        <label for="image" class="form-label">Post Image</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-success btn-block">Add Image</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
