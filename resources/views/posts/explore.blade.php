@extends('layouts.app')
@section('content')




            <div class="container">
                <div class="card">
                    <div class="card-header">Explore memes</div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($posts as $post)
                                <div class="col-4 pb-4">
                                    <a href="/p/{{ $post->id }}">
                                        <img class="w-100 posts"  src="/storage/{{ $post->image }}" >
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>

            <br><br>

@endsection
