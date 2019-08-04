@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-3 p-5">
        <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
    </div>
    <div class="col-md-9 col-sm-12 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
            <div class="d-flex align-items-center pb-3 align-items-baseline">
                <div class="h2">{{ $user->username }}</div>
                @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit" class="ml-4 btn btn-outline-dark">Edit Profile</a>
                @endcan
            </div>
            @can('update', $user->profile)
                <a href="/p/create" >Add New Meme</a>
            @endcan
            @cannot('update', $user->profile)
                <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
            @endcannot

        </div>

        <div class="d-flex">
            <div class="pr-5"><strong>{{ $postCount }}</strong> memes</div>
            <div class="pr-5"><strong>{{ $followersCount }}</strong> followers</div>
            <div class="pr-5"><strong>{{ $followingCount }}</strong> following</div>
        </div>

        <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>

        <div>{{ $user->profile->description }}</div>

        <div><a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a></div>
    </div>
</div>
    <hr>
    <div class="row">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img class="w-100 posts"  src="/storage/{{ $post->image }}" >
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
