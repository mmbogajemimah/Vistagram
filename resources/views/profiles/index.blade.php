@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5" >
            <img src="/svg/Logo.svg" style="height: 150px;" class="rounded-circle"alt="">
        </div>
        <div class="col-9 pt-5">
            <div class='d-flex justify-content-between align-items-baseline'>
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add New Post</a>
            </div>
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
                <img src="/storage/{{ $post->image }}" class="w-100" alt="">
            </div>
        @endforeach
    </div>
</div>
@endsection
