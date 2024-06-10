@extends('layouts.app')

@section('content')
<div class="container mt-5">
    @foreach($posts as $post)
    <div class="row justify-content-center">
        <div class="col-md-5 mb-4">
            <!-- Combined Profile and Post Card -->
            <div class="card shadow-lg">
                <!-- Profile and Post Header -->
                <div class="card-header bg-white d-flex align-items-center p-3">
                    <img src="/storage/{{ $post->user->profile->image }}" alt="profile-image" class="rounded-circle me-3" style="width: 50px; height: 50px;">
                    <div class="d-flex flex-column">
                        <a href="/profile/{{ $post->user->id }}" class="text-dark text-decoration-none font-weight-bold">{{ $post->user->username }}</a>
                        <small class="text-muted">Posted on {{ $post->created_at->format('M d, Y') }}</small>
                    </div>
                    <div class="ms-auto">
                        <a href="#" class="btn btn-outline-primary btn-sm">Follow</a>
                    </div>
                </div>

                <!-- Post Image -->
                <div class="card-body p-0">
                    <img src="/storage/{{ $post->image }}" alt="post-image" class="w-100">
                </div>

                <!-- Post Caption and Profile Details -->
                <div class="card-body">
                    <p class="mb-2">
                        <strong>
                            <a href="/profile/{{ $post->user->id }}" class="text-dark text-decoration-none">{{ $post->user->username }}</a>
                        </strong>
                        : {{ $post->caption }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
