@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5" >
            <img src="{{ $user->profile->profileImage() }}" style="height: 150px; width: 150px" class="rounded-circle"alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline mb-4">
                <div class="d-flex align-items-center">
                    <h4 class="mb-0">{{ $user->username }}</h4>
                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>
                @can ('update', $user->profile)
                    <a href="/p/create" class="btn btn-outline-secondary">Add New Post</a>
                @endcan
            </div>
            
            @can ('update', $user->profile)
                <div class="d-flex justify-content-end">
                    <a href="/profile/{{ $user->id }}/edit" class="btn btn-outline-primary">Edit Profile</a>
                </div>
            @endcan
            
            <div class="d-flex">
                <div class=""><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="ps-4"><strong>23k</strong> followers</div>
                <div class="ps-4"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-wight-bold"><h4>{{ $user->profile->title }}</h4></div>
            <div>
                <p> 
                    {{ $user->profile->description}}
                </p>
            </div>
            <div><a href="#">{{ $user->profile->url ?? 'N/A' }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100" alt="">
                </a>
                
            </div>
        @endforeach
    </div>
</div>
@endsection
