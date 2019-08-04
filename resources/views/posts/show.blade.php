@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-8">
                    <img src="/storage/{{ $post->original_image }}" class="card-img w-100" alt="...">
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <div>
                            <div class="d-flex align-items-center">
                                <div class="pr-3">
                                    <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width: 40px;">
                                </div>
                                <div>
                                    <div class="font-weight-bold">
                                        <a href="/profile/{{ $post->user->id }}">
                                            <span class="text-dark">{{ $post->user->username }}</span>
                                        </a>

                                    </div>
                                </div>
                            </div>

                            <hr>

                            <p>
                                <span class="font-weight-bold">
                                    <a href="/profile/{{ $post->user->id }}">
                                        <span class="text-dark">{{ $post->user->username }}</span>
                                    </a>
                                </span> {{ $post->caption }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
