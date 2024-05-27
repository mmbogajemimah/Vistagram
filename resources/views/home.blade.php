@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5" >
            <img src="/svg/Logo.svg" style="height: 150px;" class="rounded-circle"alt="">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class=""><strong>153</strong> posts</div>
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
        <div class="col-4">
            <img src="https://images.pexels.com/photos/2176593/pexels-photo-2176593.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="w-100" alt="">
        </div>

        <div class="col-4">
            <img src="https://images.pexels.com/photos/214574/pexels-photo-214574.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="w-100" alt="">
        </div>

        <div class="col-4">
            <img src="https://images.pexels.com/photos/392747/pexels-photo-392747.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="w-100" alt="">
        </div>
    </div>
</div>
@endsection
