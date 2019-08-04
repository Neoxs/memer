@extends('layouts.app')
@section('content')




            <div class="container col-md-6 offset-3">


                @foreach($posts as $post)
                    <div class="card">
                        <div class="card-header">
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
                        </div>

                        <div class="card-body">
                                <a href="/profile/{{ $post->user_id }}">
                                    <img src="/storage/{{ $post->original_image }}" class="w-100">
                                </a>
                                <hr>
                                <div>
                                    <p>
                                        <span class="font-weight-bold pr-2">
                                            <a href="/profile/{{ $post->user->id }}">
                                                <span class="text-dark">{{ $post->user->username }}</span>
                                            </a>

                                        </span> {{ $post->caption }}
                                    </p>

                                </div>

                    </div>

                @endforeach
                <br>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>



@endsection
